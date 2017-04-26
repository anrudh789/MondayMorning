<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Web_modal extends CI_model
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
                $username=$this->input->post('user_name');
                $password= $this->input->post('password');
                $this->db->select('uid,scm_id');
                $this->db->from('users');
                $this->db->where(array('user_name'=>$username,'user_password'=>md5($password),'user_status'=>'1'));
                $this->db->last_query();
                $query = $this->db->get();
				       // $this->db->last_query();
							 //		exit;
            if($query->num_rows() == 1)
             {
                $result=$query->row_array();
								$uid=$result['uid'];
								$scm_id=$result['scm_id'];
								$this->db->select('scm_schoolname');
                $this->db->from('school_master');
                $this->db->where(array('scm_id'=>$scm_id,'scm_del_status'=>0));
                $query = $this->db->get();
								$result_school_name=$query->row_array();
                $login_user_data = array('username'=>$username,'userid'=>$uid,'scm_id'=>$scm_id,'schoolname'=>$result_school_name['scm_schoolname']);
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
 function upd_current_login_status()
      {
        try
	  {
               $uid=$this->session->userdata('UID');
               $fields=array('log_status'=>0,'logout_time'=>date('Y-m-d H:i:s'),'IP_address'=>$_SERVER['REMOTE_ADDR']);
               $this->db->where('UID',$uid);
               $update= $this->db->update('login_status',$fields);
               return $update;
      }
       catch(Exception $e)
          {
              echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
          }
        
      }
      
       //######## Code by ravi #######
	function save_user_contact_data($contact_data)
	{
		$this->db->insert('contact_data',$contact_data );
		return $this->db->insert_id();
		
	}
	
	// ######### End of ravi code #######
 
 
}
?>