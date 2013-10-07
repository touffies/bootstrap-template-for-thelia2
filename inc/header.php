<div class="header-container" itemscope itemtype="http://schema.org/WPHeader">

			<div class="navbar" itemscope itemtype="http://schema.org/SiteNavigationElement">
				<div class="container">

					<div class="navbar-header">
						<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-main">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Thelia</a>
					</div>

					<!-- Place everything within .nav-collapse to hide it until above 768px -->
					<nav class="navbar-collapse collapse nav-main" role="navigation" aria-label="Main Navigation">
						<ul class="nav navbar-nav navbar-categories">
							<li<?php echo ($page == 'home') ? ' class="active"' : ''; ?>><a href="index.php" class="home"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Home</a></li>
							<li class="dropdown<?php echo in_array($page, array('category','account','password','checkout','contact','search','product-details')) ? ' active' : ''; ?>">
								<a href="" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
								<ul class="dropdown-menu list-subnav" role="menu">
									<li<?php echo ($page == 'home') ? ' class="active"' : ''; ?>><a href="index.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Index</a></li>
									<li<?php echo ($page == 'category-grid') ? ' class="active"' : ''; ?>><a href="category.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Category Grid</a></li>
									<li<?php echo ($page == 'category-list') ? ' class="active"' : ''; ?>><a href="category.php?mode=list"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Category List</a></li>
									<li<?php echo ($page == 'account') ? ' class="active"' : ''; ?>><a href="account.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Account</a></li>
									<li<?php echo ($page == 'login') ? ' class="active"' : ''; ?>><a href="login.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Login</a></li>
									<li<?php echo ($page == 'password') ? ' class="active"' : ''; ?>><a href="password.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Forgot Password</a></li>
									<li<?php echo ($page == 'register') ? ' class="active"' : ''; ?>><a href="register.php"<?php echo ($page == 'home') ? '  tabindex="-1"' : ''; ?>>Register</a></li>
									<li<?php echo ($page == 'cart') ? ' class="active"' : ''; ?>><a href="cart.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Cart</a></li>
									<li<?php echo ($page == 'cart-step2') ? ' class="active"' : ''; ?>><a href="cart-step2.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Cart (Step 2)</a></li>
									<li<?php echo ($page == 'cart-step3') ? ' class="active"' : ''; ?>><a href="cart-step3.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Cart (Step 3)</a></li>
									<li<?php echo ($page == 'cart-step4') ? ' class="active"' : ''; ?>><a href="cart-step4.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Cart (Step 4)</a></li>
									<!-- <li<?php echo ($page == 'checkout') ? ' class="active"' : ''; ?>><a href="checkout.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Checkout</a></li> -->
									<!-- <li<?php echo ($page == 'contact') ? ' class="active"' : ''; ?>><a href="contact.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Contact</a></li> -->
									<li<?php echo ($page == 'search') ? ' class="active"' : ''; ?>><a href="search.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Search</a></li>
									<li<?php echo ($page == 'product-details') ? ' class="active"' : ''; ?>><a href="product-details.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Product details</a></li>
									<li<?php echo ($page == 'address') ? ' class="active"' : ''; ?>><a href="address.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>New address</a></li>
								</ul>
							</li>
							<li><a href="#">Category 1</a></li>
<!--
							<li class="dropdown full-width">
								<a href="" data-toggle="dropdown" class="dropdown-toggle">Category 1</a>
								<ul class="dropdown-menu">
									<li>
										<div class="dropdown-content container">
											<ul class="row list-unstyled">
												<li class="col-sm-4">
													<span class="dropdown-subheading">Catgegory 1.1</span>
													<ul>
														<li><a href="#">Category 1.1.1</a></li>
														<li><a href="#">Category 1.1.2</a></li>
														<li><a href="#">Category 1.1.3</a></li>
														<li><a href="#">Category 1.1.4</a></li>
													</ul>
												</li>
												<li class="col-sm-4">
													<span class="dropdown-subheading">Catgegory 1.2</span>
													<ul>
														<li><a href="#">Category 1.2.1</a></li>
														<li><a href="#">Category 1.2.2</a></li>
														<li><a href="#">Category 1.2.3</a></li>
														<li><a href="#">Category 1.2.4</a></li>
													</ul>
												</li>
												<li class="col-sm-4">
													<span class="dropdown-subheading">Catgegory 1.3</span>
													<ul>
														<li><a href="#">Category 1.3.1</a></li>
														<li><a href="#">Category 1.3.2</a></li>
														<li><a href="#">Category 1.3.3</a></li>
														<li><a href="#">Category 1.3.4</a></li>
													</ul>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</li>
-->
							<li><a href="#">Category 2</a></li>
							<li><a href="#">Category 3</a></li>
							<li><a href="#">Category 4</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-cart navbar-right">
							<li<?php echo ($page == 'register') ? ' class="active"' : ''; ?>><a href="register.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?> class="register">Register!</a></li>

							<!-- Login link -->
							<li<?php echo ($page == 'login') ? ' class="active"' : ''; ?>><a href="register.php"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?> class="login">Log In!</a></li>

							<!-- Login form -->
							<li class="dropdown<?php echo ($page == 'login') ? ' active' : ''; ?>">
								<a href="login.php" class="login"<?php echo ($page == 'home') ? ' tabindex="-1"' : ''; ?>>Log In!</a>
								<div class="dropdown-menu">
									<form id="form-login-mini" action="login.php" method="post" role="form">
										<div class="form-group group-email-mini">
											<label for="email-mini">Email address:</label>
											<input type="email" name="email" id="email-mini" class="form-control" value="" aria-required="true" required>
										</div>
										<div class="form-group group-email">
											<label for="password-mini">Password</label>
											<input type="password" name="password" id="password-mini" class="form-control" value="" aria-required="true" required>
										</div>
										<div class="group-btn">
											<button type="submit" class="btn btn-login-mini">Sign In</button>
											<a href="register.php" class="btn btn-register-mini">Register</a>
										</div>
									</form>
								</div>
							</li>

							<!-- Empty cart -->
							<li class="dropdown">
								<a href="cart.php" rel="nofollow" class="cart">
									Cart <span class="badge">0</span>
								</a>
								<div class="dropdown-menu cart-content">
									<p>You have no items in your shopping cart.</p>
								</div>
							</li>

							<!-- Not empty cart -->
							<li class="dropdown cart-not-empty">
								<a href="cart.php" rel="nofollow" class="cart">
									Cart <span class="badge">2</span>
								</a>
								<div class="dropdown-menu cart-content">
									<form id="form-cart-mini" action="cart-step2.php" method="post" role="form">
										<table class="table table-cart-mini">
											<colgroup>
												<col width="70">
												<col>
												<col width="100">
											</colgroup>
											<tbody>
												<tr>
													<td class="image">
														<a href="product-details.php" class="thumbnail"><img src="img/product/1/118x85.png" alt="Product #1"></a>
													</td>
													<td class="product">
														<h3 class="name" style="margin:0"><a href="product-details.php">
															Product #1
														</a></h3>
														<a href="?item=1&amp;qty=0" class="btn btn-remove" data-tip="tooltip" data-title="Delete" data-original-title=""><i class="icon-trash"></i> <span>Remove</span></a>
													</td>
													<td class="unitprice text-center">
														<span class=="qty">2</span> X <span class="price" style="font-size:1em;">$50.00</span></div>
													</td>
												</tr>
												<tr>
													<td class="image">
														<a href="product-details.php" class="thumbnail"><img src="img/product/1/118x85.png" alt="Product #2"></a>
													</td>
													<td class="product">
														<h3 class="name" style="margin:0"><a href="product-details.php">
															Product with very long name #2
														</a></h3>
														<a href="?item=1&amp;qty=0" class="btn btn-remove" data-tip="tooltip" data-title="Delete" data-original-title=""><i class="icon-trash"></i> <span>Remove</span></a>
													</td>
													<td class="unitprice text-center">
														<span class=="qty">2</span> X <span class="price" style="font-size:1em;">$50.00</span></div>
													</td>
												</tr>
											</tbody>
											<tfoot>
												<tr >
													<td colspan="2" class="empty">
														<a href="cart.php" role="button" class="btn btn-default btn-sm"><span>View Cart</span></a>
														<button type="submit" name="checkout" class="btn btn-warning btn-sm"><span>Checkout</span></button>
													</td>
													<td class="total">
														<div class="total-price">
															<span class="price">$200.00</span>
														</div>
													</td>
												</tr>
											</tfoot>
										</table>
									</form>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>


			<header class="container" role="banner">
				<div class="header">
					<h1 class="logo">
						<a href="index.php" class="Thelia * Since 2006 *">
							<img src="img/logo.gif" alt="Thelia">
						</a>
					</h1>

					<div class="language-container">

						<?php include('inc/inc-search.php') ?>

						<div class="language-switch" aria-labelledby="language-label">
							<span id="language-label" class="dropdown-label">Language:</span>
							<a class="current dropdown-toggle" data-toggle="dropdown" href="language.php">English</a>
							<ul class="select dropdown-menu">
								<li><a href="?lang=fr">French</a></li>
								<li><a href="?lang=ge">German</a></li>
							</ul>
						</div>

						<div class="currency-switch" aria-labelledby="currency-label">
							<span id="currency-label" class="dropdown-label">Currency:</span>
							<a class="current dropdown-toggle" data-toggle="dropdown" href="currency.php">USD</a>
							<ul class="select dropdown-menu">
								<li><a href="?cur=euro">€ - Euro</a></li>
								<li><a href="?cur=dollar">$ - Dollar</a></li>
							</ul>
						</div>
					</div>
				</div>

			</header><!-- /.header -->

		</div><!-- /.header-container -->