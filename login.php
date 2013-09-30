<?php
    // Parameters
    $page = 'login';


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
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title">Login</span></li>
					</ul>
				</nav><!-- /.nav-breadcrumb -->

				<div class="main">
					<article class="col-main" role="main" aria-labelledby="main-label">
						<h1 id="main-label" class="page-header">Login</h1>
						<form id="form-login" action="" method="post" role="form">
							<fieldset>
								<div class="form-group group-email">
									<label for="email">Please enter your email address</label>
									<input type="email" name="email" id="email" class="form-control" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; }?>" aria-required="true" autofocus required>
								</div>
								<fieldset>
									<legend>Do you have an account?</legend>
									<div class="radio radio-account0" >
										<label for="account0">
											<input type="radio" name="account" id="account0" data-toggle="password" value="0" <?php if(!(isset($_POST['account']) && $_POST['account'] == '1')) { echo ' checked'; }?>> No, I am a new customer.
										</label>
									</div>
									<div class="radio radio-account1">
										<label for="account1">
											<input type="radio" name="account" id="account1" data-toggle="password" value="1"<?php if(isset($_POST['account']) && $_POST['account'] == '1' ) { echo ' checked'; }?>> Yes, I have a password :
										</label>
									</div>
									<div class="form-group group-password">
										<label for="password" class="sr-only">Please enter your password</label>
										<input type="password" name="password" id="password" class="form-control" autocomplete="off">
									</div>
								</fieldset>
							</fieldset>

							<div class="group-btn">
								<a href="password.php" class="forgot-password">Forgot your Password ?</a>
								<button type="submit" class="btn btn-login">Next</button>
							</div>
						</form>
					</article>
				</div>

			</div><!-- /.container -->
		</main><!-- /.main-container -->

<!--
		<div class="hide">
			<form id="form-forgotpassword" action="forgot.php" method="post">
				<div class="form-group">
					<label for="forgot-email">Email Address</label>
					<input type="email" name="forgot-email" id="forgot-email" class="form-control" placeholder="Enter a valid email address" autofocus aria-required="true" required>
				</div>
				<div class="group-btn clearfix">
					<a href="#" class="btn-close pull-left"> Cancel</a>
					<button type="submit" class="btn btn-forgot pull-right">Send</button>
				</div>
			</form>
		</div>
-->

		<?php include('inc/footer.php') ?>

	</div><!-- /.page -->


	<?php include('inc/script.php') ?>

</body>
</html>