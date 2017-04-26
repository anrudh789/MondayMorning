<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {
	
	
  function __construct()
   {
						parent::__construct();
						$this->load->model('Admin_modal');
						$this->load->model('crud/Crud_modal');
						$this->load->helper('url');
						$this->load->library('session'); 
   }
	public function index()
	{
		  try
			{
				    $data['title']='Admin Login for Monday Morning';
					//	$this->load->view('admintempletes/header',$data);
					//	$this->load->view('admintempletes/head',$data);
					//  $this->load->view('admintempletes/sidebar',$data);
						$this->load->view('index',$data);
						//$this->load->view('admintempletes/footer');
						//$this->load->view('admintempletes/foot');
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
			public function login()
	 {
				try
				{
					   $data['login_user']= $this->Admin_modal->admin_login();
						 if($data['login_user']==1)
								{
									redirect(base_url().'admin-dashboard','refresh');
								}
								 if($data['login_user']==10)
								{
									$this->session->set_flashdata('error_email', 'Your Account has been suspended please contact.');
									 redirect(base_url(),'refresh');
								}
							else
							  {
						       $this->session->set_flashdata('error_email', 'Your Username or Password is Wrong.');
									 redirect(base_url(),'refresh');
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
							$this->session->unset_userdata('admin_name');
							$this->session->unset_userdata('adminid');
				
							redirect(base_url().'admin','refresh');
		     }
		   catch (Exception $e)
		   {
                    echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
           }
 
    }
}