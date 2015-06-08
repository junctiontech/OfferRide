<?php
/* Manage Home Controller */
class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->data['user_data'] = "";	
		$this->load->helper('form');
		$this->load->library('parser');
		$this->load->helper('url');
		$this->load->library('email');
		$this->load->model('home_model');
		$this->load->model('mproperty');
		$this->load->model('madmin');
		$this->data['bodyclass']='index';
		$this->data['title']="";
		$this->data['sub_title']="";
		$this->data['breadcrumb']="HOME";
		$this->load->library('form_validation');
		$this->load->library('session');
		if($this->uri->segment(2)=='resetpassword'){
			$this->parser->parse('include/header_bg1',$this->data);
		}else{
			//$user_id=$this->session->userdata('user_data');
			$user_session_data = $this->session->userdata('user_data');
			
		if($user_session_data==""){
				
			$this->parser->parse('include/header',$this->data);
		}else {
			$usertype=isset($user_session_data['user_type'])?$user_session_data['user_type']:0;
			if($usertype!=3){
				$this->data['user_data'] = $this->session->userdata('user_data');
			$this->parser->parse('include/header',$this->data);
		   }else{
			$this->data['user_data'] = $this->session->userdata('user_data');
			$this->parser->parse('include/header_bg1',$this->data);
		  }
		}
		
		}
		
    }
	
	public function index() {
	/*if($_POST){
	print_r($_POST);exit;
	}*/
	if(isset($_POST['submit'])){
		$data = array(
				'username' => $this->input->post('username') ,
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
				'first_name' =>$this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'type_id' => $this->input->post('type_id'),
				'image'=>'defult.jpg',
				'created_on' => date("Y-m-d")
			
			);
	  $inserted_id=$this->home_model->insertinfo($data);
	  $accredation_data=array(
								'user_id'=>$inserted_id,
								'accredited_status'=>'approved',
								'created_at'=>date("Y-m-d"),
								);
	  $this->madmin->insert_data_return_id($accredation_data,'accredited_user');
	  if($inserted_id){
		$admin_id=$this->utilities->get_value('id','users',array('type_id'=>'1'));
		$activity_data = array('activity_by_id' 		=> $inserted_id,
							   'activity_on_id' 		=>  0,
							   'activity_on_id_type' 	=> 'investor',
							   'activity' 				=> 'Registered ',
							   'activity_text' 			=> 'successfully on tablup.',
								'status' 			=> '0',
								'admin_status' =>'1',
							   'created_at' => date("Y-m-d h:i:s"));	
	/*	$activity_data2 = array('activity_by_id' 		=> $admin_id,
							   'activity_on_id' 		=>  $inserted_id,
							   'activity_on_id_type' 	=> 'investor',
							   'activity' 				=> 'Registered ',
							   'activity_text' 			=> 'on tablup.',
								'status' 			=> '0',
							   'created_at' => date("Y-m-d"));						   	
							//print_r($activity_data);die;
        	$this->utilities->activity($activity_data2);  */
		$this->utilities->activity($activity_data); 
	 
		$this->session->set_userdata('inserted_id', $inserted_id);
		file_get_contents("http://work.eulogik.com/tablup_setup/newsletter_subscribe.php?email=".$this->input->post('email')."&list_id=f08bdd0b89");
		file_get_contents("http://work.eulogik.com/tablup_setup/newsletter_subscribe.php?email=".$this->input->post('email')."&list_id=2dc6ca66c3");
		redirect('mail/account_activation/'.$inserted_id);
	
		echo 1;	
	  }else{
		echo 0;
	  }
	 
	       
	
	  }
			$filter=array('is_featured '=>'Yes','investment_status'=>'progress');
			$this->data['featured_property_list'] = $this->mproperty->featured_property_list($filter);
		//	print_r(count($this->data['featured_property_list']));die;
			//print_r($this->data['featured_property_list']);
	      $this->parser->parse('home',$this->data);
		  
	}

		



	public function login(){
	//print_r($_POST);die;
	$filter=array('email'=>$this->input->post('email'),
	                   'facebook_id !='=>'');
	$facebook_login = $this->home_model->check_login_facebook($filter);
	/*if($facebook_login==false){*/

		$data = array('email'=>$this->input->post('email'),
		              'password'=>md5($this->input->post('password')));
			
		$row = $this->home_model->login($data);	
		//print_r($row);die;
		if($row){
		     if($row->type_id==3 || $row->type_id==1 || $row->type_id==2 || $row->type_id==4){
				//echo $row->active_status;exit;
				if($row->active_status=='active'){
					//print_r($this->input->post('refferel'));die;
						if($this->input->post('refferel')){
						$user_data = array(
							'email' => $row->email,
							'user_id' => $row->id,
							'first_name'=> $row->first_name,
							'last_name'=> $row->last_name,
							'street1'=> $row->street1,
							'gender'=> $row->gender,
							'user_type'=>$row->type_id,
							'logged_in' => TRUE
							);
							$this->session->set_userdata('user_data',$user_data);	
							$user_session_data = $this->session->userdata('user_data');
							
							$filter=array('user_id'=>$user_session_data['user_id']);
		                    $accredited_user = $this->mproperty->get_detail_byfilter('accredited_user',$filter);
							 if($accredited_user==1){
								redirect('invesment_opp/'.$this->input->post('refferel'));
							 }else{
							 
								redirect('invesment_opp/create_accredited_user/'.$this->input->post('id'));
								
						      }
							  }else{
							
							//$row = $login->row();	 

							$last_login = array('id' => $row->id,
							                    'last_login' =>$row->last_login );

							$this->session->set_userdata('user_login',$last_login);

							$user_data = array(
							'email' => $row->email,
							'user_id' => $row->id,
							'first_name'=> $row->first_name,
							'last_name'=> $row->last_name,
							'user_type'=>$row->type_id,
							'street1'=> $row->street1,
							'user_type'=>$row->type_id,
							'gender'=> $row->gender,
							'logged_in' => TRUE
							);
							$this->session->set_userdata('user_data',$user_data);	

							$user_login = array('id' => $row->id,
							                    'last_login' =>date('Y-m-d H:i:s') );
							//print_r($user_login);die;
							$this->db->where('id',$row->id);
							$this->db->update('users',$user_login);	

							//return $row;
								$flag=$this->session->userdata('user_login');
								// print_r($flag);die;
								
									$flag['id'];
									$filter=array('user_id'=>$flag['id']);
									
									 $accredited_user = $this->mproperty->get_detail_byfilter('accredited_user',$filter);
									// print_r($accredited_user);die;
								  if($flag['last_login']=='0000-00-00 00:00:00') 
								{ 	
								redirect("user_dash/user_profile/");
								}else{
										if($accredited_user==1){
											redirect("user_dash");
										}else{
				
												redirect("user_dash/user_profile/");					
		                                       }
								
								}
						}
				}else{
				//print_r($login);die;
				$this->session->set_flashdata('success_message','error');
				$this->session->set_flashdata('text','kindly activate  your account first.');
				redirect('home');
				}
				}else {
				$this->session->set_flashdata('success_message','error');
				$this->session->set_flashdata('text','The email/password you entered is incorrect. Please try again.');
				redirect('home');
				}
				}else {
				$this->session->set_flashdata('success_message','error');
				$this->session->set_flashdata('text','The email/password you entered is incorrect. Please try again.');
				redirect('home');
			}
		/*}else{
		
		   $this->session->set_flashdata('success_message','error');
			$this->session->set_flashdata('text','You Have logged in with facebook last time kindly login with facebook.');
			redirect('home');
		}*/
				  
   }					  
	
	
	public function checkEmail(){
		$duplicate=$this->common_model->getRow("user","email",$_POST['email']);
		if($duplicate){
		echo "false";
		}else{
		echo "true";
		}
	}
	public function activate($key=false,$source=false){
	
		$flag = $this->home_model->activation($key);
		
		if($flag){
			$message = 'Your account has been activated successfully.';
			$message_type = "succcess";
		} else {
			$message = 'Your account is already activated.';
			$message_type = "warning";
		}	
			
		if($flag==-1) {
			$message = "Invalid activation key.";
			$message_type = "error";
		}	
			
		$this->session->set_flashdata('message_type', $message_type);	
		$this->session->set_flashdata('text', $message);
		redirect('home/index/'.$source);		
		
	}
	
	public function logout(){
		
		
		/*$user_data = array(
				   'email' => '',
				   'user_id' =>'',
                   'logged_in' => FALSE
               );
			   		
		$this->session->unset_userdata($user_data);
		$this->session->sess_destroy();*/
		require_once 'src/facebook.php';
		// Create our Application instance (replace this with your appId and secret).
		$facebook = new Facebook(array(
		'appId'  => '507976149331660',
		'secret' => 'b8a71366c74a7f1d8ce703b8be2ea0ac',
		));
		// Get User ID
		$user = $facebook->getUser();
		
		//$array_items = array('email' => '', 'user_id' => '' ,'first_name' =>'','user_type' =>'');

		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		//$this->session->unset_userdata('user_data',$user_data);
		if(!empty($user)) {
			
		$logoutUrl = 'https://www.facebook.com/logout.php?next=http://work.eulogik.com/tablup_setup/home&access_token='.$facebook->getAccessToken();
		$facebook->destroySession();
		//session_destroy();  
		
		redirect($logoutUrl);
		}else{
		redirect('home');
		}
		redirect('home');
		
	}
	/* function to send email */
function forget_password($admin_check=false)
	{
	
		if($this->input->post('submit'))
		{
			$info=$this->madmin->get_detail_by_table('users',array('email'=>$this->input->post('email')));
		}
		if($info)
		{
		
		$email=$this->input->post('email');
		$result=$this->madmin->get_detail_by_table('users',array('email'=>$email));
		$account_activation_key=md5($result[0]->email);
		$this->load->helper('url');
		$config['mailtype'] = 'html';	
		$config['protocol'] = 'sendmail';
		$this->email->initialize($config);
		$this->email->from('mail@tablup.com', 'admin');
		$this->email->to($email); 
		$this->email->subject('tableup :: Password Reset Request ');
		$this->email->message("We've recieved a password reset request. Ignore if you've not sent it.<a href='".base_url()."home/resetpassword?key=".$account_activation_key."'>Reset your password here</a>"); 
		$this->email->send();
		$this->email->print_debugger();
		$this->session->set_flashdata('success_message', 'success');	
		$this->session->set_flashdata('text', 'Kindly check your mail for reset your password');
		}
		else{
		$this->session->set_flashdata('success_message', 'success');	
		$this->session->set_flashdata('text', 'Email id not registered with us.');
		}
		
		if($admin_check){
				$this->session->set_flashdata('text', '<div class="alert alert-error">Email id not registered with us.</div>');
				redirect('admin');
			}else{
						redirect('home');
				}
		
		
	}
	function resetpassword()
	{
		if($this->input->post('submit')){
			
			$msg=$this->madmin->update_info_by_table_name('users',array('password'=>md5($this->input->post('password'))),array('id'=>$this->input->post('id'),'email'=>$this->input->post('email')));
			$activity_data = array('activity_by_id' 		=> $this->input->post('id'),
							   'activity_on_id' 		=>  $this->input->post('id'),
							   'activity_on_id_type' 	=> 'investor',
							   'activity' 				=> 'reset ',
							   'activity_text' 			=> 'your password successfully.',
								'status' 			=> '0',
							   'created_at' => date("Y-m-d"));		
							//print_r($activity_data);die;
        $this->utilities->activity($activity_data);  
			if($msg){
				$this->session->set_flashdata('message_type', 'success');	
				$this->session->set_flashdata('text', 'Password reset successfully kindly login with your login credentials ');
			}else{
				$this->session->set_flashdata('message_type', 'success');	
				$this->session->set_flashdata('text', 'oops Some error occurred please try again later');
			}
			redirect('home');
		}
		if($this->input->get_post('key')){
			$result=$this->home_model->check_user(array('md5(email)'=>$this->input->get_post('key')));
			if($result[0]->id){
				$this->data['user_info']=$result;
				$this->parser->parse('change_password',$this->data);
				$this->parser->parse('include/footer_new',$this->data);
			}else{
				$this->session->set_flashdata('message_type', 'success');	
				$this->session->set_flashdata('message', 'Link changed');
				redirect('home');
			}
		}else{
				$this->session->set_flashdata('message_type', 'success');	
				$this->session->set_flashdata('message', 'Invalid Link');
				redirect('home');
			}
		
	}
	

	
}

?>
