<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Caf_modal extends CI_model
 {
   function __construct()
      {
            $this->load->database();
            $this->load->library('session');
            $this->load->library('email');
           // $this->load->library('upload');
      }

    
 public function user_exsist()
 {
	     try
	        {
               $email=trim($this->input->post('USEREMAIL'));
               $this->db->select('*');
               $this->db->from('user');
               $this->db->where(array('mm_user_email'=>$email));
               $query = $this->db->get();
					   // echo $this->db->last_query();
            if($query->num_rows() == 1)
             {
							return 1;
             }
             else
             {
              return 0;
             }
          }
       catch(Exception $e)
          {
              echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
          }
 }

 
}
?>