<?php
    // Parameters
    $page = 'register';


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
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title">Register</span></li>
					</ul>
				</nav><!-- /.nav-breadcrumb -->

				<div class="main">

					<article class="col-main" role="main" aria-labelledby="main-label">

						<h1 id="main-label" class="page-header">Create New Account</h1>

						<form id="form-register" class="form-horizontal" action="" method="post" role="form">

							<fieldset id="register-info" class="panel panel">
								<div class="panel-heading">
									1. Personal Informations
								</div>

								<div class="panel-body">
									<div class="form-group group-firstname has-success">
										<label class="control-label" for="firstname">First Name: <span class="required">*</span></label>
										<div class="control-input">
											<input type="text" name="firstname" id="firstname" class="form-control" placeholder="John" autofocus required>
											<span class="help-block"><i class="icon-ok"></i> Available input!</span>
										</div>
									</div><!--/.form-group-->

									<div class="form-group group-lastname has-error">
										<label class="control-label " for="lastname">Last Name: <span class="required">*</span></label>
										<div class="control-input">
											<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Doe" required>
											<span class="help-block"><i class="icon-remove"></i> Invalid input!</span>
										</div>
									</div><!--/.form-group-->

									<div class="form-group group-email">
										<label class="control-label" for="email">Email Address: <span class="required">*</span></label>
										<div class="control-input">
											<input type="email" name="email" id="email" class="form-control" placeholder="johndoe@domain.com" required>
										</div>
									</div><!--/.form-group-->

									<div class="form-group group-phone">
										<label class="control-label" for="phone">Telephone: <span class="required">*</span></label>
										<div class="control-input">
											<input type="tel" name="phone" id="phone" class="form-control" placeholder="(01) 02 03 04 05 " required>
										</div>
									</div><!--/.form-group-->

									<div class="form-group group-fax">
										<label class="control-label" for="fax">Fax: </label>
										<div class="control-input">
											<input type="tel" name="fax" id="fax" class="form-control" placeholder="(01) 02 03 04 05 ">
										</div>
									</div><!--/.form-group-->
								</div>
							</fieldset>

							<fieldset id="register-delivery" class="panel">
								<div class="panel-heading">
									2. Delivery Informations
								</div>

								<div class="panel-body">
									<div class="form-group group-company">
										<label class="control-label" for="company">Company Name: <span class="required">*</span></label>
										<div class="control-input">
											<input type="text" name="company" id="company" class="form-control" placeholder="Thelia" required>
										</div>
									</div><!--/.form-group-->

									<div class="form-group group-address">
										<label class="control-label" for="address">Street Address: <span class="required">*</span></label>
										<div class="control-input">
											<input type="text" name="asresss" id="address" class="form-control" placeholder="Street address" required>
										</div>
									</div><!--/.form-group-->

									<div class="form-group group-address_2">
										<label class="control-label" for="address_2">Address 2:</label>
										<div class="control-input">
											<input type="text" name="address_2" id="address_2" class="form-control" placeholder="">
										</div>
									</div><!--/.form-group-->

									<div class="form-group group-city">
										<label class="control-label" for="city">City: <span class="required">*</span></label>
										<div class="control-input">
											<input type="text" name="city" id="city" class="form-control" placeholder="New york" required>
										</div>
									</div><!--/.form-group-->

									<div class="form-group group-zip">
										<label class="control-label" for="zip">Postal Code: <span class="required">*</span></label>
										<div class="control-input">
											<input type="text" name="zip" id="zip" class="form-control" placeholder="H2T 2V6" required>
										</div>
									</div><!--/.form-group-->

									<div class="form-group group-country">
										<label class="control-label" for="country">Country: <span class="required">*</span></label>
										<div class="control-input">
											<select name"country" id="country" class="form-control" required>
												<option value="">-- Select Country --</option>
												<option value="1">Country1</option>
												<option value="2">Country2</option>
												<option value="3">Country3</option>
												<option value="4">Country4</option>
											</select>
										</div>
									</div><!--/.form-group-->
								</div>
							</fieldset>
							<fieldset id="register-login" class="panel">
								<div class="panel-heading">
									3. Login Information
								</div>

								<div class="panel-body">
									<div class="form-group group-password">
										<label class="control-label" for="password">Password: <span class="required">*</span></label>
										<div class="control-input">
											<input type="password" name="password" id="password" class="form-control" required autocomplete="off">
										</div>
									</div><!--/.form-group-->

									<div class="form-group group-confirm_password">
										<label class="control-label" for="confirm_password">Confirm Password: <span class="required">*</span></label>
										<div class="control-input">
											<input type="password" name="confirm_password" id="confirm_password" class="form-control" required autocomplete="off">
										</div>
									</div><!--/.form-group-->
								</div>
							</fieldset>

							<div class="form-group group-agreed">
								<div class="control-input">
									<div class="checkbox">
										<label class="control-label" for="agreed">
											<input type="checkbox" name="agreed" id="agreed" value="1"> I've read and agreed on <a href="#">Terms &amp; Conditions</a>.
										</label>
									</div>
								</div>
							</div><!--/.form-group-->

							<div class="form-group group-btn">
								<div class="control-btn">
									<button type="submit" class="btn btn-register">Sign in</button>
								</div>
							</div><!--/.form-group-->
						</form>
					</article>

				</div><!-- /.layout -->

			</div><!-- /.main -->
		</main><!-- /.main-container -->

		<?php include('inc/footer.php') ?>

	</div><!-- /.page -->


	<?php include('inc/script.php') ?>

</body>
</html>