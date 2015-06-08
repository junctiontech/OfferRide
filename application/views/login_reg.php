<?php //print_r($info);die;?>
 <div class="container">
            <h1 class="page-title">Join Share Ride</h1>
        </div>
        <div class="container">
                            <div class="row row-wrap" data-gutter="60"> 
                                <div class="col-md-4">
                                    <h3 class="mb15">Login</h3>
                                    <form  method="post" action="<?=base_url();?>index.php/home/login" >
							           <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
                                            <label>Mobile Number</label>
											<input name="info" id="info"  type="hidden" />
                                            <input class="form-control" placeholder="e.g. johndoe@gmail.com" type="text" name="MobileNo" />
                                        </div>
                                        <div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
                                            <label>Password</label>
                                            <input class="form-control" type="password" placeholder="password" name="password"/>
                                        </div>
                                        <input class="btn btn-primary" type="submit" value="Sign in" />
                                    </form>
									<?php $wrong=''; if($wrong){  echo"invalid user or password"; } ?>
                                </div>
                                 <div class="col-md-8">
                                    <h3 class="mb15">New To Share Ride?</h3>
                                    
                                        <div class="tabbable">
                                            <ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
                                                <li class="active"><a href="#Offer-ride" data-toggle="tab">Offer Ride</a>
                                                </li>
                                                <li><a href="#need-ride" data-toggle="tab">Take Ride</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                          <div class="tab-pane fade in active" id="Offer-ride">
											  <form method="post" id="register_form" action="<?=base_url();?>index.php/home/reg_login" >
											  <input name="offer_ride" id="offer_ride" type="hidden" />
											<div class="row">
												<div class="col-md-6">
												<div class="form-group form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
												<label>First Name</label>
												<input name="FirstName" id="form3FirstName" type="text"  class="form-control required" placeholder="e.g. John" type="text" required="required" />
												</div>
												</div>
												<div class="col-md-6">
												<div class="form-group  form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
												 <label>Last Name</label>
												<input name="LastName" id="form3LastName" type="text"  class="form-control required" placeholder="Last Name" placeholder="e.g. Doe" required="required" />
												</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
														<label>Email</label>
														<input name="Email" id="reg-email" type="email"   class="form-control required"required="required" type="email" onblur="check_email(this,<?=(!empty($id))?$id:'0'?>)"  placeholder="youremail@gmail.com"  />
														<span class="msg_box_reg-email" ></span>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-icon-left"><i class="fa fa-mobile input-icon input-icon-show"></i>
														<label>Mobile</label>
														<input name="MobileNo"  id="reg-mobile" type="text"  class="form-control required" type="text" onblur="check_mobile(this,<?=(!empty($id))?$id:'0'?>)" placeholder="Enter Mobile No" required="required"/>
														<span class="msg_box_reg-mobile" ></span>
													</div>
												</div>
										 </div>
										<div class="row">
												<div class="col-md-6">
													<div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
														<label>password</label>
														<input name="Password" id="form3Password" type="password"  class="form-control required" placeholder=" password" required="required"/>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
														<label>Confirm Password</label>
														<input name="password" id="form3Cassword" type="password"  class="form-control required"placeholder="Confirm password" required="required" />
													</div>
												</div>
										</div>	
										
										<div class="row">
													<div class="col-md-6">
														<label>Gender</label>
														<div class="radio-inline radio-stroke">
															<label>
																<input class="i-radio" type="radio" name="Gender" value="Male" />Male</label>
														</div>
														<div class="radio-inline radio-stroke">
															<label>
																<input class="i-radio" type="radio" name="Gender" value="Female" />Female</label>
														</div>
														
													</div>
												
													<div class="col-md-6">
														 <div class="form-group form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
													   <label>Driving License </label>
													  <input name="LicenseNo" id="reg-license" type="text"  class="form-control required" required="required" placeholder="e.g. MPO4--" type="text" onblur="check_license(this,<?=(!empty($id))?$id:'0'?>)" />
													  <span class="msg_box_reg-license" ></span>
													  </div>
												</div>
												</div>
									
										
										</br>
									<div class="row">
										<div class="col-md-12">
										<input class="btn btn-primary " type="submit" value="Sign up for Share Ride"   />
									</div>
									</div>
									</form>
									</div>	
									
										
									<div class="tab-pane fade " id="need-ride">
										 <form method="post" action="<?=base_url();?>index.php/home/reg_login_needy" >
										 <input name="offer_ride" id="offer_ride" type="hidden" />
											<div class="row">
												<div class="col-md-6">
												<div class="form-group  form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
												<label>First Name</label>
												<input class="form-control" placeholder="e.g. John" type="text" name="FirstName" />
												</div>
												</div>
												<div class="col-md-6">
												<div class="form-group form-group-icon-left"><i class="fa fa-user input-icon input-icon-show"></i>
												 <label>Last Name</label>
												<input class="form-control" placeholder="e.g. Doe" type="text" name="LastName"/>
												</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group  form-group-icon-left"><i class="fa fa-envelope input-icon input-icon-show"></i>
														<label>Email</label>
														<input name="Email" id="reg-email-needy" type="email"   class="form-control required"required="required" type="email" onblur="check_email_needy(this,<?=(!empty($id))?$id:'0'?>)"  placeholder="youremail@gmail.com"  />
														<span class="msg_box_reg-email-needy" ></span>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-icon-left"><i class="fa fa-mobile input-icon input-icon-show"></i>
														<label>Mobile</label>
														<input name="MobileNo" id="reg-mobile-needy" type="text"  class="form-control required" type="text" onblur="check_mobile_needy(this,<?=(!empty($id))?$id:'0'?>)" placeholder="Enter Mobile No" required="required"/>
														<span class="msg_box_reg-mobile-needy" ></span>
													</div>
												</div>
										 </div>
										<div class="row">
												<div class="col-md-6">
													<div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
														<label>Password</label>
														<input class="form-control" type="password" placeholder=" password" name="password"/>
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon input-icon-show"></i>
														<label>Confirm Password</label>
														<input class="form-control" type="password" placeholder="Confirm password" name="password"/>
													</div>
												</div>
										</div>	
										<div class="row">
												<div class="col-md-6">
														<label>Gender</label>
														<div class="radio-inline radio-stroke">
															<label>
																<input class="i-radio" type="radio" name="Gender" value="Male"/>Male</label>
														</div>
														<div class="radio-inline radio-stroke">
															<label>
																<input class="i-radio" type="radio" name="Gender"value="Female"/>Female</label>
														</div>
													</div>
												
												<div class="col-md-6">
													<label>Smoker/Non Smoker</label>
												<div class="radio-inline radio-stroke">
															<label>
																<input class="i-radio" type="radio" name="myRadiolist" />Smoker</label>
														</div>
														<div class="radio-inline radio-stroke">
															<label>
																<input class="i-radio" type="radio" name="myRadiolist" />No Smoker</label>
														</div>
												</div>
										</div>
										<div class="gap-small"></div>
										<div class="row">
										<div class="col-md-12">
										<input class="btn btn-primary " type="submit"  value="Sign up for Share Ride"  />
									</div>
									</div>
									</form>
									</div>
									
									
								</div>					
                               </div>	
							   </br>
							  
                                  
                                </div>
                            </div>
                        </div>
                   
