<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Signup_modal extends CI_model
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
  public function user_exsist_email()
 {
	     try
	        {
               $email=trim($this->input->post('user_email'));
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
  function user_session_authkey($authkey)
      {
        try
	         {
                $this->db->select('*');
                $this->db->from('user');
                $this->db->where(array('mm_auth_key'=>$authkey,'user_status'=>'1','eamil_auth_status'=>'1'));
                $this->db->last_query();
                $query = $this->db->get();
				    // echo  $this->db->last_query();
					
					
            if($query->num_rows() == 1)
             {
                $result=$query->row_array();
								$uid=$result['mm_uid'];
								$uemail=$result['mm_user_email'];
								$name=$result['mm_user_full_name'];
								$field=array('uid'=>$uid);
							  $insert=		$this->db->insert('user_data',$field);
								$login_user_data = array('user_name'=>$uemail,'mm_uid'=>$uid,'name_user'=>$name);
								$session_set= $this->session->set_userdata($login_user_data);
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