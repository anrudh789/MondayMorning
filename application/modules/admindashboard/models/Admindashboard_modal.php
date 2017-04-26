<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admindashboard_modal extends CI_model
 {
   function __construct()
      {
            $this->load->database();
            $this->load->library('session');
            $this->load->library('email');
           // $this->load->library('upload');
      }

		public function total_reg_user()
		{
								$this->db->select('*');
								$this->db->from('user');
								$this->db->last_query();
								$query = $this->db->get();
								// echo  $this->db->last_query();
								$count=   $query->num_rows();
							  return $count;             
		}

      
 
 
}
?>