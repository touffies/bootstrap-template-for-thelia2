<?php
    // Parameters
    $page = 'cart';
    $cart = 2;
    $product_upsell = 5;

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
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title">Cart</span></li>
					</ul>
				</nav><!-- /.nav-breadcrumb -->

				<div class="main">
					<article id="cart" class="col-main" role="main" aria-labelledby="main-label">

						<h1 id="main-label" class="page-header">Your Cart</h1>

						<div class="btn-group checkout-progress">
							<a href="cart.php" role="button" class="btn btn-step active"><span class="step-nb">1</span> <span class="step-label">Your Cart</span></a>
							<a href="cart-step2.php" role="button" class="btn btn-step disabled"><span class="step-nb">2</span> <span class="step-label">Billing and delivery</span></a>
							<a href="cart-step3.php" role="button" class="btn btn-step disabled"><span class="step-nb">3</span> <span class="step-label">Check my order</span></a>
							<a href="cart-step4.php" role="button" class="btn btn-step disabled"><span class="step-nb">4</span> <span class="step-label">Secure payment</span></a>
						</div>

						<form id="form-cart" action="cart-step2.php" method="post" role="form">
							<table class="table table-cart">
								<colgroup>
									<col width="150">
									<col>
									<col width="150">
									<col width="150">
									<col width="150">
								</colgroup>
								<thead>
									<tr>
										<th class="image">&nbsp;</th>
										<th class="product">
											<span class="hidden-xs">Product Name</span>
											<span class="visible-xs">Name</span>
										</th>
										<th class="unitprice">
											<span class="hidden-xs">Unit Price</span>
											<span class="visible-xs">Price</span>
										</th>
										<th class="qty">
											<span class="hidden-xs">Quantity</span>
											<span class="visible-xs">Qty</span>
										</th>
										<th class="subprice">
											<span class="hidden-xs">Total <abbr title="Tax Inclusive">TTC</abbr></span>
											<span class="visible-xs">Total</span>
										</th>
									</tr>
								</thead>
								<tbody>
	<?php for ($count = 1; $count <= $cart; $count++) { ?>
									<tr>
										<td class="image">
											<a href="product-details.php" class="thumbnail"><img src="img/product/1/118x85.png" alt="Product #<?php echo $count; ?>"></a>
										</td>
										<td class="product" >
											<h3 class="name"><a href="product-details.php">
												Product #<?php echo $count; ?>
											</a></h3>
											<div class="product-options">
												<dl class="dl-horizontal">
													<dt>Available :</dt>
													<dd>In Stock</dd>
													<dt>No.</dt>
													<dd>PR021012</dd>
													<dt>Select Size</dt>
													<dd>Large</dd>
													<dt>Select Delivery Date</dt>
													<dd>Jan 2, 2013</dd>
													<dt>Additional Option</dt>
													<dd>Option 1</dd>
												</dl>
											</div>
											<a href="?item=<?php echo $count; ?>&amp;qty=0" class="btn btn-remove">Remove</a>
										</td>
										<td class="unitprice">
											<div class="special-price"><span class="price">$50.00</span></div>
											<small class="old-price">instead of <span class="price">$59.99</span></small>
										</td>
										<td class="qty">
											<div class="form-group group-qty">
												<input type="number" name="quantity[]" id="quantity_<?php echo $count; ?>" class="form-control" value="1" min="0" required>
											</div>
										</td>
										<td class="subprice">
											<span class="price">$100.00</span>
										</td>
									</tr>
	<?php } ?>

								</tbody>
								<tfoot>
									<tr >
										<td colspan="3" class="empty">&nbsp;</td>
										<th class="total">Total <abbr title="Tax Inclusive">TTC</abbr></th>
										<td class="total">
											<div class="total-price">
												<span class="price">$200.00</span>
											</div>
										</td>
									</tr>
								</tfoot>
							</table>

							<a href="#" role="button" class="btn btn-continue-shopping"><span>Continue Shopping</span></a>
							<button type="submit" name="checkout" class="btn btn-checkout"><span>Proceed checkout</span></button>
						</form>

					</article>

					<aside id="products-upsell" role="complementary" aria-labelledby="products-upsell-label">
						<div class="products-heading">
							<h3 id="products-upsell-label">Upsell Products</h3>
						</div>

						<div class="products-content">
							<ul class="products-grid product-col-<?php echo $product_upsell; ?> hover-effect">
<?php
	// Product Parameters
	$has_description = false;	// Product without description
	$has_btn = false;			// Product without button (Add to Cart)

	for ($count = 1; $count <= $product_upsell; $count++) { ?>
								<li class="item">
									<?php include('inc/inc-product.php') ?>
								</li>
<?php } ?>
							</ul>
						</div>
					</aside><!-- #products-upsell -->

				</div>

			</div><!-- /.container -->
		</main><!-- /.main-container -->


		<?php include('inc/footer.php') ?>

	</div><!-- /.page -->


	<?php include('inc/script.php') ?>

</body>
</html>