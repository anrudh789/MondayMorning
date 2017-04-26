<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invite extends MX_Controller {
	
	
  function __construct()
   {
						parent::__construct();
						$this->load->model('Invite_modal');
						$this->load->model('crud/Crud_modal');
						$this->load->helper('url');
						$this->load->library('session'); 
   }
	
	function index()
	{	
		try
		{
						$data['title']='User Dashboard for Monday Morning';
						$this->load->view('usertempletes/head',$data);
						$this->load->view('usertempletes/header',$data);	
					    $this->load->view('usertempletes/sidebar',$data);
						$this->load->view('index',$data);
						$this->load->view('usertempletes/footer');
		}
       catch(Exception $e)
        {
              echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
		}
	}
	
	function invite_form_data()
	{
		try{
			
			$email=$this->input->post('multipleemail');
			$fname=$this->input->post('multiplefirstname');
			$lname=$this->input->post('multiplelastname');
			for($i=0;$i<sizeof($email);$i++)
			{
				$this->Invite_modal->send_invite($email[$i],$fname[$i],$lname[$i]);
			}
		}
		catch(Exception $e)
		{
			echo 'Caught exception', $this->$e->getMessage(), "\n";
		}
	}
}