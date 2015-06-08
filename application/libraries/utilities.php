<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

	/**
	
	Utilities : Utilities Class for customization function
	*/
	
class Utilities extends CI_Controller {

	public function __construct() {
			 # parent::__construct();
			$this->data['title'] = 'tableup';
			
			$ci =& get_instance();
		
			}
		
	 public function check_email($email,$edit_mode=false){
		
			if($email=='')
				return 1;
			$ci = & get_instance();
			
			$query = $ci->db->get_where('usertable',array('Email' => $email));
			$result=$query->Result();
			$id=isset($result[0]->id)?$result[0]->id:'';
			if($query->num_rows()>0){
				 	
					if($id==$edit_mode){
							return 1;
						}else{
								echo "<div class='alert alert-error' >Email id already registered with us.</div>";			
							}
				
			}	
			else{
			
					echo 1;
			}		
		}
		
		
		public function check_mobile($mobile,$edit_mode=false){
		
			if($mobile=='')
				return 1;
			$ci = & get_instance();
			
			$query = $ci->db->get_where('usertable',array('MobileNo' => $mobile));
			$result=$query->Result();
			$id=isset($result[0]->id)?$result[0]->id:'';
			if($query->num_rows()>0){
				 	
					if($id==$edit_mode){
							return 1;
						}else{
								echo "<div class='alert alert-error' >Mobile number is already registered with us.</div>";			
							}
				
			}	
			else{
			
					echo 1;
			}		
		}
		
		public function check_license($license,$edit_mode=false){
		
			if($license=='')
				return 1;
			$ci = & get_instance();
			
			$query = $ci->db->get_where('usertable',array('LicenseNo' => $license));
			$result=$query->Result();
			$id=isset($result[0]->id)?$result[0]->id:'';
			if($query->num_rows()>0){
				 	
					if($id==$edit_mode){
							return 1;
						}else{
								echo "<div class='alert alert-error' >License number is already registered with us.</div>";			
							}
				
			}	
			else{
			
					echo 1;
			}		
		}
		
		
		
		
		
		public function check_email_needy($email,$edit_mode=false){
		
			if($email=='')
				return 1;
			$ci = & get_instance();
			
			$query = $ci->db->get_where('usertable',array('Email' => $email));
			$result=$query->Result();
			$id=isset($result[0]->id)?$result[0]->id:'';
			if($query->num_rows()>0){
				 	
					if($id==$edit_mode){
							return 1;
						}else{
								echo "<div class='alert alert-error' >Email id already registered with us.</div>";			
							}
				
			}	
			else{
			
					echo 1;
			}		
		}
		
		
		public function check_mobile_needy($mobile,$edit_mode=false){
		
			if($mobile=='')
				return 1;
			$ci = & get_instance();
			
			$query = $ci->db->get_where('usertable',array('MobileNo' => $mobile));
			$result=$query->Result();
			$id=isset($result[0]->id)?$result[0]->id:'';
			if($query->num_rows()>0){
				 	
					if($id==$edit_mode){
							return 1;
						}else{
								echo "<div class='alert alert-error' >Mobile number is already registered with us.</div>";			
							}
				
			}	
			else{
			
					echo 1;
			}		
		}
		
	public function get_enum_field($field,$table)
    {
		$CI =& get_instance();

		$query = $CI->db->query("show columns from ".$table." where Field='".$field."'");
		
		foreach ($query->result_array() as $key=>$row)
		{
			$type = preg_replace('/(^set\()|(^enum\()/i', '', $row['Type']);
			$enumFields = substr($type, 0, -1);
			$enumFields = str_replace("'","",$enumFields);
			$fieldSplit = explode(',', $enumFields);
			return $fieldSplit;			
		}
		
	}
	
	public function get_fieldname_field($field,$table)
    {
		$CI =& get_instance();

		$query = $CI->db->query("show columns from ".$table." where Field='".$field."'");
		return $query->result();

		
	}
	
	
	
	public function check_halt($waiting){
		
			if($waiting=='')
				return 1;
			$ci = & get_instance();
		/*	$query = $ci->db->get_where('offer_ride',array('waiting' => $waiting));
			$result=$query->Result();
		//print_r($result);die;
			if($result){
				echo  $result;	
				//return $result=$query->Result();
				 	//return 1;
			}
						else{
								echo "no result";			
							}*/
	$match_data=$ci->mhome->get_rslt_byfilter($check_data,'offer_ride');						
if (in_array($waiting, $match_data))
  {
 return 1;
  }
else
  {
 
  echo "<div class='alert alert-error' >Match not found.</div>";
  }
		}
	
	
	
	
	
	
}
