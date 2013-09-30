<?php
    // Parameters
    $page = 'product-details';
    $product_related = 6;
    $color = array('Blue', 'Orange', 'Purple', 'Yellow');
    $size = array('X-Large', 'Large', 'Medium', 'Small');


?><?php include('inc/head.php') ?>

<body class="page-<?php echo $page; ?>" itemscope itemtype="http://schema.org/WebPage">

	<!-- Accessibility -->
	<a class="sr-only" href="#content">Skip to content</a>

	<div class="page" role="document">

		<?php include('inc/header.php') ?>

		<main class="main-container">
			<div class="container">

				<nav class="nav-breadcrumb" role="navigation" aria-labelledby="breadcrumb-label">
					<strong id="breadcrumb-label">You are here: </strong>
					<ul class="breadcrumb" itemprop="breadcrumb">
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.php" itemprop="url"><span itemprop="title">Home</span></a></li>
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="category.php" itemprop="url"><span itemprop="title">Category 1</span></a></li>
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="category.php" itemprop="url"><span itemprop="title">Category 1.2</span></a></li>
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title">Product name</span></li>
					</ul>
				</nav><!-- /.nav-breadcrumb -->

				<div class="main">

					<article id="product" class="col-main" role="main" itemscope itemtype="http://schema.org/Product">

						<!-- Use the meta tag to specify content that is not visible on the page in any way -->
						<meta itemprop="brand" content="Diesel">
						<meta itemprop="productID" content="isbn:925872">

						<section id="product-gallery">
							<figure class="product-image">
								<img src="img/product/1/560x445.png" alt="img1" class="img-responsive" itemprop="image" data-toggle="magnify">
							</figure>

							<div id="product-thumbnails" class="slide" style="position:relative;">
								<div class="carousel-inner">
									<div class="item active">
										<ul>
											<li><a href="img/product/1/560x445.png" class="thumbnail active"><img src="img/product/1/118x85.png" alt="Thumb #1"></a></li>
											<li><a href="img/product/1/560x445.png" class="thumbnail"><img src="img/product/1/118x85.png" alt="Thumb #2"></a></li>
											<li><a href="img/product/1/560x445.png" class="thumbnail"><img src="img/product/1/118x85.png" alt="Thumb #3"></a></li>
											<li><a href="img/product/1/560x445.png" class="thumbnail"><img src="img/product/1/118x85.png" alt="Thumb #4"></a></li>
											<li><a href="img/product/1/560x445.png" class="thumbnail"><img src="img/product/1/118x85.png" alt="Thumb #5"></a></li>
										</ul>
									</div>
									<div class="item">
										<ul>
											<li><a href="img/product/1/560x445.png" class="thumbnail"><img src="img/product/1/118x85.png" alt="Thumb #6"></a></li>
											<li><a href="img/product/1/560x445.png" class="thumbnail"><img src="img/product/1/118x85.png" alt="Thumb #7"></a></li>
											<li><a href="img/product/1/560x445.png" class="thumbnail"><img src="img/product/1/118x85.png" alt="Thumb #8"></a></li>
										</ul>
									</div>
								</div>

								<a class="left carousel-control" href="#product-thumbnails" data-slide="prev"><i class="icon-prev"></i></a>
								<a class="right carousel-control" href="#product-thumbnails" data-slide="next"><i class="icon-next"></i></a>
							</div>
						</section>

						<section id="product-details">
							<div class="product-info">
								<h1 class="name"><span itemprop="name">Product #2</span></h1>
								<span itemprop="sku" class="sku">Ref.: 25418</span>

								<div class="short-description">
									<p>postremo agnitus saepe iamque, si prodisset, conspicuum se fore contemplans, non nisi luce palam egrediens ad agenda quae putabat.</p>
								</div>
							</div>


							<div class="product-price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
								<div class="availability"><span class="availibity-label">Availability: </span><span itemprop="availability" href="http://schema.org/InStock" class="in-stock">In stock</span></div>

								<div class="price-container">
									<meta itemprop="category" content="Category1">
									<meta itemprop="itemCondition" itemscope itemtype="http://schema.org/NewCondition"> <!-- List of condition : NewCondition, DamagedCondition, UsedCondition, RefurbishedCondition -->
									<meta itemprop="priceCurrency" content="USD"> <!-- List of currency : The currency used to describe the product price, in three-letter ISO format. -->
									<link itemprop="availability" href="http://schema.org/InStock" content="in_stock" />
									<!-- List of availibility :
										out_of_stock : http://schema.org/OutOfStock
										in_stock : http://schema.org/InStock
										instore_only : http://schema.org/InStoreOnly
										preorder : http://schema.org/PreOrder
										online_only : http://schema.org/OnlineOnly
									-->
									<span class="special-price"><span class="price-label">Special Price: </span><span itemprop="price" class="price">$26.00</span></span>
									<span class="old-price"><span class="price-label">Regular Price: </span><span class="price">$36.00</span></span>
								</div>
							</div>


							<form id="form-product-details" action="cart.php" method="post" role="form">

								<!-- Hidden fields -->
								<div class="hidden">
									<input type="hidden" name="product" value="1" />
								</div>

								<fieldset class="product-options">
									<div class="option option-color">
										<label for="option-color" class="option-heading">Show</label>
										<div class="option-content">
											<select id="option-color" name="option-color" class="form-control">
<?php foreach ($color as $key => $value) { ?>
											<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
<?php } ?>
											</select>
										</div>
									</div>

									<div class="option option-size">
										<fieldset>
											<legend class="option-heading">Size</legend>
											<div class="option-content">
<?php foreach ($size as $key => $value) { ?>
											<label class="checkbox-inline" for="size<?php echo $key; ?>">
												<input type="checkbox" name="size<?php echo $key; ?>" id="size<?php echo $key; ?>" value="<?php echo $key; ?>"> <?php echo $value; ?>
											</label>
<?php } ?>
											</div>
										</fieldset>
									</div>
								</fieldset>
								<fieldset class="product-cart form-inline">
									<div class="form-group group-qty">
										<label for="quantity">Quantity</label>
										<input type="number" name="quantity" id="quantity" class="form-control" value="1" min="0" required>
									</div>

									<div class="form-group group-btn">
										<button type="submit" class="btn btn_add_to_cart">Add to cart</button>
 									</div>
								</fieldset>
							</form>
						</section>

						<section id="product-tabs">
							<ul class="nav nav-tabs" role="tablist">
								<li class="active" role="presentation"><a id="tab1" href="#description" data-toggle="tab" role="tab">Description</a></li>
								<li role="presentation"><a id="tab2" href="#additional" data-toggle="tab" role="tab">Additional Info</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-panel active in" id="description" itemprop="description" role="tabpanel" aria-labelledby="tab1">
									<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
								</div>
								<div class="tab-panel" id="additional" role="tabpanel" aria-labelledby="tab2">
									<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
								</div>
							</div>
						</section>
					</article><!-- /product -->

					<ul class="pager">
						<li class="previous"><a href="#">Previous product</a></li>
						<li class="next"><a href="#">Next product</a></li>
					</ul

				></div>

			</div><!-- /.container -->
		</main><!-- /.main-container -->

		<?php include('inc/footer.php') ?>

	</div><!-- /.page -->


	<?php include('inc/script.php') ?>

</body>
</html>