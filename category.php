<?php
    // Parameters
    $page = isset($_GET['mode']) ? 'category-'.$_GET['mode'] : 'category-grid';
    $product = 10;
    $type = 4;
    $price = array('$0.00 - $99.99', '$100.00 - $199.99', '$200.00 - $299.99', '$300.00 and above');
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
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="#" itemprop="url"><span itemprop="title">Category 1</span></a></li>
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title">Grid</span></li>
					</ul>
				</nav><!-- /.nav-breadcrumb -->

				<div class="main layout-col-2-left">

					<article class="col-main <?php if(isset($_GET['mode'])) { echo $_GET['mode']; } else { echo 'grid'; }?>" role="main">

						<?php $toolbar = 'top'; ?>
						<?php include('inc/inc-toolbar.php') ?>

						<div id="category-products">
							<div class="products-content">
								<ul class="product-col-4">
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

					<aside class="col-left" role="complementary" itemscope itemtype="http://schema.org/WPSideBar">

						<section id="categories" class="block block-nav" role="navigation" aria-labelledby="categories-label">
							<div class="block-heading"><h3 class="block-title" id="categories-label">Categories</h3></div>
							<div class="block-content">
								<nav class="nav-categories">
									<ul id="category" class="accordion">
										<li>
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#category" href="#collapse1">Category 1 <span class="amount">(3)</span></a>
											<ul id="collapse1" class="in">
												<li>
													<a href="#collapse11" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#collapse1">Category 1.1 <span class="amount">(3)</span></a>
													<ul id="collapse11" class="collapse">
														<li><a href="#">Category 1.1.1 <span class="amount">(0)</span></a></li>
														<li>
															<a href="#collapse112" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#collapse11">Category 1.1.2 <span class="amount">(2)</span></a>
															<ul id="collapse112" class="collapse">
																<li><a href="#">Category 1.1.2.1 <span class="amount">(0)</span></a></li>
																<li><a href="#">Category 1.1.2.2 <span class="amount">(0)</span></a></li>
															</ul>

														</li>
														<li><a href="#">Category 1.1.3 <span class="amount">(0)</span></a></li>
													</ul>

												</li>
												<li><a href="#">Category 1.2 <span class="amount">(0)</span></a></li>
												<li><a href="#">Category 1.3 <span class="amount">(0)</span></a></li>
											</ul>
										</li>
										<li><a href="#">Category 2 <span class="amount">(0)</span></a></li>
										<li><a href="#">Category 3 <span class="amount">(0)</span></a></li>
										<li><a href="#">Category 4 <span class="amount">(0)</span></a></li>
									</ul>
								</nav>
							</div>
						</section>

						<section id="filters">
							<h3>Find <span>a product</span></h3>
							<form id="form-filters" action="" method="get" role="form">
								<div class="filter filter-type">
									<fieldset>
										<legend class="filter-heading">Type</legend>
										<div class="filter-content">
<?php for ($count = 1; $count <= $type; $count++) { ?>
											<div class="checkbox">
												<label for="type<?php echo $count; ?>">
													<input type="checkbox" name="type<?php echo $count; ?>" id="type<?php echo $count; ?>"<?php if(isset($_GET['type'. $count])) { echo ' checked'; }?> value="<?php echo $count; ?>"> Type <?php echo $count; ?>
												</label>
											</div>
<?php } ?>
										</div>
									</fieldset>
								</div><!-- /Filter Type -->

								<div class="filter filter-price">
									<fieldset>
										<legend class="filter-heading">Price</legend>
										<div class="filter-content">
<?php foreach ($price as $key => $value) { ?>
											<div class="checkbox">
												<label for="price<?php echo $key; ?>">
													<input type="checkbox" name="price<?php echo $key; ?>" id="price<?php echo $key; ?>"<?php if(isset($_GET['price'. $key])) { echo ' checked'; }?> value="<?php echo $value; ?>"> <?php echo $value; ?>
												</label>
											</div>
<?php } ?>
										</div>
									</fieldset>
								</div><!-- /Filter Price -->

								<div class="filter filter-size">
									<fieldset>
										<legend class="filter-heading">Size</legend>
										<div class="filter-content">
<?php foreach ($size as $key => $value) { ?>
											<div class="checkbox">
												<label for="size<?php echo $key; ?>">
													<input type="checkbox" name="size<?php echo $key; ?>" id="size<?php echo $key; ?>"<?php if(isset($_GET['size'. $key])) { echo ' checked'; }?> value="<?php echo $key; ?>"> <?php echo $value; ?>
												</label>
											</div>
<?php } ?>
										</div>
									</fieldset>
								</div><!-- /Filter Size -->

								<div class="group-btn">
									<button type="submit" class="btn btn-filter">Submit</button>
								</div>
							</form>
						</section><!-- /.filters -->

					</aside>

				</div>

			</div><!-- /.container -->
		</main><!-- /.main-container -->


		<?php include('inc/footer.php') ?>

	</div><!-- /.page -->


	<?php include('inc/script.php') ?>

</body>
</html>