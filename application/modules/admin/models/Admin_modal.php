<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_modal extends CI_model
 {
   function __construct()
      {
            $this->load->database();
            $this->load->library('session');
            $this->load->library('email');
           // $this->load->library('upload');
      }

    function admin_login()
      {
        try
	         {
                $username=$this->input->post('admin_name');
                $password= $this->input->post('password');
                $this->db->select('*');
                $this->db->from('admin');
                $this->db->where(array('admin_user_name'=>$username,'admin_password'=>md5($password),'status'=>'1'));
                $this->db->last_query();
                $query = $this->db->get();
				       // $this->db->last_query();
							 //		exit;
            if($query->num_rows() == 1)
             {
                $result=$query->row_array();
								$uid=$result['admin_id'];
								$login_user_data = array('admin_name'=>$username,'adminid'=>$uid);
                $session_set= $this->session->set_userdata($login_user_data);
								return true;
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