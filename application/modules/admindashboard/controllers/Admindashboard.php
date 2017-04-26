<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admindashboard extends MX_Controller {
	
	
  function __construct()
   {
						parent::__construct();
						$this->load->model('Admindashboard_modal');
						$this->load->model('crud/Crud_modal');
							$this->load->model('userdashboard/Userdashboard_modal');
						$this->load->helper('url');
						$this->load->library('session'); 
   }
	public function dashboard()
	{
		  try
			{
				   if($this->session->userdata('admin_name')!="" || $this->session->userdata('admin_name')!=null )
		     {
				    $data['title']='Admin Dashboard for Monday Morning';
			      $data['totaluser']=$this->Admindashboard_modal->total_reg_user();
						$data['reg_user_data']=$this->Crud_modal->fetch_alls('user','mm_uid asc');
						$this->load->view('admintempletes/head',$data);
						$this->load->view('admintempletes/header',$data);	
					  $this->load->view('admintempletes/sidebar',$data);
						$this->load->view('index',$data);
						$this->load->view('admintempletes/footer');
						//$this->load->view('admintempletes/foot');
				 }
				  else
				 {
					
				    redirect(base_url().'admin','refresh');
			     }
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	public function reg_user()
	{
		 try
			{
				   if($this->session->userdata('admin_name')!="" || $this->session->userdata('admin_name')!=null )
		     {
				    $data['title']='Admin Dashboard for Monday Morning';
			      $data['totaluser']=$this->Admindashboard_modal->total_reg_user();
						$data['mm_pro']=$this->Crud_modal->fetch_alls('user_data','uid asc');
						$this->load->view('admintempletes/head',$data);
						$this->load->view('admintempletes/header',$data);	
					  $this->load->view('admintempletes/sidebar',$data);
						$this->load->view('registered_user',$data);
						$this->load->view('admintempletes/footer');
						//$this->load->view('admintempletes/foot');
				 }
				  else
				 {
					
				    redirect(base_url().'admin','refresh');
			     }
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
 public function caf_user()
 {
	
	try
			{
				   if($this->session->userdata('admin_name')!="" || $this->session->userdata('admin_name')!=null )
		     {
				    $data['title']='Admin Dashboard for Monday Morning';
			      $data['totaluser']=$this->Admindashboard_modal->total_reg_user();
						$data['mm_pro']=$this->Crud_modal->fetch_alls('user_data','uid asc');
						$this->load->view('admintempletes/head',$data);
						$this->load->view('admintempletes/header',$data);	
					  $this->load->view('admintempletes/sidebar',$data);
						$this->load->view('caf_user',$data);
						$this->load->view('admintempletes/footer');
						//$this->load->view('admintempletes/foot');
				 }
				  else
				 {
					
				    redirect(base_url().'admin','refresh');
			     }
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	
 }
}