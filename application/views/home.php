 <?php //print_r($user_profile[0]->UserId);die; ?>
 <div class="top-area show-onload">
            <div class="bg-holder full">
                <div class="bg-front full-height bg-front-mob-rel">
                    <div class="container full-height">
                        <div class="rel full-height">
							<div class="search-tabs search-tabs-bg search-tabs-bg search-tabs-bottom ">
                        <!--<h1>Find Your Perfect Trip</h1>-->
                        <div class="tabbable">
                           <!-- <ul class="nav nav-tabs" id="myTab">
                                <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-car"></i> <span >Need Ride</span></a>
                                </li>
                               <!-- <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-plane"></i> <span >Offer Ride</span></a>
                                </li>-->
                             <!--</ul>-->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab-1">
                                    <h2 class="searchh">Search and Book A Ride</h2> 
                                  <form method="post"  action="<?=base_url();?>home/result"  >
								  <input type="hidden" value="<?=isset($user_profile)?$user_profile[0]->UserId:''?>" name="UserId">
														<input type="hidden" value="f1" name="info">
                                        <div class="row">
                                            <div class="col-md-12">
											<div id="DivMap" style="background-image:url(<?=base_url();?>img/map2.jpg);">
												</div>
											<div class="gap-small"></div>	
                                                <div class="row">
													  
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                            <label class="white">Pick-up Location</label>
                                                            <input  class="form-control" type="text" id="txtFrom" name="pick_up_location" required="required" placeholder="City, Airport" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                            <label class="white">Drop-off Location</label>
                                                            <input class="form-control" type="text" id="txtTo" name="drop_off_location" required="required" onblur="calculateRoute()" placeholder="City, Airport"  />
                                                        </div>
                                                    </div>
                                                  
                                                </div>
                                            </div>
										</div>	
                                     <div class="row">
                                        <div class="col-md-12">
										<div class="row">
										 <div class="col-md-3">
                                                <div class="input-daterange" data-date-format="M d, D">
                                                    
                                                            <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                <label class="white">Pick-up Date</label>
                                                                <input class="form-control" name="pick"  type="text" type="text" placeholder="Mon/Date/Year" required="required" id="dp1"  id="DtChkIn"  />
                                                            </div>
                                                 </div>
                                            </div>
				

                                                     <div class="col-md-3">
                                         
                                                            <div class="form-group form-group-lg form-group-select-plus">
                                                                    <label class="white">Seats</label>
																		<select class="form-control " name="seat" required="required">
                                                                        <option selected="selected" value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option  value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                        <option value="6">6</option>
                                                                        <option value="7">7</option>
                                                                        <option value="8">8</option>
                                                                        <option value="9">9</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                        <option value="13">13</option>
                                                                        <option value="14">14</option>
                                                                    </select>
                                                                </div>
                                                        </div>      
										 
														<div class="col-md-6">
                                                             <div class="form-group form-group-md">
                                                            <label class="white"> Vehicle Mode</label>
															<div class="radio-inline radio-small">
                                                                <label class="white">
                                                                    <input class="i-radio" type="radio" name="vehicle_mode" 
																	value="2 Wheeler"  />2 Wheeler</label>
                                                            </div>
                                                            <div class="radio-inline radio-small">
                                                                <label class="white">
                                                                    <input class="i-radio" type="radio" name="vehicle_mode" 
																	value="3 Wheeler" />3 Wheeler</label>
                                                            </div>
                                                            <div class="radio-inline radio-small">
                                                                <label class="white">
                                                                    <input class="i-radio" type="radio" name="vehicle_mode" 
																	value="4 Wheeler" />4 Wheeler</label>
                                                            </div>
														 </div>		 
														
                                                        </div>
												</div>
										</div>
										</div>
                                        <button class="btn btn-primary btn-lg" type="submit">Search </button>
									</form> 
									
									
                                </div>
                              
                             </div>
                        </div>
                    </div><!--Search tabs div closed-->
				 </div>
                    </div>
                </div>
                <div class="bg-img hidden-sm hidden-sm hidden-xs" style="background-image:url(<?=base_url();?>img/bg4.jpg);"></div>
                <div class="bg-mask hidden-sm"></div>
            </div>
        </div>
   <div class="container hidden-sm hidden-md hidden-lg hidden-xs">
            <div class="gap"></div>
            <h2 class="text-center mb20">About</h2>
            <div class="row row-wrap">
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="<?=base_url();?>img/800x600.png" alt="Image Alternative text" title="lack of blue depresses me" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Best Travel Agent</h4>
                            <p class="thumb-desc">Consectetur diam dignissim aptent augue maecenas ridiculus aliquam</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="<?=base_url();?>img/400x300.png" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Best Price Guarantee</h4>
                            <p class="thumb-desc">Suspendisse vulputate etiam convallis aptent justo aptent senectus</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="<?=base_url();?>img/800x600.png" alt="Image Alternative text" title="Upper Lake in New York Central Park" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Best Destinations</h4>
                            <p class="thumb-desc">Quis volutpat vel at mus ipsum fames habitant</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="<?=base_url();?>img/800x600.png" alt="Image Alternative text" title="people on the beach" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Combine & Save</h4>
                            <p class="thumb-desc">Montes ullamcorper venenatis nullam feugiat dui eros himenaeos</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div>
                                           
          