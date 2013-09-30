<?php
    // Parameters
    $page = 'cart-step4';

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
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title">Secure Payment</span></li>
					</ul>
				</nav><!-- /.nav-breadcrumb -->

				<div class="main">
					<article class="col-main clearfix" role="main" aria-labelledby="main-label">

						<h1 id="main-label" class="page-header">Your Cart</h1>

						<div class="btn-group checkout-progress">
							<a href="cart.php" role="button" class="btn btn-step disabled"><span class="step-nb">1</span> <span class="step-label">Your Cart</span></a>
							<a href="cart-step2.php" role="button" class="btn btn-step disabled"><span class="step-nb">2</span> <span class="step-label">Billing and delivery</span></a>
							<a href="cart-step3.php" role="button" class="btn btn-step disabled"><span class="step-nb">3</span> <span class="step-label">Check my order</span></a>
							<a href="cart-step4.php" role="button" class="btn btn-step active"><span class="step-nb">4</span> <span class="step-label">Secure payment</span></a>
						</div>

						<div id="payment-success" class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">I chose the method of payment : <span class="payment-method">Cheque</span></h3>
							</div>
							<div class="panel-body">
								<h3>Thank you for the trust you place in us.</h3>
								<p>A summary of your order email has been sent to the following address: email@toto.com</p>
								<p>Your order will be confirmed by us upon receipt of your payment.</p>

								<dl class="dl-horizontal">
									<dt>Order number : </dt>
									<dd>PRO123456788978979</dd>
									<dt>Date : </dt>
									<dd>02/12/2013</dd>
									<dt>Total : </dt>
									<dd>$216.25</dd>
								</dl>
							</div>
						</div>

						<a href="index.php" role="button" class="btn btn-checkout-home"><span>Go home</span></a>

					</article>

				</div>

			</div><!-- /.container -->
		</main><!-- /.main-container -->


		<?php include('inc/footer.php') ?>

	</div><!-- /.page -->


	<?php include('inc/script.php') ?>

</body>
</html>