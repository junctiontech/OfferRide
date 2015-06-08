<?php 
//Model Class for competition start
class Mhome extends CI_Model {
	
	 /**
	 # Programmer : 
	 # Mhome Model
	 
	 */
	 
	//variable initialize
    var $title   = '';
    var $content = '';
    var $date    = '';
	
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
		//Load database connection
		$this->load->database();
    }
    
    
		function form_insert($table=false,$data=false,$filter=false){
		// Inserting in Table(usertable) of Database(offerride)
		//print_r($filter);die;
		if($filter){
			$this->db->where($filter);
			$this->db->update($table,$data);
		     $UserId=$filter['UserId'];
		}else{
			
			$this->db->insert($table, $data);
		}
		
		}
		function get_list($table=false){
		// view from Table(re) of Database(orphan)
		
		$query = $this->db->query("select * from ".$table."");
		 
		return $query->Result();
		 
		}
		function get_list_byfilter($filter=false,$table=false){
		$query = $this->db->get_where($table,$filter);
		// echo $this->db->last_query();die;
		return $query->Result();
		//print_r($query);die;
		}
		
		function get_offer_ride_byfilter($offer_id_ride=false,$table=false){
		$query = $this->db->get_where($table,$offer_id_ride);
		// echo $this->db->last_query();die;
		return $query->Result();
		//print_r($query);die;
		}
		
		function get_offer_byfilter($offer_id=false,$table=false){
		//print_r($filter);die;
		
		$query = $this->db->get_where($table,$offer_id);
		//echo $this->db->last_query();die;
		return $query->Result();
		//print_r($query);die;
		}
		function get_rslt_byfilter($check_data=false,$seat=false,$table=false){
		$data = array('seat >=' => $seat);
		
		$this->db->where($data);
		$query = $this->db->get_where($table,$check_data);
	//echo $this->db->last_query();die;
		return $query->Result();
		//print_r($query);die;
		}
		
		function delete_byfilter($filter=false,$table=false){
			$this->db->where('offer_ride_id', $filter);
			$this->db->delete($table);	
		}
		
		function delete_user_byfilter($userid){
			$tables = array('usertable', 'vehicle', 'offer_ride','confirm_ride');
			//print_r($tables);
			$this->db->where('UserId', $userid);
			$this->db->delete($tables);	
			//echo $this->db->last_query();die;
		}
		
		function delete_vehicle_byfilter($vehicle_id){
			$tables = array('vehicle');
			
			$this->db->where('vehicle_id', $vehicle_id);
			$this->db->delete($tables);	
			//echo $this->db->last_query();die;
		}
		
		function delete_ride_byfilter($ride_id){
			$tables = array('confirm_ride');
			
			$this->db->where('ride_id', $ride_id);
			$this->db->delete($tables);	
			//echo $this->db->last_query();die;
		}
		
		function login_check($table=false,$data=false){
		
		$query = $this->db->get_where($table,$data);
		
		//echo $this->db->last_query();die;
		if($query->num_rows()>0){
		   return $query->row();
		}else{
			//echo"invalid user name or password";
			return false;
		}
		
}

		function update_ride_status_byfilter($filter=false,$data=false,$table=false){
		
			$this->db->where($filter);
			$this->db->update($table,$data);
		  //  echo $this->db->last_query();die;
		}
		
		function data_ride($table=false,$data=false,$user_data=false){
		$this->db->insert($table,$user_data);
		}
		function trunkcate_demo($table=false){
		$this->db->empty_table($table); 
		}
		
		function filter_ride($table=false,$data=false,$filter_data=false){
								$this->db->select('*');
								$this->db->from('offer_ride');
								$this->db->where('$filter_data','$data');

								if ($author_id != 'all') $this->db->where('b.BOOK_AUTH_ID', $author_id);
								if ($book_lang != 'all') $this->db->where('b.BOOK_LANGUAGE', $book_lang);
								if ($pub_year != 'all') $this->db->where('b.PUB_YEAR', $pub_year);

								$query = $this->db->get();
								 echo $this->db->last_query();die;
								return $query->Result();
								}
}
//Model Class for department end
?>
