<?php
    // Parameters
    $page = 'cart-step3';
    $cart = 2;
    $payment = array('kwixo', 'cheque', 'american-express', 'mastercard', 'visa');

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
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="cart.php" itemprop="url"><span itemprop="title">Cart</span></a></li>
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title">My order</span></li>
					</ul>
				</nav><!-- /.nav-breadcrumb -->

				<div class="main">
					<article class="col-main" role="main" aria-labelledby="main-label">

						<h1 id="main-label" class="page-header">Your Cart</h1>

						<div class="btn-group checkout-progress">
							<a href="cart.php" role="button" class="btn btn-step"><span class="step-nb">1</span> <span class="step-label"> <span>Your Cart</span></a>
							<a href="cart-step2.php" role="button" class="btn btn-step"><span class="step-nb">2</span> <span class="step-label">Billing and delivery</span></a>
							<a href="cart-step3.php" role="button" class="btn btn-step active"><span class="step-nb">3</span> <span class="step-label">Check my order</span></a>
							<a href="cart-step4.php" role="button" class="btn btn-step disabled"><span class="step-nb">4</span> <span class="step-label">Secure payment</span></a>
						</div>

						<form id="form-cart" action="cart-step4.php" method="post" role="form">
							<table class="table table-cart">
								<colgroup>
									<col width="150">
									<col>
									<col width="200">
									<col width="250">
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
											<h3 class="name">
												Product #<?php echo $count; ?>
											</h3>
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
										</td>
										<td class="unitprice">
											<div class="special-price"><span class="price">$50.00</span></div>
											<small class="old-price">instead of <span class="price">$59.99</span></small>
										</td>
										<td class="subprice">
											<span class="price">$100.00</span>
										</td>
									</tr>
	<?php } ?>

								</tbody>
								<tfoot>
									<tr >
										<td rowspan="3" colspan="2" class="empty">&nbsp;</td>
										<th class="shipping">Shipping Tax</th>
										<td class="shipping">
											<div class="shipping-price">
												<span class="price">$5.00</span>
											</div>
										</td>
									</tr>
									<tr >
										<th class="coupon"><label for="coupon">Enter your coupon code if you have one</label></th>
										<td class="coupon">
											<div class="input-group">
												<input type="text" name="coupon" id="coupon" class="form-control">
												<span class="input-group-btn">
													<button type="button" class="btn btn-coupon">Ok</button>
												</span>
											</div><!-- /input-group -->
										</td>
									</tr>
									<tr >
										<th class="total">Total <abbr title="Tax Inclusive">TTC</abbr></th>
										<td class="total">
											<div class="total-price">
												<span class="price">$200.00</span>
											</div>
										</td>
									</tr>
								</tfoot>
							</table>

							<div id="cart-address">
								<div class="panel">
									<div class="panel-heading">Delivery address</div>
									<div class="panel-body">
										<span class="fn">M. DUPONT Jean</span>
										<span class="org">Agency XY</span>
										<address class="adr">
											<span class="street-address">street name of my business</span><br>
											<span class="postal-code">75000</span>
											<span class="locality">City, <span class="country-name">Country</span></span>
										</address>
									</div>
								</div>
								<div class="panel">
									<div class="panel-heading">Billing address</div>
									<div class="panel-body">
										<span class="fn">M. DUPONT Jean</span>
										<span class="org">Agency XY</span>
										<address class="adr">
											<span class="street-address">street name of my business</span><br>
											<span class="postal-code">75000</span>
											<span class="locality">City, <span class="country-name">Country</span></span>
										</address>
										<a href="address.php" class="btn btn-change-address">Change address</a>
									</div>
								</div>
							</div>


							<div id="payment-method" class="panel">
								<div class="panel-heading">Choose your payment method</div>
								<div class="panel-body">
									<ul class="list-payment">
<?php foreach ($payment as $key => $value) { ?>
										<li>
											<div class="radio">
												<label for="payment_<?php echo $key; ?>">
													<input type="radio" name="payment" id="payment_<?php echo $key; ?>" value="<?php echo $value; ?>">
													<img src="img/payment/<?php echo $value; ?>.png">
												</label>
											</div>
										</li>
<?php } ?>
								</div>
							</div>

							<a href="cart-step2.php" role="button" class="btn btn-back"><span>Back</span></a>
							<button type="submit" class="btn btn-checkout-next"><span>Next Step</span></button>
						</form>


					</article>



				</div>

			</div><!-- /.container -->
		</main><!-- /.main-container -->


		<?php include('inc/footer.php') ?>

	</div><!-- /.page -->


	<?php include('inc/script.php') ?>

</body>
</html>