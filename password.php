<?php
    // Parameters
    $page = 'password';


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
						<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="active"><span itemprop="title">Password</span></li>
					</ul>
				</nav><!-- /.nav-breadcrumb -->

				<div class="main">
					<article class="col-main" role="main" aria-labelledby="main-label">
						<h1 id="main-label" class="page-header">Password Forgotten</h1>

						<form id="form-forgotpassword" action="" method="post" role="form">

							<p>Please enter your email address below. You will receive a link to reset your password.</p>

							<div class="form-group">
								<label for="forgot-email">Please enter your email address</label>
								<input type="email" name="forgot-email" id="forgot-email" class="form-control" aria-required="true" autofocus aria-required="true" required value="<?php if(isset($_POST['forgot-email'])) { echo $_POST['forgot-email']; }?>">
							</div>
							<div class="group-btn">
								<a href="login.php" class="btn btn-cancel">Cancel</a>
								<button type="submit" class="btn btn-forgot">Send</button>
							</div>
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