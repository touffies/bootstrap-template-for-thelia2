/* JQUERY PREVENT CONFLICT */
(function($) {


/*	------------------------------------------------------------------
	onLoad Function -------------------------------------------------- */
	$(document).ready(function(){

		// Loader
		var $loader = $('<div class="loader"></div>');
		$('body').append($loader);

		// Display loader if we do ajax call
		$(document)
			.ajaxStart(function() { $loader.show(); })
			.ajaxStop(function(){ $loader.hide(); });

		// Main Navigation Hover
		$('.nav-main')
		.on('click.subnav', '[data-toggle=dropdown]', function(event){
			if($(this).parent().hasClass('open') && $(this).is(event.target))
				return false;
		})
		.on('mouseenter.subnav', '.dropdown', function(event){
			if($(this).hasClass('open'))
				return;

			$(this).addClass('open');
		})
		.on('mouseleave.subnav', '.dropdown', function(){
			if(!$(this).hasClass('open'))
				return;
			$(this).removeClass('open');
		});

		// Tooltip
		$('body').tooltip({
			selector: '[data-toggle=tooltip]'
		});

		// Popover
		/*
var confirm_delete = {
    		html : true
    		, placement: 'left'
    		, title: 'Are you sure?'
    		, content: '<div class="btn-group">' +
    				'<a class="btn btn-small" href="" target=""></a>' +
    				'<a class="btn btn-small" data-dismiss="confirmation"></a>' +
    				'</div>'
    	};
		$('[data-toggle=confirmation]').popover(confirm_delete);
*/
        // en-US translation for bootbox
        //if(window.bootbox) bootbox.setDefaults({locale: "fr"});

		$(document).on('click.confirm', '[data-toggle="confirm"]', function (e) {
			var $this	= $(this),
				href	= $this.attr('href'),
				title	= $this.attr('data-confirm-title') ? $this.attr('data-confirm-title') : 'Are you sure?';

				bootbox.confirm(title, function(confirm) {
					if(confirm){
						if(href){
							window.location.href = href;
						} else {
							// If forms
							var $form = $this.closest("form");
							if($form.size() > 0){
								$form.submit();
							}
						}
					}
				});

			return false;
		});

		// Toolbar
		var $category_products = $('#category-products');
		if($category_products.size() > 0){
			var $parent = $category_products.parent();

			$parent.on('click.view-mode', '[data-toggle=view]', function(){
				if( ($(this).hasClass('btn-grid') && $parent.hasClass('grid')) || ($(this).hasClass('btn-list') && $parent.hasClass('list')))
					return;

				// Add loader effect
				$loader.show();
				setTimeout(function(){ $parent.toggleClass('grid').toggleClass('list'); $loader.hide(); }, 400);

				return false;
			});
		}

		// Login
		var $form_login = $('#form-login');
		if($form_login.size() > 0) {
			$form_login.on('change.account', ':radio', function(){
				if($(this).val() === '0')
					$('#password', $form_login).val('').prop('disabled', true); // Disabled (new customer)
				else
					$('#password', $form_login).prop('disabled', false); // Enabled
			}).find(':radio:checked').trigger('change.account');
		}

		// Forgot Password
/*
		var $forgot_password = $('.forgot-password', $form_login);
		if($forgot_password.size() > 0) {
			$forgot_password.popover({
				html : true,
				title: 'Forgot Password',
				content: function() {
					return $('#form-forgotpassword').html();
				}
			}).on('click.btn-forgot', function(){

				$('.btn-forgot').click(function(){
					alert('click form');
					return false;
				});

				$('.btn-close').click(function(){
					$forgot_password.popover('hide');
				});

				return false;
			});
		}
*/

		//.Form Filters
		$('#form-filters').each(function(){
			var $form = $(this);
			$form
			.on('change.filter', ':checkbox', function(){
				$loader.show();

				$form.submit();
			})
			.find('.group-btn > .btn').addClass('sr-only');
		});
		/*
$('#form-filters').each(function(){
			var $form = $(this);

			$form
			.on('change.filter', ':checkbox', function(){
				$form.submit();
			})
			.find('.group-btn > .btn').addClass('sr-only');
		});
*/

		// Product details Thumbnails
		$('#product-gallery').each(function(){
			var $item = $('.item', this),
				$thumbnails = $('.thumbnail', this),
				$image = $('.product-image > img', this);

			// Show Carousel control if needed
			if($item.size() > 1){
				$('#product-thumbnails', this).carousel({interval: false}).find('.carousel-control').show();
			}

			$(this).on('click.thumbnails', '.thumbnail', function(){
				if($(this).hasClass('active'))
					return false;

				$image.attr('src',$(this).attr('href'));
				$thumbnails.removeClass('active');
				$(this).addClass('active');

				return false;
			});
		});

		// Payment Method
		$('#payment-method').each(function(){
			var $label = $('label', this);
			$label.on('change', ':radio', function(){
				$label.removeClass('active');
				$label.filter('[for="' + $(this).attr('id') + '"]').addClass('active');
			}).filter(':has(:checked)').addClass('active');
		});
	});

})(jQuery);

