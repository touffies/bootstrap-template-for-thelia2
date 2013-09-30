<?php
    // Parameters
    $page = 'home';             // Page Id
    $product_new = 4;           // Number of latest products
    $product_offer = 5;         // Number of products offers


?><?php include('inc/head.php') ?>

<body class="page-<?php echo $page; ?>" itemscope itemtype="http://schema.org/WebPage">

	<!-- Accessibility -->
	<a class="sr-only" href="#content">Skip to content</a>

	<div class="page" role="document">

		<?php include('inc/header.php') ?>

		<main class="main-container" role="main">
			<div class="container">

				<section class="carousel-container">
					<div id="carousel" class="carousel slide">
						<div class="carousel-wrapper">
							<div class="carousel-inner">
								<figure class="item active">
									<img src="img/carousel/1200x390.png" alt="img1">
								</figure>
								<figure class="item">
									<img src="img/carousel/1200x390.png" alt="img2">
								</figure>
								<figure class="item">
									<img src="img/carousel/1200x390.png" alt="img3">
								</figure>
							</div>
						</div>
						<a class="left carousel-control" href="#carousel" data-slide="prev"><i class="icon-prev"></i></a>
						<a class="right carousel-control" href="#carousel" data-slide="next"><i class="icon-next"></i></a>
					</div>
				</section><!-- #carousel -->


				<section id="products-new">
					<div class="products-heading">
						<h2>Latest <a href="category.php#latest" class="btn-all">+ View All</a></h2>
					</div>

					<div class="products-content">
						<ul class="products-grid product-col-<?php echo $product_new; ?>">
<?php for ($count = 1; $count <= $product_new; $count++) { ?>
							<li class="item">
								<article itemscope itemtype="http://schema.org/Product">
									<!-- Use the meta tag to specify content that is not visible on the page in any way -->
									<meta itemprop="brand" content="Diesel">
									<meta itemprop="productID" content="isbn:925872">

									<a href="product-details.php" itemprop="url" tabindex="-1" class="product-image">
										<img itemprop="image" src="img/280x196.png" alt="Product #<?php echo $count; ?>">
										<span class="mask"></span>
									</a>

									<a href="product-details.php" class="product-info">
										<h3 class="name"><span itemprop="name">Product #<?php echo $count; ?></span></h3>
										<div class="short-description" itemprop="description">Cras justo odio, dapibus ac faquam.</div>

										<div class="product-price">
											<div class="price-container" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
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
												<span class="regular-price"><span itemprop="price" class="price">$40.00</span></span>
											</div>
										</div>
									</a>
								</article><!-- /product -->
							</li>
<?php } ?>
						</ul>
					</div>
				</section><!-- #products-new -->

				<section id="products-offer">
					<div class="products-heading">
						<h2>Offers <a href="category.php#offer" class="btn-all">+ View All</a></h2>
					</div>

					<div class="products-content">
						<ul class="products-grid product-col-<?php echo $product_offer; ?> hover-effect">
<?php
	// Product Parameters
	$has_description = false;   // Product without description
	$has_btn = false;           // Product without button (Add to Cart)

	for ($count = 1; $count <= $product_offer; $count++) { ?>
							<li class="item">
								<?php include('inc/inc-product.php') ?>
							</li>
<?php } ?>
						</ul>
					</div>
				</section><!-- #products-offer -->

			</div><!-- /.container -->
		</main><!-- /.main-container -->

		<?php include('inc/footer.php') ?>

	</div><!-- /.page -->


	<?php include('inc/script.php') ?>

</body>
</html>