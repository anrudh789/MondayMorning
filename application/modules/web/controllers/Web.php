<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends MX_Controller {
	
	
  function __construct()
   {
						parent::__construct();
						$this->load->model('Web_modal');
						$this->load->model('crud/Crud_modal');
						$this->load->helper('url');
						$this->load->library('session'); 
   }
	public function index()
	{
		  try
			{
				    $data['title']='Monday Morning';
						$this->load->view('templetes/head',$data);
						$this->load->view('templetes/header',$data);
						$this->load->view('index',$data);
						$this->load->view('templetes/footer');
						$this->load->view('templetes/foot');
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	public function aboutus()
	{
		  try
			{
				    $data['title']='Monday Morning About Us';
						$this->load->view('templetes/head',$data);
						$this->load->view('templetes/header',$data);
						$this->load->view('about',$data);
						$this->load->view('templetes/footer');
						$this->load->view('templetes/foot');
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}

	public function contactus()
	{
		  try
			{
				    $data['title']='Monday Morning Contact Us';
						$this->load->view('templetes/head',$data);
						$this->load->view('templetes/header',$data);
						$this->load->view('contact',$data);
						$this->load->view('templetes/footer');
						$this->load->view('templetes/foot');
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	  public function register()
	{
		  try
			{
				    $data['title']='Monday Morning Register';
						$this->load->view('templetes/head',$data);
						$this->load->view('templetes/header',$data);
						$this->load->view('register',$data);
						$this->load->view('templetes/footer');
						$this->load->view('templetes/foot');
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
 public function howitwork()
	{
		  try
			{
				    $data['title']='Monday Morning How-it-work';
						$this->load->view('templetes/head',$data);
						$this->load->view('templetes/header',$data);
						$this->load->view('how-it-work',$data);
						$this->load->view('templetes/footer');
						$this->load->view('templetes/foot');
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	 public function testimonials()
	{
		  try
			{
				    $data['title']='Monday Morning Testimonials';
						$this->load->view('templetes/head',$data);
						$this->load->view('templetes/header',$data);
						$this->load->view('testimonials',$data);
						$this->load->view('templetes/footer');
						$this->load->view('templetes/foot');
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	public function forget()
	{
		  try
			{
				    $data['title']='Monday Morning forget';
						$this->load->view('templetes/head',$data);
						$this->load->view('templetes/header',$data);
						$this->load->view('forget',$data);
						$this->load->view('templetes/footer');
						$this->load->view('templetes/foot');
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}	
	public function blog_detail()
	{
		  try
			{
				    $uri=$this->uri->segment(2);
				    $data['title']='Monday Morning blog_detail';
						$where="`bid`='$uri'";
						$data['blog_detail']=$this->Crud_modal->all_data_select('*','blog',$where,'bid asc');
						$this->load->view('templetes/head',$data);
						$this->load->view('templetes/header',$data);
						$this->load->view('blog_detail',$data);
						$this->load->view('templetes/footer');
						$this->load->view('templetes/foot');
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}	
		public function faq()
	{
		  try
			{
				    $data['title']='Monday Morning FAQ';
						$where="`fstatus`='1'";
						$data['faq']=$this->Crud_modal->all_data_select('*','faq',$where,'fid asc');
						$this->load->view('templetes/head',$data);
						$this->load->view('templetes/header',$data);
						$this->load->view('faq',$data);
						$this->load->view('templetes/footer');
						$this->load->view('templetes/foot');
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	public function blog()
	{
		  try
			{
				    $data['title']='Monday Morning blog';
						$where="`blog_status`='1'";
						$data['blog']=$this->Crud_modal->all_data_select('*','blog',$where,'bid asc');
						$this->load->view('templetes/head',$data);
						$this->load->view('templetes/header',$data);
						$this->load->view('blog',$data);
						$this->load->view('templetes/footer');
						$this->load->view('templetes/foot');
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	// #########  Code by ravi ###########
	public function contact_data()
	{
		try
		{
		         $po=$this->input->post();
			if(!empty($po))
			{
				$contact_data['name']=$this->input->post('your-name');
				$contact_data['email']=$this->input->post('your-email');
				$contact_data['phone']=$this->input->post('tele');
				$contact_data['message']=$this->input->post('your-message');
				$contact_data['send_date']=date('y-m-d H:i');
				
				if($this->Web_modal->save_user_contact_data($contact_data))
				{
					$to =$contact_data['email'];
					$subject = 'Welcome In Monday Morning';
					$from = 'MondayMorning@mondaymorning.co.in';
					$headers  = 'MIME-Version: 1.0' . "\r\n";
					$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					$headers .= 'From: '.$from."\r\n".'Reply-To: '.$from."\r\n" .'X-Mailer: PHP/' . phpversion();
					$message='<div><h1>Contact Form Detail</h1>Name: <p><strong>'.$contact_data['name'].'</strong></p>Email:<p><strong>'.$contact_data['email'].'</strong></p>Phone:<p><strong>'.$contact_data['phone'].'</strong></p>Message:<p><strong>'.$contact_data['message'].'</strong></p>Date:<p><strong>'.$contact_data['send_date'].'</strong></p></div>';								
					mail($to, $subject, $message, $headers);
					$this->session->set_flashdata('contactseccmsg','Detail has been send');
					redirect(base_url().'contact-us','refresh');
				}
				else
				{
						$this->session->set_flashdata('contactmsg','Somethings went wrong');
						redirect(base_url().'contact-us','refresh');
				}
				
			}
			
			
		}
		catch(Exception $e)
		{
			echo 'Caught exception:', $e->getMessage()."/n";
		}
		
	}
	//####### End of ravi code ##############
}