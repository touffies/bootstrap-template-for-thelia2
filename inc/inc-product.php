<article itemscope itemtype="http://schema.org/Product">
											<!-- Use the meta tag to specify content that is not visible on the page in any way -->
											<meta itemprop="brand" content="Diesel">
											<meta itemprop="productID" content="isbn:925872">

											<a href="product-details.php" itemprop="url" tabindex="-1" class="product-image">
												<img itemprop="image" src="img/218x146.png" alt="Product #<?php echo $count; ?>">
												<span class="mask"></span>
											</a>

											<div class="product-info">
												<h3 class="name"><a href="product-details.php"><span itemprop="name">Product #<?php echo $count; ?></span></a></h3>

												<?php if($has_description){ ?>
												<div class="description" itemprop="description">
													<p>Alabatur et conpita quaeritando Graeco sermone, cuius erat inpendio gnarus, quid de Caesare quisque sentiret. et dierum solet imitari fulgorem.</p>
												</div>
												<?php } ?>
											</div>

											<div class="product-price">
												<div class="price-container" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
													<meta itemprop="category" content="Category1">
													<meta itemprop="itemCondition" itemscope itemtype="http://schema.org/NewCondition"> <!-- List of condition : NewCondition, DamagedCondition, UsedCondition, RefurbishedCondition -->
													<meta itemprop="priceCurrency" content="USD"> <!-- List of currency : The currency used to describe the product price, in three-letter ISO format. -->
													<link itemprop="availability" href="http://schema.org/InStock" content="in_stock" />
													<!-- List of availibility :
														out_of_stock : http://schema.org/OutOfStock
														in_stock : http://schema.org/InStock
														instore_only : http://schema.org/InStoreOnly
														preorder : http://schema.org/PreOrder
														online_only : http://schema.org/OnlineOnly
													-->
													<span class="special-price"><span class="price-label">Special Price: </span><span itemprop="price" class="price">$26.00</span></span>
													<span class="old-price"><span class="price-label">Regular Price: </span><span class="price">$36.00</span></span>
												</div>
												<?php if($has_btn){ ?>
												<div class="product-btn">
													<a class="btn btn-cart" href="#">Add to cart</a>
												</div>
												<?php } ?>
											</div>
										</article><!-- /product -->