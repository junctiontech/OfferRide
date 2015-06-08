 <?php// print_r($vehicle_data);die;?>
 <div class="container">
 	<h1 class="page-title">Booking History</h1>
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
                                                                      <input type="file" name="..." accept="image/*">
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
       				<li><a href="<?=base_url();?>index.php/profile/userprofile"><i class="fa fa-cog"></i>Settings</a>
       				</li>
       				<li><a href="<?=base_url();?>profile/book_history"><i class="fa fa-clock-o"></i>Booking History</a>
       				</li>

       			</ul>
       		</aside>
       	</div>
 		<div class="col-md-9">
 			<div class="tabbable">
 				<ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
 					<li class="active"><a href="#Offer-ride" data-toggle="tab">Offered Ride</a>
 					</li>
 					<li><a href="#need-ride" data-toggle="tab">Take Ride</a>
 					</li>
 				</ul>
 				<div class="tab-content">
 					<div class="tab-pane fade in active" id="Offer-ride">
 						<div class="panel-group" id="accordion">
 							<?php $seat=0; $seat_a=0; $seat_bo=0; foreach($ride_data as $key=>$r){?>
 							<div class="panel panel-default">
 								<div class="panel-heading">
 									<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?=$key+1?>" >Offer Ride id- <?=$r->offer_ride_id ?> </a></h4>
 								</div>
 								<div class="panel-collapse collapse " id="collapse-<?=$key+1?>">
 									<div class="panel-body table-responsive">

 										<div class="alert alert-info">
 											<span class="btn btn-info btn-xs">Available Seats: <?=$r->seat ?></span> &nbsp; <span class="btn btn-danger btn-xs">Booked Seats : <?=(!empty($offer_book[0]->seats_booked))?$offer_book[0]->seats_booked:''?></span>
 											<span class="btn btn-info  btn-xs "> <i class="fa fa-history"></i><a href="<?=base_url();?>profile/offer/<?=$r->offer_ride_id ?>" class="white">Update Ride</a></span> &nbsp; <span class="btn btn-danger  btn-xs"> <i class="fa fa-times"></i><a class="white" href="<?=base_url();?>profile/cancle_ride/<?=$r->offer_ride_id ?>">Cancel Ride</a></span>
 											<div class="gap gap-small"></div>
 											<dl class="dl-horizontal">
 												<dt>Ride (From -To)</dt>
 												<dd><?=$r->pick_up_location ?> to <?=$r->drop_off_location ?></dd>
 												<dt>Date</dt>
 												<dd><?=$r->pick_up_date ?></dd>
 												<dt>Time</dt>
 												<dd><?=$r->pick_up_time ?></dd>
 											</dl>
 										</div>



 										<table class="table table-bordered table-striped table-booking-history">
 											<thead>
 												<tr>
 													<th>Name</th>
 													<th>No.of Seats Booked</th>
 													<th>Action</th>
 												</tr>
 											</thead>
 											<tbody>
											<?php $a=0; foreach($offer_book as $key=>$g){ $a++;?>
 											<?php if($g->request_status!='cancel'){?>	<tr>
 													<td class="booking-history-title"><?=$g->user_name ?></td>
 													<td class="booking-history-title"><?=$g->seats_booked ?></td>
												<td><?php if($g->request_status=='requested'){  ?> <a class="btn btn-default btn-sm"  onclick="submit_status_accept('<?php echo $a;?>')">Accept</a>  <a class="btn btn-default btn-sm" href="#" onclick="submit_status('<?php echo $a;?>')">Cancel</a><?php } else{ ?><a class="btn btn-info btn-sm" >Accepted</a><?php } ?>
													<form method="post" action="<?=base_url();?>profile/check_status" name="<?php echo $a;?>myform2">
													<input class="form-control" name="ride_id" value="<?=(!empty($g->ride_id))?$g->ride_id:''?>" type="hidden" /></form>
													<form method="post" action="<?=base_url();?>profile/check_status_accept" name="<?php echo $a;?>myform3">
													<input class="form-control" name="ride_id" value="<?=(!empty($g->ride_id))?$g->ride_id:''?>" type="hidden" /></form>
 														
 													</td>
 												</tr>
												<?php } ?>
												
												<?php } ?>
 											</tbody>
 										</table>
 									</div>
 								</div>
 							</div>

 							<?php } ?>

 						</div>

 					</div>
 					<div class="tab-pane " id="need-ride">
 						<div class="panel-group" id="accordion">
						<?php foreach($ride_take as $key=>$t){?>
 							<div class="panel panel-default">
 								<div class="panel-heading">
 									<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-<?=$key+10?>" >Take Ride Id- <?=$t->ride_id ?></a></h4>
 								</div>
 								<div class="panel-collapse collapse " id="collapse-<?=$key+10?>">
 									<div class="panel-body table-responsive">
 										<table class="table table-bordered table-striped table-booking-history ">
 											<thead>
 												<tr>
 													<th>From</th>
 													<th>To</th>
 													<th>Date</th>
 													<th>Time</th>
 													<th>Frequency</th>
 													<th>Status</th>
 													<th>Action</th>
 												</tr>
 											</thead>
 											<tbody>
 												<tr>
 													<td class="booking-history-title"><?=$t->pick_up_location ?></td>
 													<td class="booking-history-title"><?=$t->drop_off_location ?></td>
 													<td class="booking-history-title"><?=$t->date ?></td>
 													<td class="booking-history-title"><?=$t->time ?></td>
 													<td class="booking-history-title"><?=$t->frequency ?></td>
 									<?php if($t->request_status=='requested'){  ?>				<td class="booking-history-title"> <a class="btn btn-primary btn-sm" href="#"><i class="fa  fa-refresh input-icon"></i>Requested</a></td>
 													<td>
 														<a class="btn btn-danger btn-sm" href="<?=base_url();?>profile/delete_ride/<?=$t->ride_id ?>">&nbsp;&nbsp;&nbsp;<i class="fa  fa-trash-o input-icon"></i>Cancel &nbsp;&nbsp;&nbsp; </a>
 													</td><?php } if($t->request_status=='confirm'){ ?><td class="booking-history-title"> <a class="btn btn-success btn-sm" href="#"><i class="fa  fa-smile-o input-icon"></i>Confirmed</a></td>
 													<td>
 														<a class="btn btn-info btn-sm popup-text" href="#small-dialog" data-effect="mfp-zoom-out"><i class="fa  fa-comments input-icon"></i> Feedback</a>
 													</td>
 													<div id="small-dialog" class="mfp-with-anim mfp-hide mfp-dialog">
 														<h4>Your Feedback is Important!</h4>
 														<p>Share your overall experience for next better Share Ride </p>
 														<p>

 															<div class="radio">
 																<label>
 																	<input class="i-radio" type="radio" name="myRadiolist" />Match Expectations</label>
 																</div>
 																<div class="radio">
 																	<label>
 																		<input class="i-radio" type="radio" name="myRadiolist" />Exceed Expectations</label>
 																	</div>	
 																	<div class="radio">
 																		<label>
 																			<input class="i-radio" type="radio" name="myRadiolist" />Below Expectations</label>
 																		</div>		

 																	</p>
 																	<p><a class="btn btn-primary btn-sm" href="#" ><i class="fa  fa-save input-icon"></i> Submit Your Feedback</a></p>
 																</div><?php } if($t->request_status=='cancel'){ ?><td class="booking-history-title"> <a class="btn btn-success btn-sm" href="#"><i class="fa  fa-smile-o input-icon"></i>Cancel</a></td>
 													<td>
 														<a class="btn btn-info btn-sm popup-text"  data-effect="mfp-zoom-out"><i class="fa  fa-comments input-icon"></i> Feedback</a>
 													</td><?php }?>
 												</tr>
 												
 														</tbody>
 													</table>
 												</div>
 											</div>
 										</div>
									<?php } ?>
 								</div>

 							</div>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>
