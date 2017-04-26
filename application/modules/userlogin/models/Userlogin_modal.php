<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Userlogin_modal extends CI_model
 {
   function __construct()
      {
            $this->load->database();
            $this->load->library('session');
            $this->load->library('email');
           // $this->load->library('upload');
      }

    function user_login()
      {
        try
	         {
                $username=$this->input->post('user_login');
                $password= $this->input->post('user_pwd');
                $this->db->select('*');
                $this->db->from('user');
								
								if($this->input->post('Type')!="" || $this->input->post('Type')!=null)
								{
									 
									 if($this->input->post('Type')=='fb' || $this->input->post('Type')=='linke')
									 { $this->db->where(array('mm_user_email'=>$username,'user_status'=>'1','eamil_auth_status'=>1));}
                 
								}
								else{
									 
									$this->db->where(array('mm_user_email'=>$username,'user_password'=>md5($password),'user_status'=>'1','eamil_auth_status'=>1));
								}
                $this->db->last_query();
                $query = $this->db->get();
				      //  echo  $this->db->last_query();
							//  exit;
            if($query->num_rows() == 1)
             {
                $result=$query->row_array();
								$uid=$result['mm_uid'];
								$nameuser=$result['mm_user_full_name'];
								$login_user_data = array('user_name'=>$username,'name_user'=>$nameuser,'mm_uid'=>$uid);
                $session_set= $this->session->set_userdata($login_user_data);
                ####### Code by Ravi  for Save the Login Time   #########

						$data['uid']=$this->session->userdata('mm_uid');
						$data['login_time']=date('Y-m-d H:i:s');
						$data['logout_time']='';
						$data['status']=1;
						// $this->db->select('*');
						// $this->db->from('user_login_status');
						// $this->db->where('uid',$data['uid']);
						// $logintimedata=$this->db->get();
						// if($logintimedata->num_rows()>0)
						// {
							// $this->db->where('uid',$data['uid']);
							// $this->db->update('user_login_status',$data);
						// }
						// else
						// {
							$this->db->insert('user_login_status',$data);
							
						// }
										####### end Code by Ravi  for Save the Login Time   #########
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