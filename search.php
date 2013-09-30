<?php
    // Parameters
    $page = 'search';
    $product = 10;
    $type = 4;

?><?php include('inc/head.php') ?>

<body class="page-<?php echo $page; ?>" itemscope itemtype="http://schema.org/WebPage">

	<!-- Accessibility -->
	<a class="sr-only" href="#content">Skip to content</a>

	<div class="page" role="document">

		<?php include('inc/header.php') ?>

		<main class="main-container">
			<div class="container">

				<div class="main layout-col-1">

					<article class="col-main <?php if(isset($_GET['mode'])) { echo $_GET['mode']; } else { echo 'grid'; }?>" role="main" aria-labelledby="main-label">

						<h1 id="main-label" class="page-header">Search Result for <small>Keyword</small></h1>
						
						<?php $toolbar = 'top'; ?>
						<?php include('inc/inc-toolbar.php') ?>

						<div id="category-products">
							<div class="products-content">
								<ul class="product-col-3">
<?php
	// Product Parameters
	$has_description = true;	// Description used for small screen and with the vieiew mode "List"
	$has_btn = true;			// Add button "Add to Cart"

	for ($count = 1; $count <= $product; $count++) { ?>
									<li class="item">
										<?php include('inc/inc-product.php') ?>
									</li>
<?php } ?>
								</ul>
							</div>
						</div><!-- /#category-products -->

						<?php $toolbar = 'bottom'; ?>
						<?php include('inc/inc-toolbar.php') ?>

					</article>
					
				</div>

			</div><!-- /.container -->
		</main><!-- /.main-container -->


		<?php include('inc/footer.php') ?>

	</div><!-- /.page -->


	<?php include('inc/script.php') ?>

</body>
</html>