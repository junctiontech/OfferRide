       <?php //$user_session_data = $this->session->userdata('user_data');

//print_r($vehicle_data);die;
       ?>
       <div class="container">
       	<h3 class="page-title">User Profile</h3>
       </div>
       <div class="container">
       	<div class="row">
       		<!-- Image Upload Dialog Starts -->
       		<div class="mfp-with-anim mfp-hide mfp-dialog" id="edit-card-dialog">
			<form action="<?=base_url();?>index.php/profile/user_image" method="post">
       			<h3 class="mb0">Upload Profile Photo</h3>

       			<div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                                                               <img src="http://placehold.it/200x150" alt="...">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                                        <div>
                                                               <span class="btn btn-primary btn-file">
                                                                      <span class="fileinput-new">Select image</span>
                                                                      <span class="fileinput-exists">Change</span>
																	  <form>
                                                                      <input type="file" name="..." accept="image/*">
																	  </form>
                                                               </span>
                                                               <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                 </div>

       			
			</form>
       		</div> 
       		<!-- Image Upload Dialog ends -->
       		<div class="col-md-3">
       			<aside class="user-profile-sidebar">
                                    <a class="fa fa-pencil popup-text box-icon-small box-icon-right box-icon-info box-icon-to-success animate-icon-top-to-bottom round" href="#edit-card-dialog" rel="tooltip" data-placement="top" title="upload profile picture" data-effect="mfp-zoom-out"></a>
       				<div class="user-profile-avatar text-center">
       					<img src="<?=base_url();?>img/300x300.png" alt="Image Alternative text"/>

                                          
       					<h5><?=$user_profile[0]->FirstName?> <?=$user_profile[0]->LastName?></h5>
       				</br>
       				<p><a class="btn btn-primary btn-small" href="<?=base_url();?>profile/offer"><i class="fa fa-rocket"></i>Offer Ride</a></p>
       			</div>
       			<ul class="list user-profile-nav">
       				<li><a href="<?=base_url();?>index.php/profile/userprofile"><i class="fa fa-cog"></i>User Profile</a>
       				</li>
       				<li><a href="<?=base_url();?>profile/book_history"><i class="fa fa-clock-o"></i>Booking History</a>
       				</li>

       			</ul>
       		</aside>
       	</div>
       	<div class="col-md-9">
       		<div class="tabbable">
       			<ul class="nav nav-pills" id="myTab">
       				<li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-home"></i> <span >Personal Information</span></a>
       				</li>
       				<li><a href="#tab-2" data-toggle="tab"><i class="fa fa-key"></i> <span >Change Password</span></a>
       				</li>
       				<li><a href="#tab-3" data-toggle="tab"><i class="fa fa-car"></i> <span >Vehicle Information</span></a>
       				</li>
       			</ul>

       			<div class="tab-content">
       				<div class="tab-pane fade in active" id="tab-1">
       					<div class="gap gap-small"></div>
       					<form action="<?=base_url();?>index.php/profile/update_user" method="post">
       						<div class="row">
       							<div class="col-md-6">

       								<input type="hidden" value="<?=$user_profile[0]->UserId?>" name="UserId">
       								<input type="hidden" value="info" name="info">
       								<h4>Personal Infomation</h4>
       								<div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
       									<label>First Name</label>
       									<input class="form-control" name="FirstName" value="<?=$user_profile[0]->FirstName?>" type="text" />
       								</div>
       								<div class="form-group form-group-icon-left"><i class="fa fa-user input-icon"></i>
       									<label>Last Name</label>
       									<input class="form-control" name="LastName" value="<?=$user_profile[0]->LastName?>" type="text" />
       								</div>
										
										<div class="form-group">
       									<label>Gender</label>
       								<?php
       								$gen_field = $this->utilities->get_enum_field('Gender','usertable');
									foreach($gen_field as $s) { ?>	 
       								<div class="radio-inline radio">
       								<label>
       								<input  class="i-radio" type="radio" name="Gender" value="<?=$s?>" <?=($user_profile[0]->Gender==$s)?"checked":""?>><?=ucwords($s)?></label>
									</div>
       								<?php } ?>
								</div>
       								<div class="form-group form-group-icon-left"><i class="fa fa-envelope input-icon"></i>
       									<label>E-mail</label>
       									<input class="form-control" name="Email" value="<?=$user_profile[0]->Email?>" type="text" />
       								</div>
       									<div class="gap gap-small"></div>

       									</div>
       									<div class="col-md-6">
       										<h4>Location</h4>
       										<div class="form-group form-group-icon-left"><i class="fa fa-building-o input-icon"></i>
       											<label>Address</label>
       											<input class="form-control" id="txtFrom" placeholder="City, Airport" type="text" name="pick_up_location" value="<?=$user_profile[0]->country?>" type="text" name="country" placeholder="Please enter your country"/>
       										</div>
       										<!--<div class="form-group form-group-icon-left"><i class="fa fa-building-o  input-icon"></i>
       											<label>City</label>
       											<input class="form-control"  type="text" name="city" value="<?=$user_profile[0]->city?>" placeholder="Please enter your city"//>
       										</div>
       										<div class="form-group form-group-icon-left"><i class="fa fa-building-o  input-icon"></i>
       											<label>Address(Landmark)</label>
       											<input class="form-control"  type="text" name="address" value="<?=$user_profile[0]->address?>" placeholder="Please enter your address"//>
       										</div>-->
       										<div class="form-group form-group-icon-left"><i class="fa fa-qrcode input-icon"></i>
       											<label>ZIP code/Postal code</label>
       											<input class="form-control"  type="text" name="zip" value="<?=$user_profile[0]->zip?>" placeholder="Please enter your Zip Code"//>
       										</div>
       										<div class="form-group form-group-icon-left"><i class="fa fa-car input-icon"></i>
       											<label>Driving License Number</label>
       											<input class="form-control" name="LicenseNo" value="<?=$user_profile[0]->LicenseNo?>" type="text" readonly />
       										</div>
											<div class="form-group form-group-icon-left"><i class="fa fa-phone input-icon"></i>
       									<label>Phone Number</label>
       									<input class="form-control" name="MobileNo" value="<?=$user_profile[0]->MobileNo?>" type="text" />
       								</div>
       							
									
       									</div>
										
       								</div>	
       								<hr>
       								<div class="row">
       									<div class="col-md-12 ">
       										 <a class="btn btn-primary btn-small" href="<?=base_url();?>profile/delete_user/<?=$user_profile[0]->UserId?>"><i class="fa fa-times"></i>Delete Account</a>
       										
       										<input type="submit" class="btn btn btn-primary" value="Save Changes"/>
       									</div>	
       								</div>
       							</form>	

       						</div>
       						<div class="tab-pane fade" id="tab-2">
       							<div class="row">
       								<div class="col-md-12"></br>
       									<h4>Change Password</h4>
       									<form method="post" action="<?=base_url();?>index.php/profile/update_user" >
       										<input type="hidden" value="changepass" name="changepass">
       										<input type="hidden" value="<?=$user_profile[0]->UserId?>" name="UserId">
       										<div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
       											<label>Current Password</label>

       											<input type="password" id="cpassword" name="cpassword"  onBlur="match_currentpass('<?=$user_profile[0]->password?>');"class="form-control" required>
       										</div>
       										<div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
       											<label>New Password</label>

       											<input type="password" id="password_p" name="password" pattern=".{6,20}" title="Password should have 6 character" class="form-control"  required>
       										</div>
       										<div class="form-group form-group-icon-left"><i class="fa fa-lock input-icon"></i>
       											<label>New Password Again</label>

       											<input type="password" id="rpassword_p" name="repassword" onBlur="match_pass('p')" pattern=".{6,20}" title="Password should have 6 character" class="form-control" required>
       										</div>
       										<hr />
       										<input class="btn btn-primary" type="submit" value="Change Password" />
       									</form>
       									<div class="gap"></div>
       								</div>
       							</div>
       						</div>
       						<div class="tab-pane fade" id="tab-3">
       							<div class="gap gap-small"></div>
									<h4 class="btn btn-primary popup-text pull-right" href="#small-dialog" data-effect="mfp-zoom-out">Add Vehicle</h4>
       							<h4>Vehicles</h4>
								<?php $i = 0; foreach($vehicle_data as $key=>$v){  $i++; ?>
       						<div class="table-responsive">
                                                      <table class="table table-bordered">
							      <thead>
							        <tr>
							          <th>Sno</th>
							          <th>Vehicle Mode</th>
							          <th>Registration No</th>
							          <th>Company</th>
							          <th>Model</th>
							          <th>Action</th>
							          
							        </tr>
							      </thead>
							      <tbody>
							        <tr>
							          <th scope="row"><?=$i?></th>
							          <td><?=$v->vehicle_type ?> Wheeler</td>
							          <td><?=$v->vehicle_no ?></td>
							          <td><?=$v->vehicle_make ?></td>
							           <td><?=$v->vehicle_model ?></td>
							           <td><a href="<?=base_url();?>profile/delete_vehicle/<?=$v->vehicle_id ?>"><i class="fa  fa-trash-o box-icon box-icon-danger" title=
							           	"Delete" ></i></a></td>
							        </tr>
							   </tbody>
							    </table>
                                                  </div>      
                                                      <?php } ?>			
							    <hr>	
 			<div id="small-dialog" class="mfp-with-anim mfp-hide mfp-dialog">
                        <h4>Add Vehicles</h4>

       							<form method="post" action="<?=base_url();?>index.php/profile/register_vehicle">
       								<div class="row">

       									<div class="col-md-6">
       										<input type="hidden" value="<?=$user_profile[0]->UserId ?>" name="UserId">
       										<label>Vehicle Mode</label>
       										<div class="radio-inline radio-stroke">
       											<label >
       												<input class="i-radio" name="vehicle_type" type="radio" value="Two"/>

       												2 Wheeler
       											</label>
       										</div>
       										<div class="radio-inline radio-stroke">
       											<label>
       												<input  class="i-radio" name="vehicle_type" type="radio" value="Four"/>
       												4 Wheler
       											</label>
       										</div>
       									</div>
       									<div class="col-md-6">

       										<div class="form-group form-group-icon-left"><i class="fa fa-car input-icon"></i>
       											<label>Registration Number</label>
       											<input class="form-control" placeholder="Enter Registration No." type="text" name="vehicle_no"/>
       										</div>
       									</div>



       								</div><!--row closed-->	
       								<hr>
       								<div class="row">

       									<div class="col-md-6">
       										<label>Model</label>
       										<select name="vehicle_model" id="form3Company" class="select2 form-control required" required="required">
       											<option value="Honda 255" class="form-control required" required="required">Honda 255</option>
       											<option value="TVS 250" class="form-control required" required="required">TVS 250</option>
       										</select>
       									</div>
       									<div class="col-md-6">
       										<label>Company</label>

       										<select name="vehicle_make" id="form3Company" class="select2 form-control required" required="required">
       											<option value="Honda" class="form-control required" required="required">Honda</option>
       											<option value="TVS" class="form-control required" required="required">TVS</option>
       										</select>
       									</div>	
       								</div>
       								<hr>
       								<div class="row">
       									<div class="col-md-12 ">
       										<input type="submit" class="btn btn btn-primary" value="Save Changes"/>
       									</div>	
       								</div>
       							</div> 
       						</form>
       						</div>
       						<div class="gap"></div>


       					</div>
       				</div>	
       			</div>		

       		</div>
       	</div>
       </div>
