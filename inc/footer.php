<section class="footer-container" itemscope itemtype="http://schema.org/WPFooter">

			<section class="footer-banner">
				<div class="container">
					<div class="banner banner-col-3">
						<div class="col">
							<i class="icon-truck icon-flip-horizontal"></i>
							Free shipping <small>Orders over $50</small>
						</div>
						<div class="col">
							<i class="icon-credit-card"></i>
							Secure payment <small>Multi-payment plateform</small>
						</div>
						<div class="col">
							<i class="icon-info"></i>
							Need help ? <small>Questions ? See or F.A.Q.</small>
						</div>
					</div>
				</div>
			</section><!-- /.footer-banner -->

			<section class="footer-block">
				<div class="container">
					<div class="blocks block-col-4">
						<div class="col">
							<section class="block block-links">
								<div class="block-heading"><h3 class="block-title">Latest articles</h3></div>
								<div class="block-content">
									<ul>
										<li>
											<a href="#">
												<h4 class="block-subtitle">Heading</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
											</a>
										</li>
										<li>
											<a href="#">
												<h4 class="block-subtitle">Heading</h4>
												<p>Lorem ipsum dolor sit amet...</p>
											</a>
										</li>
										<li>
											<a href="#">
												<h4 class="block-subtitle">Heading</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
											</a>
										</li>
									</ul>
								</div>
							</section>
						</div>
						<div class="col">
							<section class="block block-default">
								<div class="block-heading"><h3 class="block-title">Usefull links</h3></div>
								<div class="block-content">
									<ul>
										<li<?php echo ($page == 'about') ? ' class="active"' : ''; ?>><a href="#"<?php echo ($page == 'about') ? ' tabindex="-1"' : ''; ?>>About Us </a></li>
										<li<?php echo ($page == 'delivery') ? ' class="active"' : ''; ?>><a href="#"<?php echo ($page == 'delivery') ? ' tabindex="-1"' : ''; ?>>Delivery & Returns</a></li>
										<li<?php echo ($page == 'terms') ? ' class="active"' : ''; ?>><a href="#"<?php echo ($page == 'terms') ? ' tabindex="-1"' : ''; ?>>Terms & Conditions </a></li>
										<li<?php echo ($page == 'contact') ? ' class="active"' : ''; ?>><a href="contact.php"<?php echo ($page == 'contact') ? ' tabindex="-1"' : ''; ?>>Contact Us</a></li>
										<li<?php echo ($page == 'login') ? ' class="active"' : ''; ?>><a href="login.php"<?php echo ($page == 'login') ? ' tabindex="-1"' : ''; ?>>Login</a></li>
										<li<?php echo ($page == 'register') ? ' class="active"' : ''; ?>><a href="register.php"<?php echo ($page == 'register') ? ' tabindex="-1"' : ''; ?>>Register</a></li>
										<li<?php echo ($page == 'checkout') ? ' class="active"' : ''; ?>><a href="checkout.php"<?php echo ($page == 'checkout') ? ' tabindex="-1"' : ''; ?>>Checkout</a></li>
									</ul>
								</div>
							</section>
						</div>
						<div class="col">
							<section class="block block-social">
								<div class="block-heading"><h3 class="block-title">Follow us</h3></div>
								<div class="block-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									<ul role="presentation">
										<li>
											<a href="http://facebook.com" class="facebook" data-toggle="tooltip" data-placement="top" title="facebook" target="_blank">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base"></i>
													<i class="icon-facebook icon-light"></i>
												</span>
											</a>
										</li>
										<li>
											<a href="http://twitter.com" class="twitter" data-toggle="tooltip" data-placement="top" title="twitter" target="_blank">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base"></i>
													<i class="icon-twitter icon-light"></i>
												</span>
											</a>
										</li>
										<li>
											<a href="http://instagram.com" class="instagram" data-toggle="tooltip" data-placement="top" title="instagram" target="_blank">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base"></i>
													<i class="icon-instagram icon-light"></i>
												</span>
											</a>
										</li>
										<li>
											<a href="http://google.com" class="google-plus" data-toggle="tooltip" data-placement="top" title="google+" target="_blank">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base"></i>
													<i class="icon-google-plus icon-light"></i>
												</span>
											</a>
										</li>
										<li>
											<a href="http://youtube.com" class="youtube" data-toggle="tooltip" data-placement="top" title="youtube" target="_blank">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base"></i>
													<i class="icon-youtube icon-light"></i>
												</span>
											</a>
										</li>
										<li>
											<a href="#rss" class="rss" data-toggle="tooltip" data-placement="top" title="rss" target="_blank">
												<span class="icon-stack">
													<i class="icon-circle icon-stack-base"></i>
													<i class="icon-rss icon-light"></i>
												</span>
											</a>
										</li>
									</ul>
								</div>
							</section>

							<section class="block block-newsletter">
								<div class="block-heading"><h3 class="block-title">Newsletter</h3></div>
								<div class="block-content">
									<p id="newletter-describe">Sign up to receive our latest news.</p>
									<form id="form-newsletter" action="" method="post" role="form">
										<div class="form-group">
											<label for="email">Email address</label>
											<input type="email" name="email" id="email" class="form-control" placeholder="Your email address" aria-describedby="newletter-describe" aria-required="true" required autocomplete="off">
										</div>
										<button type="submit" class="btn btn-subscribe">Subscribe</button>
										<!--
<div class="group-btn">
											<button type="submit" class="btn btn-subscribe">Subscribe</button>
										</div>
-->
									</form>
								</div>
							</section>
						</div>

						<div class="col">
							<section class="block block-contact" itemscope itemtype="http://schema.org/Organization">
								<div class="block-heading"><h3 class="block-title">Contact Us</h3></div>
								<div class="block-content">
									<meta itemprop="name" content="Thelia V2">
									<ul>
										<li class="contact-address">
											<address class="adr" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
												<span class="street-address" itemprop="streetAddress">street name of my business</span><br>
												<span class="postal-code" itemprop="postalCode">75000</span>
												<span class="locality" itemprop="addressLocality">City, <span class="country-name">Country</span></span>
											</address>
										</li>
										<li class="contact-phone">
											<span class="tel" itemprop="telephone">+33 09 08 07 06 05</span>
										</li>
										<li class="contact-email">
											<a href="mailto:demo@thelia.net" class="email" itemprop="email">demo@thelia.net</a>
										</li>
									</ul>
								</div>
							</section>
						</div>
					</div>
				</div>
			</section><!-- /.footer-block -->


			<footer class="footer-info" role="contentinfo">
				<div class="container">
					<div class="info">
						<nav class="nav-footer" role="navigation">
							<ul>
								<li<?php echo ($page == 'about') ? ' class="active"' : ''; ?>><a href="#"<?php echo ($page == 'about') ? ' tabindex="-1"' : ''; ?>>About Us </a></li>
								<li<?php echo ($page == 'delivery') ? ' class="active"' : ''; ?>><a href="#"<?php echo ($page == 'delivery') ? ' tabindex="-1"' : ''; ?>>Delivery & Returns</a></li>
								<li<?php echo ($page == 'sitemap') ? ' class="active"' : ''; ?>><a href="#"<?php echo ($page == 'sitemap') ? ' tabindex="-1"' : ''; ?>>Site Map</a></li>
								<li<?php echo ($page == 'terms') ? ' class="active"' : ''; ?>><a href="#"<?php echo ($page == 'terms') ? ' tabindex="-1"' : ''; ?>>Terms & Conditions</a></li>
								<li<?php echo ($page == 'contact') ? ' class="active"' : ''; ?>><a href="#"<?php echo ($page == 'contact') ? ' tabindex="-1"' : ''; ?>>Contact Us</a></li>
							</ul>
						</nav>

						<section class="copyright">Copyright &copy; <time datetime="2013-08-01">2013</time> <a href="http://www.thelia.net" rel="external">Thelia</a></section>
					</div>
				</div>
			</footer><!-- /.footer-info -->

		</section><!-- /.footer-container -->