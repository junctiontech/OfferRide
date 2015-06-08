<?php //$user_session_data = $this->session->userdata('user_data');

//print_r(user_profile[0]->UserId);die;
?>
  <div class="container">
            <h1 class="page-title">OfferRide</h1>
        </div>
  <div class="container">			
	<div class="row">
		<div class="col-md-12">
                          <form method="post" action="<?=base_url();?>profile/offer_ride" class="booking-item-dates-change mb30" >
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
													  
														 <input type="hidden" value="<?=(!empty($offer_data[0]->offer_ride_id))?$offer_data[0]->offer_ride_id:''?>" name="offer_ride_id">
														 <input type="hidden" value="<?=isset($user_profile)?$user_profile[0]->UserId:''?>" name="UserId">
														<input type="hidden" value="info" name="info">
														
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                            <label>Pick-up Location</label>
                                                            <input class="form-control" id="txtFrom" placeholder="City, Airport" type="text" name="pick_up_location" value="<?=(!empty($offer_data[0]->pick_up_location))?$offer_data[0]->pick_up_location:''?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                            <label>Drop-off Location</label>
                                                            <input class="form-control" placeholder="City, Airport" type="text" id="txtTo" name="drop_off_location" value="<?=(!empty($offer_data[0]->drop_off_location))?$offer_data[0]->drop_off_location:''?>"/>
                                                        </div>
                                                    </div>
													 <div class="col-md-4">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                            <label>Halt Location</label>
                                                            <input class="form-control" placeholder="City, Airport" type="text" id="txtHalt" type="text" name="halt_location" value="<?=(!empty($offer_data[0]->halt_location))?$offer_data[0]->halt_location:''?>"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
										</div>
										<hr>		
                               
    
											<div class="row">
											 <div class="col-md-3">
												<div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon"></i>
																<label>Halt Minute</label>
															
																<input  class="time-pick form-control" placeholder="Halt Minute" type="text"type="text" name="pick_up_time" value="<?=(!empty($offer_data[0]->halt_minute))?$offer_data[0]->halt_minute:''?>"/>
															</div>
													
												</div>
												<div class="col-md-3">
												<div class="input-daterange" data-date-format="M d, D">
														 <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
																	<label>Pick-up Date</label>
																	<input class="form-control " name="pick"  type="text" type="text" id="dp1"  id="DtChkIn" value=""/>
																</div>
													</div>
												</div>
													 <div class="col-md-3">
															 <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
																		<label>Time</label>
																		 <input class="time-pick form-control" type="text" name="pick_up_time" 
																		 value="<?=(!empty($offer_data[0]->pick_up_time))?$offer_data[0]->pick_up_time:''?>"/>
															</div>
															
															</div>	
															<div class="col-md-3">
														<div class="form-group form-group-lg form-group-select-plus">
                                                                    <label>Seats</label>
                                                                        <select class="form-control" name="seat" >
                                                                        <option  value="1" <?=(!empty($offer_data[0]->seat)&& $offer_data[0]->seat==1)?'selected="selected"':''?>>1</option>
                                                                        <option value="2" <?=(!empty($offer_data[0]->seat)&& $offer_data[0]->seat==2)?'selected="selected"':''?>>2</option>
                                                                        <option value="3" <?=(!empty($offer_data[0]->seat)&& $offer_data[0]->seat==3)?'selected="selected"':''?>>3</option>
                                                                        <option value="4" <?=(!empty($offer_data[0]->seat)&& $offer_data[0]->seat==4)?'selected="selected"':''?>>4</option>
                                                                        <option value="5" <?=(!empty($offer_data[0]->seat)&& $offer_data[0]->seat==5)?'selected="selected"':''?>>5</option>
                                                                        <option value="6" <?=(!empty($offer_data[0]->seat)&& $offer_data[0]->seat==6)?'selected="selected"':''?>>6</option>
                                                                        <option value="7" <?=(!empty($offer_data[0]->seat)&& $offer_data[0]->seat==7)?'selected="selected"':''?>>7</option>
                                                                        <option value="8" <?=(!empty($offer_data[0]->seat)&& $offer_data[0]->seat==8)?'selected="selected"':''?>>8</option>
                                                                        <option value="9" <?=(!empty($offer_data[0]->seat)&& $offer_data[0]->seat==9)?'selected="selected"':''?>>9</option>
                                                                        <option value="10" <?=(!empty($offer_data[0]->seat)&& $offer_data[0]->seat==10)?'selected="selected"':''?>>10</option>
                                                                        <option value="11" <?=(!empty($offer_data[0]->seat)&& $offer_data[0]->seat==11)?'selected="selected"':''?>>11</option>
                                                                        <option value="12" <?=(!empty($offer_data[0]->seat)&& $offer_data[0]->seat==12)?'selected="selected"':''?>>12</option>
                                                                        <option value="13" <?=(!empty($offer_data[0]->seat)&& $offer_data[0]->seat==13)?'selected="selected"':''?>>13</option>
                                                                        <option value="14" <?=(!empty($offer_data[0]->seat)&& $offer_data[0]->seat==14)?'selected="selected"':''?>>14</option>
                                                                    </select>
                                                    </div>	
													
												</div>	
											</div>				
											
										<hr>
										 <div class="row">
                                            <div class="col-md-4">
											 <label> Pay Mode</label>
														
										 <?php
       								$mode_field = $this->utilities->get_enum_field('paid_mode','offer_ride');
									foreach($mode_field as $s) { ?>	 
       								<div class="radio-inline radio">
       								<label>
       								<input  class="i-radio" type="radio" name="paid_mode" value="<?=$s?>"  <?=(!empty($offer_data[0]->paid_mode)&& $offer_data[0]->paid_mode==$s)?"checked":""?>><?=ucwords($s)?></label>
									</div>
       								<?php } ?>
										  </div>
											
											 <div class="col-md-4">
												<label> AC/Non AC</label>
                                             	  <?php
       								$ac_field = $this->utilities->get_enum_field('ac','offer_ride');
									foreach($ac_field as $s) { ?>	 
       								<div class="radio-inline radio">
       								<label>
       								<input  class="i-radio" type="radio" name="ac" value="<?=$s?>" <?=(!empty($offer_data[0]->ac)&&$offer_data[0]->ac==$s)?"checked":""?>><?=ucwords($s)?></label>
									</div>
       								<?php } ?>
										
												
                                            </div>
											<div class="col-md-4">
												 <label>Mode</label>
												  <?php
       								$mode_own_field = $this->utilities->get_enum_field('mode','offer_ride');
									foreach($mode_own_field as $s) { ?>	 
       								<div class="radio-inline radio">
       								<label>
       								<input  class="i-radio" type="radio" name="mode" value="<?=$s?>" <?=(!empty($offer_data[0]->mode)&&$offer_data[0]->mode==$s)?"checked":""?>><?=ucwords($s)?></label>
									</div>
       								<?php } ?>
                                            </div>
											
										</div>	
									<hr>
									<div class="row">
										<div class="col-md-5">
											 <label> Vehicle Mode</label>
															
																 <?php
       								$vehicle_field = $this->utilities->get_enum_field('vehicle_mode','offer_ride');
									foreach($vehicle_field as $s) { ?>	 
       								<div class="radio-inline radio">
       								<label>
       								<input  class="i-radio" type="radio" name="vehicle_mode" value="<?=$s?>" <?=(!empty($offer_data[0]->vehicle_mode)&&$offer_data[0]->vehicle_mode==$s)?"checked":""?>><?=ucwords($s)?></label>
									</div>
       								<?php } ?>
										</div>
										<div class="col-md-3">
												<label>Company</label>
											
											<select name="form3Company" id="form3Company" class="select2 form-control required" required="required" ">
														<option value="Honda" <?=(!empty($offer_data[0]->vehicle_company)&& $offer_data[0]->vehicle_company==Honda)?'selected="selected"':''?>>Honda</option>
														<option value="TVS" <?=(!empty($offer_data[0]->vehicle_company)&& $offer_data[0]->vehicle_company==TVS)?'selected="selected"':''?>>TVS</option>
														  
														</select>
												</div>
										<div class="col-md-4">
												<label>Model</label>
													<select name="form3Company" id="form3Company" class="select2 form-control required" required="required" >
														<option value="Honda255" <?=(!empty($offer_data[0]->vehicle_model)&& $offer_data[0]->vehicle_model==Honda255)?'selected="selected"':''?>>Honda255</option>
														<option value="TVS250" <?=(!empty($offer_data[0]->vehicle_model)&& $offer_data[0]->vehicle_model==TVS250)?'selected="selected"':''?>>TVS250</option>
														  
														</select>
													</div>
									</div>
									<hr>
										 <div class="row">
                                            <div class="col-md-4">
												 <label>Smoker/Non-Smoker</label>
												 <?php
       								$smoke_field = $this->utilities->get_enum_field('smoke','offer_ride');
									foreach($smoke_field as $s) { ?>	 
       								<div class="radio-inline radio">
       								<label>
       								<input  class="i-radio" type="radio" name="smoke" value="<?=$s?>" <?=(!empty($offer_data[0]->smoke)&&$offer_data[0]->smoke==$s)?"checked":""?>><?=ucwords($s)?></label>
									</div>
       								<?php } ?>
											 </div>
											 <div class="col-md-4">	
											 <label>Company</label>
                                             	 <?php
       								$company_field = $this->utilities->get_enum_field('company','offer_ride');
									foreach($company_field as $s) { ?>	 
       								<div class="radio-inline radio">
       								<label>
       								<input  class="i-radio" type="radio" name="company" value="<?=$s?>" <?=(!empty($offer_data[0]->company)&&$offer_data[0]->company==$s)?"checked":""?>><?=ucwords($s)?></label>
									</div>
       								<?php } ?>
												</div>
											<div class="col-md-4">
												<label> Music</label>
                                             	 <?php
       								$music_field = $this->utilities->get_enum_field('music','offer_ride');
									foreach($music_field as $s) { ?>	 
       								<div class="radio-inline radio">
       								<label>
       								<input  class="i-radio" type="radio" name="music" value="<?=$s?>" <?=(!empty($offer_data[0]->music)&&$offer_data[0]->music==$s)?"checked":""?>><?=ucwords($s)?></label>
									</div>
       								<?php } ?>
												
                                            </div>	
											 
											</div>
											<hr>
											<div class="row">
											 
												   <div class="col-md-6  col-sm-12">
												 <label>Waiting</label>
												 <?php
       								$waiting_field = $this->utilities->get_enum_field('waiting','offer_ride');
									foreach($waiting_field as $s) { ?>	 
       								<div class="radio-inline radio">
       								<label>
       								<input  class="i-radio" type="radio" name="waiting" value="<?=$s?>" <?=(!empty($offer_data[0]->waiting)&&$offer_data[0]->waiting==$s)?"checked":""?>><?=ucwords($s)?></label>
									</div>
       								<?php } ?>
											 </div>
											 <div class="col-md-6 col-sm-12">
												<label> Frequency</label>
                                             	  <?php
       								$frequency_field = $this->utilities->get_enum_field('frequency','offer_ride');
									foreach($frequency_field as $s) { ?>	 
       								<div class="radio-inline radio">
       								<label>
       								<input  class="i-radio" type="radio" name="frequency" value="<?=$s?>" <?=(!empty($offer_data[0]->frequency)&&$offer_data[0]->frequency==$s)?"checked":""?>><?=ucwords($s)?></label>
									</div>
       								<?php } ?>
                                            </div>
												 <div class="gap"></div>
										<div class="col-md-2 col-md-offset-5">
                                       <input class="btn btn-primary  btn-lg btn-block " type="submit" value="Offer">
									   </div>
											</div>
									</form>	
		</div>
										
									  
									
									</div>
								 <div class="gap"></div>	
        </div>
	
