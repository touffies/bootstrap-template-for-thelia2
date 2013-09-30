<?php
    // Parameters
    $page = 'account';
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
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title">Account</span></li>
					</ul>
				</nav><!-- /.nav-breadcrumb -->

				<div class="main">

					<article class="col-main" role="main" aria-labelledby="main-label">

						<h1 id="main-label" class="page-header">My Account</h1>

						<div id="account" class="panel-group">
							<div class="panel account-info">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#account" href="#account-info">
											Personal Informations
										</a>
									</h4>
								</div>
								<div id="account-info" class="panel-collapse collapse in">
									<div class="panel-body">
										<p class="fn">M. Dupont Jean</p>

										<ul class="list-info">
											<li>
												<address class="adr">
													<span class="street-address">street name of my business</span><br>
													<span class="postal-code">75000</span>
													<span class="locality">City, <span class="country-name">Country</span></span>
												</address>
											</li>
											<li>
												<span class="tel">+33 09 08 07 06 05</span>
												<span class="email"><a href="mailto:demo@thelia.net">demo@thelia.net</a></span>
											</li>
											<li class="group-btn">
												<a href="#" class="btn btn-change-account"><i class="icon-pencil"></i> Change my account informations</a>
												<a href="#" class="btn btn-change-password"><i class="icon-lock"></i> Change my password</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel account-address">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#account" href="#account-address">
											My Address book
										</a>
									</h4>
								</div>
								<div id="account-address" class="panel-collapse collapse">
									<div class="panel-body">
										<a href="address.php" class="btn btn-add-address">Add a new address</a>
										<table class="table table-address" role="presentation" summary="My Address Books">
											<tbody>
	<?php for ($count = 1; $count <= $account_address; $count++) { ?>
												<tr class="<?php echo ($count == 1) ? 'address-primary' : 'address-additional'; ?>">
													<th>Maison <?php echo $count; ?></th>
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
										<div class="address-warning">
											<a href="address.php">Click here to enter your first address</a>
										</div>
									</div>
								</div>
							</div>
							<div class="panel account-orders">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#account" href="#account-orders">
											My Orders
										</a>
									</h4>
								</div>
								<div id="account-orders" class="panel-collapse collapse">
									<div class="panel-body table-responsive">
										<table class="table table-orders" summary="List of orders">
											<thead>
												<tr>
													<th>Order Number</th>
													<th>Date</th>
													<th>Amount</th>
													<th>Status</th>
													<th>View</th>
												</tr>
											</thead>
											<tbody>
<?php for ($count = 1; $count <= $account_order; $count++) { ?>
												<tr>
													<td>C122232231234546</td>
													<td>02/25/2013</td>
													<td>$55.00</td>
													<td><span class="label-delivered">Delivered</span></td>
													<td><a href="" class="btn btn-order-details" data-toggle="tooltip" title="View order C122232231234546 as pdf document"><i class="icon-cloud-download"></i> Order details</a></td>
												</tr>
<?php } ?>

											</tbody>
										</table>

										<div class="orders-warning">
											<strong>Warning!</strong> You don't have orders yet
										</div>

									</div>
								</div>
							</div>
						</div>
					</article>

				</div><!-- /.layout -->

			</div><!-- /.main -->
		</main><!-- /.main-container -->

		<?php include('inc/footer.php') ?>

	</div><!-- /.page -->


	<?php include('inc/script.php') ?>

</body>
</html>