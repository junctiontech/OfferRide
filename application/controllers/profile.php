<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	
	function __construct() 
	{
								parent::__construct();
								$this->data['user_data']="";
								$this->data['url'] = base_url();
								$this->load->model('mhome');
								//Load html parser
								$this->load->library('parser');
								$this->load->library('session');
								$this->data['base_url']=base_url();
	}
	
	public function index()
	{
								$this->data['user_data']=$this->session->userdata('user_data');
								$userdata=$this->session->userdata('user_data');
								//print_r($userdata['UserId']);die;
								$filter=array('UserId' => $userdata['UserId']);
								$this->data['user_profile'] = $this->mhome->get_list_byfilter($filter,'usertable');
								$this->data['vehicle_data']=$this->mhome->get_list_byfilter($filter,'vehicle');
								// print_r($this->data['user_profile']);die;
								$this->parser->parse('include/header',$this->data);
								$this->load->view('userprofile',$this->data);
								$this->parser->parse('include/footer',$this->data);
	}
	
	public function home()
	{
								$this->data['user_data']=$this->session->userdata('user_data');
								$userdata=$this->session->userdata('user_data');
								//print_r($userdata['UserId']);die;
								$filter=array('UserId' => $userdata['UserId']);
								$this->data['user_profile'] = $this->mhome->get_list_byfilter($filter,'usertable');
								$this->data['vehicle_data']=$this->mhome->get_list_byfilter($filter,'vehicle');
								// print_r($this->data['user_profile']);die;
								$this->parser->parse('include/header',$this->data);
								$this->load->view('home_user',$this->data);
								$this->parser->parse('include/footer',$this->data);
	}
	
	public function offer($offerid=false)
	{  
								$this->data['user_data']=$this->session->userdata('user_data');
								$userdata=$this->session->userdata('user_data');
								$filter=array('UserId' => $userdata['UserId']);
								$this->data['user_profile'] = $this->mhome->get_list_byfilter($filter,'usertable');
								$offer_id=array('offer_ride_id' => $offerid);
								$offer_data=$this->data['offer_data']=$this->mhome->get_offer_byfilter($offer_id,'offer_ride');
								$this->parser->parse('include/header',$this->data);
								$this->load->view('offer',$this->data);
								$this->parser->parse('include/footer',$this->data);
	}
	
	function offer_ride()
	{
								if($this->input->post('offer_ride_id')){
								//echo"hj";die;
								$filter=array('offer_ride_id' => $this->input->post('offer_ride_id'));
								//print_r(date('Y-m-d',strtotime($this->input->post('start'))));die;
								$data = array(
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location'),
								'halt_location'=>$this->input->post('halt_location'),
								'pick_up_date'=>date('Y-m-d',strtotime($this->input->post('pick'))),
								'pick_up_time'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick_up_time'))),
								'seat'=>$this->input->post('seat'),
								'paid_mode'=>$this->input->post('paid_mode'),
								'vehicle_mode'=>$this->input->post('vehicle_mode'),
								'ac'=>$this->input->post('ac'),
								'mode'=>$this->input->post('mode'),
								'smoke'=>$this->input->post('smoke'),
								'music'=>$this->input->post('music'),
								'company'=>$this->input->post('company'),
								'waiting'=>$this->input->post('waiting'),
								'UserId'=>$this->input->post('UserId'),
								'halt_minute'=>$this->input->post('halt_minute'),
								'vehicle_company'=>$this->input->post('vehicle_company'),
								'vehicle_model'=>$this->input->post('vehicle_model'),
								'frequency'=>$this->input->post('frequency'));	
								$this->mhome->form_insert('offer_ride',$data,$filter);
								
								}
								else{
								$data = array(
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location'),
								'halt_location'=>$this->input->post('halt_location'),
								'pick_up_date'=>date('Y-m-d',strtotime($this->input->post('pick'))),
								'pick_up_time'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick_up_time'))),
								'seat'=>$this->input->post('seat'),
								'paid_mode'=>$this->input->post('paid_mode'),
								'vehicle_mode'=>$this->input->post('vehicle_mode'),
								'ac'=>$this->input->post('ac'),
								'mode'=>$this->input->post('mode'),
								'smoke'=>$this->input->post('smoke'),
								'music'=>$this->input->post('music'),
								'company'=>$this->input->post('company'),
								'waiting'=>$this->input->post('waiting'),
								'UserId'=>$this->input->post('UserId'),
								'halt_minute'=>$this->input->post('halt_minute'),
								'vehicle_company'=>$this->input->post('vehicle_company'),
								'vehicle_model'=>$this->input->post('vehicle_model'),
								'frequency'=>$this->input->post('frequency'));	
								$this->mhome->form_insert('offer_ride',$data);	
								
								}
								
								redirect('profile/book_history');
	}
				   
	public function update_offerride($offerid)
	{
								$offer_id=array('offer_ride_id' => $offerid);
								$offer_data=$this->data['offer_data']=$this->mhome->get_offer_byfilter($offer_id,'offer_ride');
								//print_r($offer_data);die;
								redirect('profile/offer');
	}
	
	public function userprofile() 
						{    	
								$userdata=$this->session->userdata('user_data');
								$filter=array('UserId' => $userdata['UserId']);
								$this->data['user_profile'] = $this->mhome->get_list_byfilter($filter,'usertable');
								$this->data['user_data']=$this->session->userdata('user_data');
								$this->data['vehicle_data']=$this->mhome->get_list_byfilter($filter,'vehicle');
								$this->parser->parse('include/header',$this->data);
								$this->load->view('userprofile',$this->data);
								$this->parser->parse('include/footer',$this->data);
	}
	
	public function book_history()
	{  
								$userdata=$this->session->userdata('user_data');
								$this->data['user_data']=$this->session->userdata('user_data');
								$filter=array('UserId' => $userdata['UserId']);
								$this->data['user_profile'] = $this->mhome->get_list_byfilter($filter,'usertable');
								$offer_filter=$this->data['ride_data']=$this->mhome->get_list_byfilter($filter,'offer_ride');
								$offer_id_ride=array('offer_ride_id' => (!empty($offer_filter[0]->offer_ride_id))?$offer_filter[0]->offer_ride_id:'');
								
								$this->data['offer_book']=$this->mhome->get_offer_ride_byfilter($offer_id_ride,'confirm_ride');
								//print_r($this->data['offer_book']);die;
								$this->data['ride_take']=$this->mhome->get_list_byfilter($filter,'confirm_ride');
								$this->parser->parse('include/header',$this->data);
								$this->load->view('book_history',$this->data);
								$this->parser->parse('include/footer',$this->data);
	}
	
	public function update_user()
	{
								$filter=array('UserId' => $this->input->post('UserId'));
		if($this->input->post('info'))
		{
								$data = array(
								'FirstName' => $this->input->post('FirstName'),
								'LastName' => $this->input->post('LastName'),
								'Email' => $this->input->post('Email'),
								//'password' => $this->input->post('password'),
								'MobileNo' => $this->input->post('MobileNo'),
								'LicenseNo' => $this->input->post('LicenseNo'),
								'country' => $this->input->post('country'),
								'city' => $this->input->post('city'),
								'address' => $this->input->post('address'),
								'zip' => $this->input->post('zip'),
								'Gender' => $this->input->post('Gender'));	
		}
		else
		{
								$data = array('password' => $this->input->post('password'));	
		}					
								$this->mhome->form_insert('usertable',$data,$filter);
								redirect('profile/index');
		
	}
		
	public function register_vehicle()
	{
								$data = array(
								'vehicle_type' => $this->input->post('vehicle_type'),
								'vehicle_make' => $this->input->post('vehicle_make'),
								'vehicle_model' => $this->input->post('vehicle_model'),
								'UserId' => $this->input->post('UserId'),
								'vehicle_no' => $this->input->post('vehicle_no'));	
								$this->mhome->form_insert('vehicle',$data);
								//print_r($_POST);die;
								redirect('profile/userprofile');
	}
		
	public function cancle_ride($filter=false)
	{
								$this->mhome->delete_byfilter($filter,'offer_ride');
								redirect('profile/book_history');

	}
		
	public function delete_user($userid=false)
	{
								$this->mhome->delete_user_byfilter($userid);
								redirect('home/logout');
	}
	
	public function delete_vehicle($vehicle_id=false)
	{ 
								$this->mhome->delete_vehicle_byfilter($vehicle_id);
								redirect('profile/userprofile');
	}
	
	public function delete_ride($ride_id=false)
	{ 
								$this->mhome->delete_ride_byfilter($ride_id);
								redirect('profile/book_history');
	}
	
	public function do_upload($userid=false)
	{							$config['upload_path'] = './uploads/';
								$config['allowed_types'] = 'gif|jpg|png';
								$config['max_size']	= '100';
								$config['max_width']  = '1024';
								$config['max_height']  = '768';

								$this->load->library('upload', $config);

								if ( ! $this->upload->do_upload())
								{
									$error = array('error' => $this->upload->display_errors());

									$this->load->view('upload_form', $error);
								}
								else
								{
									$data = array('upload_data' => $this->upload->data());

									$this->load->view('upload_success', $data);
								}
	}
	
	
	public function result()
	{  							//print_r($check_data);die;
								$this->data['user_data']=$this->session->userdata('user_data');
								$userdata=$this->session->userdata('user_data');
								//print_r($userdata['UserId']);die;
								$filter=array('UserId' => $userdata['UserId']);
								$this->data['user_profile'] = $this->mhome->get_list_byfilter($filter,'usertable');
								$this->parser->parse('include/header',$this->data);
								
								$check_data= array(		
								'pick_up_location'=>$this->input->post('pick_up_location'),
								'drop_off_location'=>$this->input->post('drop_off_location')
								//'pick_up_date'=>date('Y-m-d H:i:s',strtotime($this->input->post('start'))),
							    //'seat'=>$this->input->post('seat'),
								//'vehicle_mode'=>$this->input->post('vehicle_mode')
								);
								
								$this->data['match_data']=$this->mhome->get_rslt_byfilter($check_data,'offer_ride');
								//print_r($this->data['match_data']);die;
								
								//if(empty($this->data['match_data'])){  
									
									//redirect('home');
								//}else{
									
								$this->load->view('result_user',$this->data);
								//}
								$this->parser->parse('include/footer',$this->data);
	}
	
	function ride_login($info=false)
	{						//	print_r();die;
								$this->parser->parse('include/header',$this->data);
								$this->load->view('login_ride',$this->data);
								$this->parser->parse('include/footer',$this->data);
								
								
	}
	
	function submit_ride_login($info=false)
	{
								$data = array(
												'UserId' => $this->input->post('UserId' ),
												'pick_up_location' => $this->input->post('pick_up_location'),
												'drop_off_location' => $this->input->post('drop_off_location'),
												'seats_booked' => $this->input->post('seats_booked'),
												'user_name' => $this->input->post('user_name'),
												'date'=>date('Y-m-d',strtotime($this->input->post('start'))),
												'time'=>date('Y-m-d H:i:s',strtotime($this->input->post('pick_up_time'))),
												'offer_ride_id' => $this->input->post('offer_ride_id'),
												'frequency' => $this->input->post('frequency'),
												'mobile_no_request' => $this->input->post('mobile'));	
															// print_r();die;
											
											$this->mhome->form_insert('confirm_ride',$data);	
								redirect('profile/book_history');
								
	}
	
	
	function check_status($filter=false)
	{						
									$filter = array('ride_id' => $this->input->post('ride_id' ));
									//print_r($filter);die;
									$data = array('request_status' => 'cancel' );
									$offer_data=$this->data['offer_data']=$this->mhome->update_ride_status_byfilter($filter,$data,'confirm_ride');
									redirect('profile/book_history');
	}
	
	function check_status_accept($filter=false)
	{								//print_r($filter);die;
									$filter = array('ride_id' => $this->input->post('ride_id' ));
									$data = array('request_status' => 'confirm' );
									$offer_data=$this->data['offer_data']=$this->mhome->update_ride_status_byfilter($filter,$data,'confirm_ride');
									redirect('profile/book_history');
	}
	
	
	
}
	
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>
