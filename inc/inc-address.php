<form id="form-address" class="form-horizontal" action="" method="post" role="form">

							<fieldset class="panel">
								<div class="panel-heading">
									Address
								</div>

								<div class="panel-body">

									<div class="form-group group-type">
										<label class="control-label" for="type">Type of address: <span class="required">*</span></label>
										<div class="control-input">
											<select name="type" id="type" class="form-control"required>
												<option value="0">Home address</option>
												<option value="1">Principal residence</option>
												<option value="2">Secondary residence</option>
												<option value="3">Hall of residence</option>
												<option value="4">Shipping address</option>
												<option value="5">Billing address</option>
												<option value="4">Others</option>
											</select>
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
											<input type="text" name="address_2" id="address_2" class="form-control" placeholder="Complementary address">
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


							<div class="form-group group-primary">
								<div class="control-input">
									<div class="checkbox">
										<label class="control-label" for="primary">
											<input type="checkbox" name="primary" id="primary" value="1"> Make this address has my primary address
										</label>
									</div>
								</div>
							</div><!--/.form-group-->

							<div class="form-group group-btn">
								<div class="control-btn">
									<button type="submit" class="btn btn-submit">Create</button>
								</div>
							</div><!--/.form-group-->
						</form>