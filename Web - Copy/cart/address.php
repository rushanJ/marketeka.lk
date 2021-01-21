<form action="../php/confOrder.php" method="post" class="creditly-card-form agileinfo_form">
<input class="billing-address-name form-control" type="hidden" name="id" placeholder="Full name" value="10">

									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="information-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Name: </label>
													<input name="name" class="billing-address-name form-control" type="text" name="name" placeholder="Full name" value="<?php echo $_SESSION["name"]?>">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Mobile number:</label>
														    <input class="form-control" name="tp" type="text" placeholder="Mobile number" value="<?php echo $_SESSION["tp"]?>">
														</div>
													</div>
													
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label"> Address : </label>
												 <input class="form-control" name= "address"  type="text" placeholder="Address" value="<?php echo $_SESSION["userAddress"]?>" >
                                                </div>
                                                <div class="controls">
													<label class="control-label"> Remarks : </label>
												 <input class="form-control" name="remarks" type="text" placeholder="Remarks">
												</div>
													
											</div>
											<button type="submit" class="submit check_out">Order</button>
										</div>
									</section>
								</form>