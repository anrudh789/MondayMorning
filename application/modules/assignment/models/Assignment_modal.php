<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Assignment_modal extends CI_model
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



      
 
 
}
?>