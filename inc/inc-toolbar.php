<div class="toolbar toolbar-<?php echo $toolbar; ?>" role="toolbar">
							<div class="sorter-container">
								<span class="amount"><?php echo $product; ?> Item(s)</span>

								<?php $limit = isset($_GET['limit']) ? $_GET['limit'] : '8' ?>
								<span class="limiter">
									<label for="limit-<?php echo $toolbar; ?>">Show</label>
									<select id="limit-<?php echo $toolbar; ?>" name="limit">
										<option value="?limit=4"<?php if($limit == '4') { echo ' selected'; } ?>>4</option>
										<option value="?limit=8"<?php if($limit == '8') { echo ' selected'; } ?>>8</option>
										<option value="?limit=12"<?php if($limit == '12') { echo ' selected'; } ?>>12</option>
										<option value="?limit=50"<?php if($limit == '50') { echo ' selected'; } ?>>50</option>
										<option value="?limit=all"<?php if($limit == 'all') { echo ' selected'; } ?>>All</option>
									</select>
									<span class="per-page"> per page</span>
								</span><!-- /.limiter -->

								<?php $order = isset($_GET['order']) ? $_GET['order'] : 'name' ?>
								<?php $dir = isset($_GET['dir']) ? $_GET['dir'] : 'asc' ?>
								<span class="sort-by">
									<label for="sortby-<?php echo $toolbar; ?>">Sort By</label>
									<select id="sortby-<?php echo $toolbar; ?>" name="sortby" onchange="">
										<option value="?order=position"<?php if($order == 'position') { echo ' selected'; } ?>>Position</option>
										<option value="?order=name"<?php if($order == 'name') { echo ' selected'; } ?>>Name</option>
										<option value="?order=price"<?php if($order == 'price') { echo ' selected'; } ?>>Price</option>
										<option value="?order=rating"<?php if($order == 'rating') { echo ' selected'; } ?>>Rating</option>
									</select>
									<?php if($dir == 'desc') { ?>
									<a class="sort-order" href="?dir=asc" title="Set Ascending Direction"><i class="icon-long-arrow-down"></i></a>
									<?php } else { ?>
									<a class="sort-order" href="?dir=desc" title="Set Descending Direction"><i class="icon-long-arrow-up"></i></a>
									<?php } ?>
								</span><!-- /.sort-by -->

								<span class="view-mode">
									<span class="view-mode-label">View as:</span>
									<span class="view-mode-btn">
										<a href="?mode=grid" data-toggle="view" role="button" class="btn btn-grid"><i class="icon-grid"></i></a>
										<a href="?mode=list" data-toggle="view" role="button" class="btn btn-list "><i class="icon-list"></i></a>
									</span>
								</span><!-- /.view-mode -->

							</div><!-- /.sorter -->

							<?php $page = isset($_GET['page']) ? $_GET['page'] : '1' ?>
							<div class="pagination-container" role="pagination" aria-labelledby="pagination-label-<?php echo $toolbar; ?>">
								<strong id="pagination-label-<?php echo $toolbar; ?>" class="pagination-label">Pagination</strong>
								<ul class="pagination">
									<li><a href="?page=<?php echo $page-1; ?>" class="prev"><i class="icon-prev"></i></a></li>
									<li<?php if($page == 1) { echo ' class="active"'; } ?>><a href="?page=1"<?php if($page == 1) { echo ' tabindex="-1"'; } ?>>1</a></li>
									<li<?php if($page == 2) { echo ' class="active"'; } ?>><a href="?page=2"<?php if($page == 2) { echo ' tabindex="-1"'; } ?>>2</a></li>
									<li<?php if($page == 3) { echo ' class="active"'; } ?>><a href="?page=3"<?php if($page == 3) { echo ' tabindex="-1"'; } ?>>3</a></li>
									<li<?php if($page == 4) { echo ' class="active"'; } ?>><a href="?page=4"<?php if($page == 4) { echo ' tabindex="-1"'; } ?>>4</a></li>
									<li<?php if($page == 5) { echo ' class="active"'; } ?>><a href="?page=5"<?php if($page == 5) { echo ' tabindex="-1"'; } ?>>5</a></li>
									<li><a href="?page=<?php echo $page+1; ?>" class="next"><i class="icon-next"></i></a></li>
								</ul>
							</div>
						</div><!-- /.toolbar toolbar-<?php echo $toolbar; ?> -->
