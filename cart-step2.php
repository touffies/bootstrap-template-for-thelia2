<?php
    // Parameters
    $page = 'cart-step2';

    $account_address = 2;
    $account_order = 3;

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
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title">Billing and delivery</span></li>
					</ul>
				</nav><!-- /.nav-breadcrumb -->

				<div class="main">
					<article id="cart" class="col-main" role="main" aria-labelledby="main-label">

						<h1 id="main-label" class="page-header">Your Cart</h1>

						<div class="btn-group checkout-progress">
							<a href="cart.php" role="button" class="btn btn-step"><span class="step-nb">1</span> <span class="step-label">Your Cart</span></a>
							<a href="cart-step2.php" role="button" class="btn btn-step active"><span class="step-nb">2</span> <span class="step-label">Billing and delivery</span></a>
							<a href="cart-step3.php" role="button" class="btn btn-step disabled"><span class="step-nb">3</span> <span class="step-label">Check my order</span></a>
							<a href="cart-step4.php" role="button" class="btn btn-step disabled"><span class="step-nb">4</span> <span class="step-label">Secure payment</span></a>
						</div>

						<form id="form-cart-delivery" action="cart-step3.php" method="post" role="form">
							<div id="delivery-address" class="panel">
								<div class="panel-heading clearfix">
									<a href="address.php" class="btn btn-add-address">Add a new address</a>
									Choose your delivery address
								</div>
								<div class="panel-body">
									<table class="table table-address" role="presentation" summary="Address Books">
										<tbody>
<?php for ($count = 1; $count <= $account_address; $count++) { ?>
											<tr>
												<th>
													<div class="radio">
														<label for="delivery-address_<?php echo $count; ?>">
															<input type="radio" name="delivery-address" id="delivery-address_<?php echo $count; ?>" value="<?php echo $count; ?>">
															Maison <?php echo $count; ?>
														</label>
													</div>
												</th>
												<td>
													<ul class="list-address">
														<li>
															<span class="fn">M. DUPONT Jean</span>
															<span class="org">Agency XY</span>
														</li>
														<li>
															<address class="adr">
																<span class="street-address">street name of my business</span><br>
																<span class="postal-code">75000</span>
																<span class="locality">City, <span class="country-name">Country</span></span>
															</address>
														</li>
														<li>
															<span class="tel">+33 09 08 07 06 05</span>
														</li>
													</ul>
												</td>
												<td>
													<div class="group-btn">
														<a href="#" class="btn btn-edit-address" data-toggle="tooltip" title="Edit this address"><i class="icon-pencil"></i> <span>Edit</span></a>
														<a href="#" class="btn btn-remove-address" data-toggle="tooltip" title="Remove this address"><i class="icon-remove"></i> <span>Cancel</span></a>
													</div>
												</td>
											</tr>
<?php } ?>
										</tbody>
									</table>
								</div>
							</div>

							<div id="delivery-method" class="panel">
								<div class="panel-heading">Choose your delivery method</div>
								<div class="panel-body">
									<div class="radio">
										<label for="delivery-method_1">
											<input type="radio" name="delivery-method" id="delivery-method_1" value="1">
											<strong>Delivery method #1</strong> / $12.50
										</label>
									</div>
									<div class="radio">
										<label for="delivery-method_2">
											<input type="radio" name="delivery-method" id="delivery-method_2" value="2">
											<strong>Delivery method #2</strong> / $6.00
										</label>
									</div>
								</div>
							</div>

							<a href="cart.php" role="button" class="btn btn-back"><span>Back</span></a>
							<button type="submit" class="btn btn-checkout-next"><span>Next Step</span></button>

						</form>
					</article>
				</div>

			</div><!-- /.container -->
		</main><!-- /.main-container -->

		<?php include('inc/inc-modal.php') ?>

		<?php include('inc/footer.php') ?>

	</div><!-- /.page -->


	<?php include('inc/script.php') ?>

</body>
</html>