<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_functions extends CI_Controller {

	 /*
	 # Programmer :
	 # Common_functions controller.
	 */
	function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->load->library('parser');
		$this->load->model('mhome');
		$this->data['base_url']=base_url();
	}
	

	public function check_email($edit_mode=false)
	{//secho"dfgd";die;
		$email = $this->input->post('email');
		//print_r($email);die;
	
		$this->utilities->check_email($email,$edit_mode);
		
	}
	
	public function check_mobile($edit_mode=false)
	{
		$mobile = $this->input->post('mobile');
		//print_r($mobile);die;
	//alert("hi");
		$this->utilities->check_mobile($mobile,$edit_mode);
		
	}
	
	
	public function check_license($edit_mode=false)
	{
		$license = $this->input->post('license');
		//print_r($mobile);die;
	//alert("hi");
		$this->utilities->check_license($license,$edit_mode);
		
	}
	
	
	public function check_email_needy($edit_mode=false)
	{
		$email = $this->input->post('email');
		//print_r($email);die;
	
		$this->utilities->check_email_needy($email,$edit_mode);
		
	}
	
	public function check_mobile_needy($edit_mode=false)
	{
		$mobile = $this->input->post('mobile');
		//print_r($mobile);die;
	//alert("hi");
		$this->utilities->check_mobile_needy($mobile,$edit_mode);
		
	}
		function match_currentpass(){
//print_r($_POST);die;
$pass = $this->input->post('pass');
$epass = $this->input->post('epass');
//$input_password=md5($this->input->post('epass'));
if($pass!=$epass){
echo 1;
}else{
echo 2;
}
}


function add_user_profiledetail(){
	    //print_r($_POST);die;
			if(isset($_POST['image'])){
			
				if($_FILES['files']['name']){
					if(move_uploaded_file($_FILES['files']['tmp_name'],"user_uploads/".$_FILES['files']['name'])){
						$filename = $_FILES['files']['name'];
						//print_r($filename);die;
						$info = array("image"=>$filename);
					}
				}else{
					$filename = $this->input->post("image_id");
				$info = array("image"=>$filename);
				}
				if($_FILES['files']['name']!=''){				
					$info = array("image"=>$filename);
				}	
			}
			else{
				redirect('profile/user_profile');
			}
	   }
	   
	   
	   
	   function check_halt($row=false){
								//print_r($_POST);die;
								// $waiting = $this->input->post('waiting','waiting');
								  $drop_off_location = $this->input->post('drop_off_location','drop_off_location');
								   $pick_up_location = $this->input->post('pick_up_location','pick_up_location');
									//$this->data['row'] =	$this->utilities->check_halt($pick_up_location,$drop_off_location,'offer_ride');
									$this->data['row'] = $this->mhome->($pick_up_location,$drop_off_location,'offer_ride');
								print_r($this->data['row']);die;
								$this->load->view('filter',$this->data);
								
}


	


	
}	
?>
