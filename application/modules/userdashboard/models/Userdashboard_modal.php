<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Userdashboard_modal extends CI_model
 {
   function __construct()
      {
            $this->load->database();
            $this->load->library('session');
            $this->load->library('email');
           // $this->load->library('upload');
      }
  public function cityname($stateid)
	{
		  
							   try
					    {
											$this->db->select('*');
											$this->db->from('cities');
										  $this->db->where(array('state_id'=>$stateid));
									  	$query = $this->db->order_by('name','ASC');
											$query = $this->db->get();
											$result=		$query->result_array();
										//echo 	 $this->db->last_query();
											return $result;
					   	}
										catch(Exception $e)
          {
              echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
          }
						
		
	}
	public function state_name_withid($stateid)
	{
		  
							   try
					    {
											$this->db->select('*');
											$this->db->from('states');
										  $this->db->where(array('sid'=>$stateid));
									  	$query = $this->db->order_by('name','ASC');
											$query = $this->db->get();
											$result=		$query->row_array();
										//echo 	 $this->db->last_query();
											return $result;
					   	}
										catch(Exception $e)
          {
              echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
          }
						
		
	}
	public function cityname_with_cityid($cityid)
	{
		  
							   try
					    {
											$this->db->select('*');
											$this->db->from('cities');
										  $this->db->where(array('ci_id'=>$cityid));
									  	$query = $this->db->order_by('name','ASC');
											$query = $this->db->get();
											$result=		$query->row_array();
										//echo 	 $this->db->last_query();
											return $result;
					   	}
										catch(Exception $e)
          {
              echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
          }
						
		
	}

      	############### code by Ravi get Last login time #######################
	public function user_last_login_time()
	{
		try
		{
			$userid=$this->session->userdata('mm_uid');
			$this->db->select('login_time');
			$this->db->from('user_login_status');
			$this->db->where('uid',$userid);
			$this->db->order_by('login_time', 'desc');
			$this->db->limit(1,1);
			$query = $this->db->get(); 
			return $query->result();
		}
		catch(Exception $e)
		{
			echo 'Caught exception',$this->$e->getMessage(),"/n";
		}
	}
      //######## end ##################
 
 
}
?>