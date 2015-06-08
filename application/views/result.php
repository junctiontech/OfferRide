 <?php  $i = 0;   foreach($match_data as $j){ $i++; }
 ?>
 <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a>
                </li>
                <li class="active">Search Result</li>
            </ul>
            
            <h3 class="booking-title"><?=$i?> Result Found  on <?=(!empty($match_data[0]->pick_up_date))?$match_data[0]->pick_up_date:''?> From <?=(!empty($match_data[0]->pick_up_location))?$match_data[0]->pick_up_location:''?> to <?=(!empty($match_data[0]->drop_off_location))?$match_data[0]->drop_off_location:''?> </h3>
			
                  <form class="booking-item-dates-change mb30" method="post" action="<?=base_url();?>home/result" >
				   <input type="hidden" value="<?=isset($user_profile)?$user_profile[0]->UserId:''?>" name="UserId">
				   <input type="hidden" value="<?=(!empty($match_data[0]->offer_ride_id))?$match_data[0]->offer_ride_id:''?>" name="offer_ride_id">
														<input type="hidden" value="f1" name="info">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
													   
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                            <label>Pick-up Location</label>
                                                            <input   class="form-control" id="txtFrom" placeholder="City, Airport" type="text" name="pick_up_location" value="<?=(!empty($this->input->post('pick_up_location')))?$this->input->post('pick_up_location'):''?>"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                            <label>Drop-off Location</label>
                                                            <input class="form-control" placeholder="City, Airport" type="text" id="txtTo" name="drop_off_location" 
															value="<?=(!empty($this->input->post('drop_off_location')))?$this->input->post('drop_off_location'):''?>"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
										</div>	
                                     <div class="row">
                                        <div class="col-md-12">
										<div class="row">
										 <div class="col-md-4">
                                                <div class="input-daterange" data-date-format="M d, D">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>Pick-up Date</label>
                                                                <input class="form-control " name="pick"  type="text" type="text" id="dp1"  id="DtChkIn" 
																value="<?=(!empty($this->input->post('pick')))?$this->input->post('pick'):''?>"/>
																
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label>Time</label>
                                                                 <input class="time-pick form-control" type="text" value="<?=(!empty($this->input->post('pick_up_time')))?$this->input->post('pick_up_time'):''?>" name="pick_up_time"/>
                                                            </div>
                                                        </div>
												</div>
                                                </div>
                                            </div>
										 <div class="col-md-2">
										 
                                                            <div class="form-group form-group-lg form-group-select-plus">
                                                                    <label>Seats</label>
                                                                  
                                                                    <select class="form-control " name="seat">
                                                                 <option value="1" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==1)?'selected="selected"':''?>>1</option>
                                                                        <option value="2" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==2)?'selected="selected"':''?>>2</option>
                                                                        <option value="3" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==3)?'selected="selected"':''?>>3</option>
                                                                        <option value="4" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==4)?'selected="selected"':''?>>4</option>
                                                                        <option value="5" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==5)?'selected="selected"':''?>>5</option>
                                                                        <option value="6" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==6)?'selected="selected"':''?>>6</option>
                                                                        <option value="7" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==7)?'selected="selected"':''?>>7</option>
                                                                        <option value="8" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==8)?'selected="selected"':''?>>8</option>
                                                                        <option value="9" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==9)?'selected="selected"':''?>>9</option>
                                                                        <option value="10" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==10)?'selected="selected"':''?>>10</option>
                                                                        <option value="11" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==11)?'selected="selected"':''?>>11</option>
                                                                        <option value="12" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==12)?'selected="selected"':''?>>12</option>
                                                                        <option value="13" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==13)?'selected="selected"':''?>>13</option>
                                                                        <option value="14" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==14)?'selected="selected"':''?>>14</option>
                                                                    </select>
                                                                </div>
                                                        </div>
														<div class="col-md-6">
                                                            <label> Vehicle Mode</label>
														
                                                            <div class="form-group form-group-lg form-group-select-plus">	
																<?php 
									 $vehicle_field = $this->utilities->get_enum_field('vehicle_mode',' offer_ride');
									
									 foreach($vehicle_field as $p) { 
										
						 ?> 
															 <div class="radio-inline radio-stroke">
																<input  class="i-radio" type="radio" name="vehicle_mode" value="<?=$p?>" <?=(!empty($this->input->post('vehicle_mode'))&& $this->input->post('vehicle_mode')==$p)?"checked":""?>><?=$p?></label>
															</div>
															<?php } ?>
															</div>
														</div>
												</div>
										</div>
										</div>
                                        <button class="btn btn-primary btn-lg" type="submit">Search </button>
                                         </form>
									
            <div class="row">
                <div class="col-md-4" >
                    <aside class="booking-filters booking-filters-white">
                        <h3>Filter Search</h3>
						<form  method="post" action="<?=base_url();?>home/result" id="myform_filter">
						<input type="hidden" value="f2" name="info">
						 <div >	
																<?php 
									 $vehicle_field = $this->utilities->get_enum_field('vehicle_mode',' offer_ride');
									
									 foreach($vehicle_field as $p) { 
										
						 ?> 
															 <div style="visibility:hidden" class="radio-inline radio-stroke">
																<input   class="i-radio" type="radio" name="vehicle_mode" value="<?=$p?>" <?=(!empty($this->input->post('vehicle_mode'))&& $this->input->post('vehicle_mode')==$p)?"checked":""?>><?=$p?></label>
															</div>
															<?php } ?>
<input   class="form-control" id="txtFrom" placeholder="City, Airport" type="hidden" name="pick_up_location" value="<?=(!empty($this->input->post('pick_up_location')))?$this->input->post('pick_up_location'):''?>"/>
<input class="form-control" placeholder="City, Airport" type="hidden" id="txtTo" name="drop_off_location" 
							value="<?=(!empty($this->input->post('drop_off_location')))?$this->input->post('drop_off_location'):''?>"/>
	<input class="form-control " name="pick"   type="hidden" id="dp1"  id="DtChkIn" 
																value="<?=(!empty($this->input->post('pick')))?$this->input->post('pick'):''?>"/>
<select style="visibility:hidden"  class="form-control ">
 <option value="1" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==1)?'selected="selected"':''?>>1</option>
                                                                        <option value="2" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==2)?'selected="selected"':''?>>2</option>
                                                                        <option value="3" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==3)?'selected="selected"':''?>>3</option>
                                                                        <option value="4" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==4)?'selected="selected"':''?>>4</option>
                                                                        <option value="5" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==5)?'selected="selected"':''?>>5</option>
                                                                        <option value="6" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==6)?'selected="selected"':''?>>6</option>
                                                                        <option value="7" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==7)?'selected="selected"':''?>>7</option>
                                                                        <option value="8" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==8)?'selected="selected"':''?>>8</option>
                                                                        <option value="9" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==9)?'selected="selected"':''?>>9</option>
                                                                        <option value="10" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==10)?'selected="selected"':''?>>10</option>
                                                                        <option value="11" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==11)?'selected="selected"':''?>>11</option>
                                                                        <option value="12" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==12)?'selected="selected"':''?>>12</option>
                                                                        <option value="13" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==13)?'selected="selected"':''?>>13</option>
                                                                        <option value="14" <?=(!empty($this->input->post('seat'))&& $this->input->post('seat')==14)?'selected="selected"':''?>>14</option>
 </select>
                       <ul class="list booking-filters-list">
								<li>
                                 <h5  class="booking-filters-title" >Halt Mins</h5>
                               		<div class="radio-inline radio-small">
									<label>
										<input  type="radio" name="waiting"  value="15m" onclick="check_halt('15m')" />15 M</label>
								</div>
								<div class="radio-inline radio-small">
									<label>
										<input  type="radio" name="waiting" value="30m" onclick="check_halt('30m')"/>30 M</label>
								</div>
								<div class="radio-inline radio-small">
									<label>
										<input  type="radio" name="waiting" value="40m" onclick="check_halt('40m')"/>40 M</label>
								</div>
								<div class="radio-inline radio-small">
									<label>
										<input  type="radio" name="waiting" value="60m" onclick="check_halt('60m')"/>60 M</label>
								</div>
                            </li>
                            <li>
                                <h5 class="booking-filters-title">Seats Quantity</h5>
								  <input type="text" id="price-slider" value="" name="sliding_seat">
                            </li>
							<li>
                                 <h5 class="booking-filters-title">Free/Paid</h5>
                               		 <div class="radio-inline radio-small">
									<label>
										<input  type="radio" name="paid_mode" value="free" onclick="check_halt(this,value)"/>Free</label>
								</div>
								<div class="radio-inline radio-small">
									<label>
										<input  type="radio" name="paid_mode" value="paid" onclick="check_halt(this,value)"/>Paid</label>
								</div>
								
                            </li>
							<li>
                                 <h5 class="booking-filters-title">Music</h5>
                               		 <div class="radio-inline radio-small">
									<label>
										<input  type="radio" name="music" value="music" onclick="check_halt(this,value)"/>Music</label>
								</div>
								<div class="radio-inline radio-small">
									<label>
										<input  type="radio" name="music" value="nonmusic" onclick="check_halt(this,value)"/>Non Music</label>
								</div>
								
                            </li>
							<li>
                                 <h5 class="booking-filters-title">Waiting</h5>
                               		 <div class="radio-inline radio-small"> 
									<label>
										<input  type="radio" name="Waiting" value="15m" onclick="check_halt(this,value)"/>15 M</label>
								</div>
								<div class="radio-inline radio-small">
									<label>
										<input  type="radio" name="Waiting" value="30m" onclick="check_halt(this,value)"/>30 M</label>
								</div>
								<div class="radio-inline radio-small">
									<label>
										<input  type="radio" name="Waiting" value="40m" onclick="check_halt(this,value)"/>40 M</label>
								</div>
								<div class="radio-inline radio-small">
									<label>
										<input  type="radio" name="Waiting"  value="60m" onclick="check_halt(this,value)"/>60 M</label>
								</div>
                            </li>
							<li>
                                 <h5 class="booking-filters-title">Frequency</h5>
								<div class="row">
									<div class="col-md-6">
										 <div class="radio-inline radio-small">
											<label>
												<input  type="radio" name="frequency" value="once" onclick="check_halt(this,value)"/>Once</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="radio-inline radio-small">
											<label>
												<input  type="radio" name="frequency" value="monthly" onclick="check_halt(this,value)"/>Monthly</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="radio-inline radio-small">
											<label>
												<input  type="radio" name="frequency" value="weekly" onclick="check_halt(this,value)"/>Weekly</label>
										</div>
									</div>
									<div class="col-md-6">
										<div class="radio-inline radio-small">
											<label>
												<input  type="radio" name="frequency" value="daily" onclick="check_halt(this,value)"/>Daily</label>
										</div>
									</div>                                      
								</div>
                            </li>
								<li>
                                 <h5 class="booking-filters-title">Company</h5>
                               		  <div class="radio-inline radio-small">
                                <label>
                                    <input  type="radio" name="company" value="male" onclick="check_halt(this,value)"/>Male</label>
                            </div>
                            <div class="radio-inline radio-small">
                                <label>
                                    <input  type="radio" name="company" value="female" onclick="check_halt(this,value)"/>Female</label>
                            </div>
								
                            </li>
							<li>
                                 <h5 class="booking-filters-title">Smoker/Non Smoker</h5>
									<div class="radio-inline radio-small">
										<label>
											<input  type="radio" name="smoke" value="smoker" onclick="check_halt(this,value)"/>Smoker</label>
									</div>
									<div class="radio-inline radio-small">
										<label>
											<input  type="radio" name="smoke" value="nonsmoker" onclick="check_halt(this,value)"/>Non Smoker</label>
									</div>
							  </li>
								<li>
                                 <h5 class="booking-filters-title">AC/Non AC</h5>
									<div class="radio-inline radio-small">
										<label>
											<input  type="radio" name="ac" value="ac" onclick="check_halt(this,value)"/>AC</label>
									</div>
									<div class="radio-inline radio-small">
										<label>
											<input  type="radio" name="ac" value="nonac" onclick="check_halt(this,value)"/>Non AC</label>
									</div>
							  </li>
                        </ul>  </form>
                    </aside>
                </div>	<?php if(count($match_data) && is_array($match_data)){?>	
				
                <div class="col-md-8">
                              
                    <ul class="booking-list">
					 <?php foreach($match_data as $j){ $i++; ?>
                        <li>
						
						<form  method="post" action="<?=base_url();?>home/login_user_ride" id="myform" >
<input type="hidden" value="<?=isset($user_profile)?$user_profile[0]->UserId:''?>" name="UserId">
<input type="hidden" value="<?=isset($user_profile)?$user_profile[0]->FirstName:''?>" name="user_name">
<input type="hidden" value="<?=isset($user_profile)?$user_profile[0]->MobileNo:''?>" name="mobile">
<input type="hidden" value="<?=(!empty($match_data[0]->offer_ride_id))?$match_data[0]->offer_ride_id:''?>" name="offer_ride_id">
<input type="hidden" value="<?=(!empty($match_data[0]->frequency))?$match_data[0]->frequency:''?>" name="frequency">
<input type="hidden" value="info" name="info">
<input   class="typeahead form-control" placeholder="City, Airport" type="hidden" name="pick_up_location" value="<?=(!empty($match_data[0]->pick_up_location))?$match_data[0]->pick_up_location:''?>"/>
<input class="typeahead form-control" name="drop_off_location" placeholder="City, Airport" type="hidden" 															
value="<?=(!empty($match_data[0]->drop_off_location))?$match_data[0]->drop_off_location:''?>"/>
<input class="form-control" name="start" type="hidden" 
value="<?=(!empty($match_data[0]->pick_up_date))?$match_data[0]->pick_up_date:''?>"/>
<input class="time-pick form-control" type="hidden" value="<?=(!empty($match_data[0]->pick_up_time))?$match_data[0]->pick_up_time:''?>" name="time"/>
<select class="form-control" style="visibility: hidden" name="seats_booked">
<option type="hidden" value="1" <?=(!empty($match_data[0]->seat)&& $match_data[0]->seat==1)?'selected="selected"':''?> name="seat">1</option>
<option type="hidden" value="2" <?=(!empty($match_data[0]->seat)&& $match_data[0]->seat==2)?'selected="selected"':''?>>2</option>
<option type="hidden" value="3" <?=(!empty($match_data[0]->seat)&& $match_data[0]->seat==3)?'selected="selected"':''?>>3</option>
<option type="hidden" value="4" <?=(!empty($match_data[0]->seat)&& $match_data[0]->seat==4)?'selected="selected"':''?>>4</option>
<option type="hidden" value="5" <?=(!empty($match_data[0]->seat)&& $match_data[0]->seat==5)?'selected="selected"':''?>>5</option>
<option type="hidden" value="6" <?=(!empty($match_data[0]->seat)&& $match_data[0]->seat==6)?'selected="selected"':''?>>6</option>
<option type="hidden" value="7" <?=(!empty($match_data[0]->seat)&& $match_data[0]->seat==7)?'selected="selected"':''?>>7</option>
<option type="hidden" value="8" <?=(!empty($match_data[0]->seat)&& $match_data[0]->seat==8)?'selected="selected"':''?>>8</option>
<option type="hidden" value="9" <?=(!empty($match_data[0]->seat)&& $match_data[0]->seat==9)?'selected="selected"':''?>>9</option>
<option type="hidden" value="10" <?=(!empty($match_data[0]->seat)&& $match_data[0]->seat==10)?'selected="selected"':''?>>10</option>
<option type="hidden" value="11" <?=(!empty($match_data[0]->seat)&& $match_data[0]->seat==11)?'selected="selected"':''?>>11</option>
<option type="hidden" value="12" <?=(!empty($match_data[0]->seat)&& $match_data[0]->seat==12)?'selected="selected"':''?>>12</option>
<option type="hidden" value="13" <?=(!empty($match_data[0]->seat)&& $match_data[0]->seat==13)?'selected="selected"':''?>>13</option>
<option	type="hidden" value="14" <?=(!empty($match_data[0]->seat)&& $match_data[0]->seat==14)?'selected="selected"':''?>>14</option>
</select>
 </form>

						
                            <a class="booking-item"  onclick="submit()" >
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="booking-item-img-wrap">
                                            <img src="<?=base_url();?>img/ride.jpg" alt="Image Alternative text" title="" />
                                         </div>
                                    </div>
                                    <div class="col-md-6" id="filter_id">
                                        <h5 class="booking-item-title"><?=$j->offer_ride_id?></h5>
                                        <p class="booking-item-address"><i class="fa fa-map-marker"></i> <?=$j->pick_up_location?> to <?=$j->drop_off_location?></p>
                                        <ul class="booking-item-features booking-item-features-rentals booking-item-features-sign">
                                           <li rel="tooltip" data-placement="top" title="Available Seats"><i class="fa fa-male"></i><span class="booking-item-feature-sign"><?=$j->seat?></span>
                                        </li>
                                         <li rel="tooltip" data-placement="top" title="Booked Seats"><i class="fa fa-female"></i><span class="booking-item-feature-sign">x 2</span>
                                        </li>
                                      <!--<li rel="tooltip" data-placement="top" title="Call"><i class="fa fa-phone"></i>
										<li rel="tooltip" data-placement="top" title="SMS"><i class="fa fa-envelope"></i>
                                        </li>-->
                                        </ul>
                                    </div>
                                    <div class="col-md-3"><span class="btn btn-primary" >Book Now</span>
                                    </div>
                                </div>
                            </a>
                        </li>
					
                      <?php } ?>
                        
						   </ul> 
                    <div class="row">
                        <div class="col-md-6">
                            
                            <ul class="pagination">
                                <li class="active"><a href="#">1</a>
                                </li>
                                <li><a href="#">2</a>
                                </li>
                                
                                <li class="dots">...</li>
                                <li><a href="#">3</a>
                                </li>
                                <li class="next"><a href="#">Next Page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-right">
                            <p>Not what you're looking for? <a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Try your search again</a>
                            </p>
                        </div>
                    </div>

                </div>
				 <?php } else {?>
				 <div clas="row-fluid"><div class="col-md-8">  <div class="alert alert-danger"><span class="fa fa-exclamation"></span> <span class="strong">No search result found</span></div></div></div>
				  <?php } ?>
            </div>
            <div class="gap"></div>
        </div>