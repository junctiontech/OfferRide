<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	function __construct() 
	{
								parent::__construct();
								$this->data[]="";
								$this->data['url'] = base_url();
								$this->load->model('mhome');
								//Load html parser
								$this->load->library('parser');
								$this->load->library('session');
								$this->data['base_url']=base_url();
	}
	
	public function index()
	{ 
								$this->parser->parse('include/header',$this->data);
								$this->load->view('home',$this->data);
								$this->parser->parse('include/footer',$this->data);
	}
	public function login_reg()
	{ 
								$this->parser->parse('include/header',$this->data);
								$this->load->view('login_reg',$this->data);
								$this->parser->parse('include/footer',$this->data);
	}
	public function result()
	{ 
								$this->parser->parse('include/header',$this->data);
								if($this->input->post('info')=='f1'){ // print_r($_POST);die;
								$check_data= array(		
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location'),
								'pick_up_date'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick'))),
							    //'seat'=>$this->input->post('seat'),
								'vehicle_mode'=>$this->input->post('vehicle_mode')
								);
								
								$seat=$this->input->post('seat');
								//print_r($_POST);die;
								$this->data['match_data']=$this->mhome->get_rslt_byfilter($check_data,$seat,'offer_ride'); }

								if($this->input->post('info')=='f2'){ // print_r($_POST);die;
								$check_data= array(		
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location'),
								'vehicle_mode'=>$this->input->post('vehicle_mode'),
								'pick_up_date'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick'))),
								'waiting'=>$this->input->post('waiting')
								);
								$seat=$this->input->post('seat');
								$this->data['match_data']=$this->mhome->get_rslt_byfilter($check_data,$seat,'offer_ride'); }
								
								if($this->input->post('paid_mode')){ //print_r($_POST);die;
								$check_data= array(		
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location'),
								'vehicle_mode'=>$this->input->post('vehicle_mode'),
								'pick_up_date'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick'))),
								'paid_mode'=>$this->input->post('paid_mode')
								);
								$seat=$this->input->post('seat');
								$this->data['match_data']=$this->mhome->get_rslt_byfilter($check_data,$seat,'offer_ride'); }
								
								if($this->input->post('music')){ //print_r($_POST);die;
								$check_data= array(		
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location'),
								'vehicle_mode'=>$this->input->post('vehicle_mode'),
								'pick_up_date'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick'))),
								'music'=>$this->input->post('music')
								);
								$seat=$this->input->post('seat');
								$this->data['match_data']=$this->mhome->get_rslt_byfilter($check_data,$seat,'offer_ride'); }
								
								if($this->input->post('Waiting')){ //print_r($_POST);die;
								$check_data= array(		
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location'),
								'vehicle_mode'=>$this->input->post('vehicle_mode'),
								'pick_up_date'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick'))),
								'Waiting'=>$this->input->post('Waiting')
								);
								$seat=$this->input->post('seat');
								$this->data['match_data']=$this->mhome->get_rslt_byfilter($check_data,$seat,'offer_ride'); }
								
								if($this->input->post('frequency')){ //print_r($_POST);die;
								$check_data= array(		
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location'),
								'vehicle_mode'=>$this->input->post('vehicle_mode'),
								'pick_up_date'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick'))),
								'frequency'=>$this->input->post('frequency')
								);
								$seat=$this->input->post('seat');
								$this->data['match_data']=$this->mhome->get_rslt_byfilter($check_data,$seat,'offer_ride'); }
								
								if($this->input->post('company')){ //print_r($_POST);die;
								$check_data= array(		
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location'),
								'vehicle_mode'=>$this->input->post('vehicle_mode'),
								'pick_up_date'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick'))),
								'company'=>$this->input->post('company')
								);
								$seat=$this->input->post('seat');
								$this->data['match_data']=$this->mhome->get_rslt_byfilter($check_data,$seat,'offer_ride'); }
								
								if($this->input->post('smoke')){ //print_r($_POST);die;
								$check_data= array(		
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location'),
								'vehicle_mode'=>$this->input->post('vehicle_mode'),
								'pick_up_date'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick'))),
								'smoke'=>$this->input->post('smoke')
								);
								$seat=$this->input->post('seat');
								$this->data['match_data']=$this->mhome->get_rslt_byfilter($check_data,$seat,'offer_ride'); }
								
								if($this->input->post('ac')){ //print_r($_POST);die;
								$check_data= array(		
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location'),
								'vehicle_mode'=>$this->input->post('vehicle_mode'),
								'pick_up_date'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick'))),
								'ac'=>$this->input->post('ac')
								);
								$seat=$this->input->post('seat');
								$this->data['match_data']=$this->mhome->get_rslt_byfilter($check_data,$seat,'offer_ride'); }

								 if($this->input->post('UserId')){  	
								 redirect('profile/result');
								 }
								$this->load->view('result',$this->data);
								
								
								$this->parser->parse('include/footer',$this->data);
	}
	public function check_result() 
	{
								$check_data= array(		
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location'),
								//'pick_up_time'=>$this->input->post('pick_up_time'),
								'seat'=>$this->input->post('seat'),
								'vehicle_mode'=>$this->input->post('vehicle_mode'),
								);
								
								$match_data=$this->data['match_data']=$this->mhome->get_rslt_byfilter($check_data,'offer_ride');
								//print_r($match_data);die;
								
								redirect('home/result');
	}
	
	public function offer()
	{  
								$this->parser->parse('include/header',$this->data);
								$this->load->view('offer',$this->data);
								$this->parser->parse('include/footer',$this->data);
	}
	
	public function register_user(){
		
								if($this->input->post('UserId')){
									//echo"hj";die;
								$filter=array('id' => $this->input->post('UserId'));
								$data = array(
										'FirstName' => $this->input->post('FirstName'),
										'Email' => $this->input->post('Email'),
										'MobileNo' => $this->input->post('MobileNo'),
										'password' => $this->input->post('password'),
										'Gender' => $this->input->post('Gender'),
										'LicenseNo' => $this->input->post('LicenseNo')
										
										);	
														
									$this->mhome->form_insert('usertable',$data,$filter);
									
									}
									else
									{
											//echo"add";die;
										$data = array(
												'FirstName' => $this->input->post('FirstName'),
												'LastName' => $this->input->post('LastName'),
												'Email' => $this->input->post('Email'),
												'MobileNo' => $this->input->post('MobileNo'),
												'password' => $this->input->post('password'),
												'Gender' => $this->input->post('Gender'),
												'LicenseNo' => $this->input->post('LicenseNo')
											
												
												);	
															
											
											$this->mhome->form_insert('usertable',$data);
											//print_r($_POST);die;
											redirect('home/login_reg');
											
										}
			
			
			
	}
	function login($info=false)
	{
											$data=array(
											'MobileNo'=>$this->input->post('MobileNo'),
											'password'=>$this->input->post('password')
											);
											$row=$this->mhome->login_check('usertable',$data);
											if($row){
											
											$user_data = array(
											'email' => $row->Email,
											'UserId' => $row->UserId,
											'first_name'=> $row->FirstName,
											'last_name'=> $row->LastName,
											'mobile'=>$row->MobileNo
											);
											$this->session->set_userdata('user_data',$user_data);	
											$user_session_data = $this->session->userdata('user_data');
											//print_r($this->session->userdata);die;
											redirect('profile');
					   
										   }else{
											   
											  redirect('home/login_reg');
											  echo"invalid user or password";
											   }
	}
									 
 function reg_login()
	{
					//print_r($data);die;
					
											$data = array(
												'FirstName' => $this->input->post('FirstName'),
												'LastName' => $this->input->post('LastName'),
												'Email' => $this->input->post('Email'),
												'MobileNo' => $this->input->post('MobileNo'),
												'password' => $this->input->post('password'),
												'Gender' => $this->input->post('Gender'),
												'LicenseNo' => $this->input->post('LicenseNo')
											
												
												);	
															
											
											$this->mhome->form_insert('usertable',$data);
					
											$data=array(
											'MobileNo'=>$this->input->post('MobileNo'),
											'password'=>$this->input->post('password')
											);
											//print_r($data);die;
											$row=$this->mhome->login_check('usertable',$data);
											if($row){
											//print_r($row);die;
											$user_data = array(
											'email' => $row->Email,
											'UserId' => $row->UserId,
											'first_name'=> $row->FirstName,
											'last_name'=> $row->LastName
											
											);
											$this->session->set_userdata('user_data',$user_data);	
											$user_session_data = $this->session->userdata('user_data');
											//print_r($this->session->userdata);die;
											redirect('profile/offer');
					   
										   }else{
											   
											  redirect('home/login_reg');
											 // echo"invalid user or password";
											   }
	}	
	
	
	function reg_login_needy()
	{
					//print_r($data);die;
					
											$data = array(
												'FirstName' => $this->input->post('FirstName'),
												'LastName' => $this->input->post('LastName'),
												'Email' => $this->input->post('Email'),
												'MobileNo' => $this->input->post('MobileNo'),
												'password' => $this->input->post('password'),
												'Gender' => $this->input->post('Gender'),
												'LicenseNo' => $this->input->post('LicenseNo')
											
												
												);	
															
											
											$this->mhome->form_insert('usertable',$data);
					
											$data=array(
											'MobileNo'=>$this->input->post('MobileNo'),
											'password'=>$this->input->post('password')
											);
											//print_r($data);die;
											$row=$this->mhome->login_check('usertable',$data);
											if($row){
											//print_r($row);die;
											$user_data = array(
											'email' => $row->Email,
											'UserId' => $row->UserId,
											'first_name'=> $row->FirstName,
											'last_name'=> $row->LastName
											
											);
											$this->session->set_userdata('user_data',$user_data);	
											$user_session_data = $this->session->userdata('user_data');
											//print_r($this->session->userdata);die;
											redirect('profile/home');
					   
										   }else{
											   
											  redirect('home/login_reg');
											 // echo"invalid user or password";
											   }
	}
	
	public function login_offer()
	{ 							
								$this->parser->parse('include/header',$this->data);
								$this->load->view('login_offer',$this->data);
								$this->parser->parse('include/footer',$this->data);
	}
	
	function login_offer_user($info=false)
	{
					//print_r($info);die;
											$data=array(
											'MobileNo'=>$this->input->post('MobileNo'),
											'password'=>$this->input->post('password')
											);
											$row=$this->mhome->login_check('usertable',$data);
											if($row){
											//print_r($row);die;
											$user_data = array(
											'email' => $row->Email,
											'UserId' => $row->UserId,
											'first_name'=> $row->FirstName,
											'last_name'=> $row->LastName
											
											);
											$this->session->set_userdata('user_data',$user_data);	
											$user_session_data = $this->session->userdata('user_data');
											//print_r($this->session->userdata);die;
											redirect('profile/offer');
					   
										   }else{
											   
											  redirect('home/login_reg');
											 // echo"invalid user or password";
											   }
	}
	
	public function ride_offer()
	{ 							
								if($this->input->post('UserId')){  
								$check_data= array(		
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location'),
								//'pick_up_time'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick_up_time'))),
								//'pick_up_date'=>date('Y-m-d H:i:s',strtotime($this->input->post('start'))),
								//'seat'=>$this->input->post('seat'),
								//'vehicle_mode'=>$this->input->post('vehicle_mode'),
								);
								
								$this->data['match_data']=$this->mhome->get_rslt_byfilter($check_data,'offer_ride');
								//print_r($_POST);die;
								
								//if(empty($this->data['match_data'])){  
									
									//redirect('home');
								//}else{
									
								//$this->load->view('result',$this->data);
								//}
								redirect('profile/result',$this->data);
								}
									{  
									$check_data= array(		
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location'),
								//'pick_up_time'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick_up_time'))),
								//'pick_up_date'=>date('Y-m-d H:i:s',strtotime($this->input->post('start'))),
								//'seat'=>$this->input->post('seat'),
								//'vehicle_mode'=>$this->input->post('vehicle_mode'),
								);
								
								$this->data['match_data']=$this->mhome->get_rslt_byfilter($check_data,'offer_ride');
								//print_r($_POST);die;
								
								//if(empty($this->data['match_data'])){  
									
								//	redirect('home');
								//}else{
									
								//$this->load->view('result',$this->data);
								//}
									redirect('home/result',$this->data);
									}
								
	}
	
	 public function login_user_ride()
	{                 	$data = array(
												'pick_up_location' => $this->input->post('pick_up_location'),
												'drop_off_location' => $this->input->post('drop_off_location'),
												'seats_booked' => $this->input->post('seats_booked'),
												'date'=>date('Y-m-d',strtotime($this->input->post('start'))),
												'time'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick_up_time'))),
												'offer_ride_id' => $this->input->post('offer_ride_id'),
												'frequency' => $this->input->post('frequency'),
												);					 
													$this->mhome->form_insert('demo',$data);	
													$this->data['demo_data']=$this->mhome->get_list_byfilter($data,'demo');
													$this->mhome->trunkcate_demo('demo');
													$this->parser->parse('include/header',$this->data);
													$this->load->view('login_user_ride_book',$this->data);
													$this->parser->parse('include/footer',$this->data);
	}
	 public function login_user_ride_check($data=false)
	{										$data=array(
											'MobileNo'=>$this->input->post('MobileNo'),
											'password'=>$this->input->post('password')
											);
											$row=$this->mhome->login_check('usertable',$data);
											if($row){
											$user_data = array(
											'UserId' => $row->UserId,
											'user_name'=> $row->FirstName,
											'mobile_no_request'=> $row->MobileNo,
											'pick_up_location' => $this->input->post('pick_up_location'),
												'drop_off_location' => $this->input->post('drop_off_location'),
												'seats_booked' => $this->input->post('seats_booked'),
												'date'=>date('Y-m-d',strtotime($this->input->post('start'))),
												'time'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick_up_time'))),
												'offer_ride_id' => $this->input->post('offer_ride_id'),
												'frequency' => $this->input->post('frequency')
											);
											
											$this->session->set_userdata('user_data',$user_data);	
											$user_session_data = $this->session->userdata('user_data');
											//print_r($user_data);die;
											$this->mhome->data_ride('confirm_ride',$data,$user_data);	
											redirect('profile/book_history');
								 }else{
											  redirect('home/login_user_ride');
											 // echo"invalid user or password";
											   }
	}

	
    public function logout()
	{
		
											$this->session->unset_userdata($array_items);
											$this->session->sess_destroy();
											redirect('home/login_reg');
		
	}
	
						
						public function filter_ride($table=false,$data=false,$filter_data=false)
						{
							echo"dsasa";die;
							
							}
						
	

}
	


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
