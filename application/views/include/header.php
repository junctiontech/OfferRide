        <?php //$user_session_data = $this->session->userdata('user_data');

//print_r($user_data);die;
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Offer Ride</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Share ride,car pooling, Ride, need a ride" />
    <meta name="description" content="Share Ride is for offering ride & need a ride ">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="<?=base_url();?>css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url();?>css/font-awesome.css">
    <link rel="stylesheet" href="<?=base_url();?>css/icomoon.css">
    <link rel="stylesheet" href="<?=base_url();?>css/styles.css">
    <link rel="stylesheet" href="<?=base_url();?>css/mystyles.css">
	 <link rel="stylesheet" href="<?=base_url();?>css/datepicker.css">
	 <link rel="shortcut icon" href="<?=base_url();?>/img/junctionerplogo.png">
    <script src="<?=base_url();?>js/modernizr.js"></script>

<script src="<?=base_url()?>/js/jquery-1.7.2.js"></script>
<script src="<?=base_url()?>/js/script.js"></script>
<script src="<?=base_url()?>/js/common_functions.js"></script>
</head>

<body>

    
    <div class="global-wrap">
        <header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row"> 
                        <div class="col-md-3"> <?php if(!empty($user_data)){//print_r($user_data);?>
                            <a class="logo" href="<?=base_url();?>profile/home">
                                <img src="<?=base_url();?>img/2.png" alt="Image Alternative text" title="Image Title" />
                            </a> <?php }else{?>
								<a class="logo" href="<?=base_url();?>">
                                <img src="<?=base_url();?>img/2.png" alt="Image Alternative text" title="Image Title" />
								</a> 
							<?php }?>
                        </div>
                        <div class="col-md-3 col-md-offset-2">
							
                        </div>
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                   
                                    
                                    
                                    <?php if(!empty($user_data)){//print_r($user_data);?>
										<li><a href="<?=base_url();?>profile/offer"><span><i class="fa fa-rocket"></i> Offer Ride</span></a>
                                    </li>
                                      <li style="text-transform: capitalize;"><a href="<?=base_url();?>profile/userprofile"><span><i class="fa fa-user"></i> Hi <?=$user_profile[0]->FirstName?> ! </span></a>
                                    </li>
                                   <li><a href="<?=base_url();?>home/logout"><span><i class="fa fa-power-off"></i> Logout</span></a>
                                    </li>
                                    <?php }else{?>
									
										<li><a href="<?=base_url();?>home/login_offer"><span><i class="fa fa-rocket"></i> Offer Ride</span></a>
                                    </li>
										      <li><a href="<?=base_url();?>home/login_reg"><span><i class="fa fa-user"></i> Login/Register</span></a>
                                    </li>
										<?php }?>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </header>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAthk0c5HirOODlQId3N_jHXWPoJcB9an4&libraries=places"></script>
	<script>
        //For TextBox Search..............
        google.maps.event.addDomListener(window, 'load', function () {
            var places = new google.maps.places.Autocomplete(document.getElementById('txtFrom'));
            google.maps.event.addListener(places, 'place_changed', function () {
                var place = places.getPlace();
            });
            var places1 = new google.maps.places.Autocomplete(document.getElementById('txtTo'));
            google.maps.event.addListener(places1, 'place_changed', function () {
                var place1 = places1.getPlace();
            });
			var places2 = new google.maps.places.Autocomplete(document.getElementById('txtHalt'));
            google.maps.event.addListener(places1, 'place_changed', function () {
                var place2 = places2.getPlace();
            });
        });

        function calculateRoute(rootfrom, rootto) {
			
            // Center initialized to Naples, Italy
            var myOptions = {
                zoom: 10,
                center: new google.maps.LatLng(40.84, 14.25),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            // Draw the map
            var mapObject = new google.maps.Map(document.getElementById("DivMap"), myOptions);

            var directionsService = new google.maps.DirectionsService();
            var directionsRequest = {
                origin: rootfrom,
                destination: rootto,
                travelMode: google.maps.DirectionsTravelMode.DRIVING,
                unitSystem: google.maps.UnitSystem.METRIC
            };
            directionsService.route(
        directionsRequest,
        function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                new google.maps.DirectionsRenderer({
                    map: mapObject,
                    directions: response
                });
            }
            else
                $("#lblError").append("Unable To Find Root");
        }
    );
        }


        $(document).ready(function () {
             /** Added section ************************************/
           $( "#txtTo" ).bind( "blur", function( event ) {
			 if( $("#txtFrom").val()!='' ) {
				calculateRoute($("#txtFrom").val(),$("#txtTo").val());
			}
			});

				   $( "#txtFrom" ).bind( "blur", function( event ) {
			 if( $("#txtTo").val()!='' ) {
				calculateRoute($("#txtFrom").val(),$("#txtTo").val());
			}
			});
    /** Added section ************************************/
        });
    </script>