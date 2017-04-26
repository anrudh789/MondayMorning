<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin extends MX_Controller {
	
	
  function __construct()
   {
						parent::__construct();
						$this->load->model('Userlogin_modal');
						$this->load->model('crud/Crud_modal');
						$this->load->helper('url');
						$this->load->library('session'); 
   }

			public function login()
	 {
				try
				{
					   $data['login_user']= $this->Userlogin_modal->user_login();
						 if($data['login_user']==1)
								{
									redirect(base_url().'user-dashboard','refresh');
								}
								 
							else
							  {
						       $this->session->set_flashdata('error_email', 'Your Username or Password is Wrong.');
									 redirect(base_url().'register','refresh');
							   }
	     	}
		    catch (Exception $e)
		    {
                    echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
        }
	  }
  	public function logout()
     {
	       try
	       {
	       ###### code by Ravi save log out time ##############
	

			           $data['uid']=$this->session->userdata('mm_uid');
					   $data['logout_time']=date('Y-m-d H:i:s');
					
						$data['status']=0;
						
						//$this->db->where('uid',$data['uid']);
						//$this->db->update('user_login_status',$data);
						$this->db->insert('user_login_status',$data);
						###### code by Ravi save log out time ##############
							$this->session->unset_userdata('user_name');
							$this->session->unset_userdata('userid');
				                        	$this->load->view('remove_javascript_session');
				  		redirect(base_url().'register','refresh');
							
		     }
		   catch (Exception $e)
		   {
                    echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
           }
 
    }
}