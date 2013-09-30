<div class="search-container">
							<form id="form-search" action="search.php" method="get" role="search" aria-labelledby="search-label">
								<label id="search-label" for="q">Search a product</label>
								<div class="input-group">
									<input type="search" name="q" id="q" placeholder="Search..." class="form-control" value="<?php if(isset($_GET['q'])) { echo $_GET['q']; }?>" aria-required="true" required pattern=".{2,}" title="Minmimum 2 characters.">
									<div class="input-group-btn">
										<button type="submit" class="btn btn-search"><i class="icon-search"></i> <span>Search</span></button>
									</div>
								</div>
							</form>
						</div>