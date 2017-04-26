<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends MX_Controller {
	
	
  function __construct()
   {
						parent::__construct();
						$this->load->model('Signup_modal');
						$this->load->model('crud/Crud_modal');
						$this->load->helper('url');
						$this->load->library('session'); 
   }
  public function sign_fb_save()
	{
		 try
			{
				$auth_key=md5(mt_rand(9999999,99999999));
				$pass=mt_rand(99999,999999);
				
				$field=array(
											'mm_user_full_name'=>trim($this->input->post('Name')),
											'mm_user_email'=>trim($this->input->post('Email')),
											'mm_age'=>0,
											'mm_higest_qualification'=>1,
											'user_password'=>md5($pass),
											'user_status'=>1,
											'mm_auth_key'=>$auth_key,
											'reg_date'=>date('Y-m-d H:i:s'),
											'eamil_auth_status'=>1,
											);
								 
				    $data['data_added']= $this->Crud_modal->data_insert('user',$field);
						if($data['data_added']==1)
						{
											
										$name=trim($this->input->post('Name'));
										$email=trim($this->input->post('Email'));
										$password=$pass;
										$date=date("F j, Y");
										$to =$email;
									
										$subject = 'Welcome In Monday Morning';
									
										$from = 'MondayMorning@mondaymorning.co.in';
									
										
										// To send HTML mail, the Content-type header must be set
										$headers  = 'MIME-Version: 1.0' . "\r\n";
										$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
										$headers .= 'From: '.$from."\r\n".
										'Reply-To: '.$from."\r\n" .
										'X-Mailer: PHP/' . phpversion();
										// Create email headers
									
										$message = $this->reg_email($name,$email,$password,$date);
										//$message="test mail from saurabh";
										mail($to, $subject, $message, $headers);
										//echo 'thank-you';
									  //$this->session->set_flashdata('reg-sucess', 'Record Saved Sucessfully.');
									  //redirect(base_url().'thank-you','refresh');
						}
				 
				 
				else
				 {
					
				    redirect(base_url(),'refresh');
			     
				 }
			}
			catch (Exception $e)
	        {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
          }
	}
	public function sign_inkendin_save()
	{
		 try
			{
				$auth_key=md5(mt_rand(9999999,99999999));
				$pass=mt_rand(99999,999999);
				
				$field=array(
											'mm_user_full_name'=>trim($this->input->post('Name')),
											'mm_user_email'=>trim($this->input->post('Email')),
											'mm_age'=>0,
											'mm_higest_qualification'=>1,
											'user_password'=>md5($pass),
											'user_status'=>1,
											'mm_auth_key'=>$auth_key,
											'reg_date'=>date('Y-m-d H:i:s'),
											'eamil_auth_status'=>1,
											);
								 
				    $data['data_added']= $this->Crud_modal->data_insert('user',$field);
						if($data['data_added']==1)
						{
											
										$name=trim($this->input->post('Name'));
										    $email=trim($this->input->post('Email'));
							          $where="`mm_user_email`='$email'";
												$data['user_id']=$this->Crud_modal->all_data_select('*','user',$where,'mm_user_email asc');
												$uid=$data['user_id'][0]['mm_uid'];
						  					$field=array('uid'=>$uid);
												$insert=		$this->db->insert('user_data',$field);
												
								
										//$name=trim($this->input->post('Name'));
										//$email=trim($this->input->post('Email'));
										$password=$pass;
										$date=date("F j, Y");
										$to =$email;
									
										$subject = 'Welcome In Monday Morning';
									
										$from = 'MondayMorning@mondaymorning.co.in';
									
										
										// To send HTML mail, the Content-type header must be set
										$headers  = 'MIME-Version: 1.0' . "\r\n";
										$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
										$headers .= 'From: '.$from."\r\n".
										'Reply-To: '.$from."\r\n" .
										'X-Mailer: PHP/' . phpversion();
										// Create email headers
									
										$message = $this->reg_email($name,$email,$password,$date);
										//$message="test mail from saurabh";
										mail($to, $subject, $message, $headers);
										//echo 'thank-you';
									  //$this->session->set_flashdata('reg-sucess', 'Record Saved Sucessfully.');
									  //redirect(base_url().'thank-you','refresh');
						}
				 
				 
				else
				 {
					
				    redirect(base_url(),'refresh');
			     
				 }
			}
			catch (Exception $e)
	        {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
          }
	}
	
	public function reg_form_save()
	{
	  try
			{$auth_key=md5(mt_rand(9999999,99999999));
			
			 $secret = "6LdBJx0UAAAAAGHWrZgn5VjyxhF2VhmMnSmWZKGk";
  $response= trim($this->input->post('g-recaptcha-response'));
$google_url="https://www.google.com/recaptcha/api/siteverify";
    
    $ip=$_SERVER['REMOTE_ADDR'];
    $url=$google_url."?secret=".$secret."&response=".$response."&remoteip=".$ip;
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
    $res = curl_exec($curl);
    curl_close($curl);
    $res= json_decode($res, true);
    
      if($res['success']==1){
   
				$field=array(
											'mm_user_full_name'=>trim($this->input->post('fullname')),
											'mm_user_email'=>trim($this->input->post('user_email')),
											'mm_age'=>'0',
											'mm_higest_qualification'=>'1',
											'user_password'=>md5($this->input->post('user_password')),
											'user_status'=>1,
											'mm_auth_key'=>$auth_key,
											'reg_date'=>date('Y-m-d H:i:s'),
											'eamil_auth_status'=>0,
											);
								  $data['email_exsist_post']=$this->Signup_modal->user_exsist_email();
							
								 if($data['email_exsist_post']==1)
								 {
									   $this->session->set_flashdata('email_exsist', 'This email is already registered.');
									    redirect(base_url(),'refresh');
									 	exit;
								 }
								 
				    $data['data_added']= $this->Crud_modal->data_insert('user',$field);
						if($data['data_added']==1)
						{
											
										$name=trim($this->input->post('fullname'));
										$email=trim($this->input->post('user_email'));
										$password=trim($this->input->post('user_password'));
										$date=date("F j, Y");
										$to =$email;
									
										$subject = 'Welcome In Monday Morning';
										$subject_auth= 'Verification Email from Monday Morning';
										$from = 'MondayMorning@mondaymorning.co.in';
										$from_auth= 'MondayMorning@mondaymorning.co.in';
										$page_name='user-verification/';
										// To send HTML mail, the Content-type header must be set
										$headers  = 'MIME-Version: 1.0' . "\r\n";
										$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
										$headers .= 'From: '.$from."\r\n".
										'Reply-To: '.$from."\r\n" .
										'X-Mailer: PHP/' . phpversion();
										// Create email headers
										
										
										$headers_auth  = 'MIME-Version: 1.0' . "\r\n";
										$headers_auth .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
										$headers_auth .= 'From: '.$from_auth."\r\n".
										'Reply-To: '.$from_auth."\r\n" .
										'X-Mailer: PHP/' . phpversion();
										// Create email headers
										
									
										// Compose a simple HTML email message
										$message = $this->reg_email($name,$email,$password,$date);
										//$message="test mail from saurabh";
										mail($to, $subject, $message, $headers);
										$message_auth=$this->auth_email($name,$email,$auth_key,$page_name,$date);
										mail($to, $subject_auth, $message_auth, $headers_auth);
									  $this->session->set_flashdata('reg-sucess', 'Record Saved Sucessfully.');
									  redirect(base_url(),'refresh');
						}
				 
				 
				else
				 {
				    
				    redirect(base_url(),'refresh');
			     
				 }
				 }
				 else{$this->session->set_flashdata('captcha_error', 'Recaptcha Error!Please try again.');redirect(base_url(),'refresh');}
			}
			catch (Exception $e)
	        {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
          }
		
	}
	public function email_exsist_check()
	{
		 
		  $data['user_exsist']= $this->Signup_modal->user_exsist();
			if($data['user_exsist']!=0)
			{
				 echo 'email-exsist';
			}
			else
			{
				 echo 'email-not-exsist'; 
			}
	}
	function user_email_verify()
	{
				try
				{
						$uri=$this->uri->segment(2);
						$where="`mm_auth_key`='$uri'";
						$field=array('eamil_auth_status'=>1);
						
					 $data['data_updated']= $this->Crud_modal->update_data($where,'user',$field);
					 if($data['data_updated']==1)
						{
							   $authkey=$uri;
							   $gocafone= $this->Signup_modal->user_session_authkey($authkey);
									//redirect(base_url(),'refresh');
									if($gocafone==1)
								  	{
											
								    	redirect(base_url().'user-dashboard','refresh');
						        }
									 else
										{
											redirect(base_url(),'refresh');
										}
						}
						else
				    {
							redirect(base_url(),'refresh');
				    }
				}
			catch (Exception $e)
	      {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
		
	}
	
	function reg_email($name,$email,$password,$date)
	{
		 try
			{
				    $base_url=base_url().'assets/';
				    $html='<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta content="en-us" http-equiv="Content-Language">

<title>Monday Morning</title>
<style type="text/css">
body {
	margin:0;
	padding:0;
	background-color:#ffffff;
	background:#ffffff;
}
</style>
</head>

<body bgcolor="#ffffff" link="#0f75c3" vlink="#0f75c3">
<!-- Start of main container -->
<table align="center" bgcolor="#ffffff" cellpadding="0" cellspacing="0" style="width: 100%; background:#ffffff; background-color:#ffffff; margin:0; padding:0 20px;">
	<tbody><tr>
		<td>
		<table align="center" cellpadding="0" cellspacing="0" style="width: 620px; border-collapse:collapse; text-align:left; font-family:Tahoma; font-weight:normal; font-size:12px; line-height:15pt; color:#444444; margin:0 auto; ">
			<!-- Start of logo and top links -->
			<tbody><tr>
				<td valign="top" style="height:5px;margin:0;padding:20px 0 0 0;;line-height:0;">
				<img alt="" height="5" src="'.$base_url.'images/BottomBackground_Blue_mm.png" vspace="0" style="border:0; padding:0; margin:0; line-height:0;" width="620"></td>
			</tr>
			<tr>
				<td style=" width:620px;" valign="top">
					<table cellpadding="0" cellspacing="0" style="width:100%; 
					font-family:Tahoma; font-weight:normal; font-size:12px; line-height:15pt; color:#444444; border-right:2px solid black; border-left:2px solid black;">
						<tbody><tr>
							<td bgcolor="#0f75c3" style="width: 320px; padding:10px 0 10px 20px; background:#162F51; background-color:#162F51; color:#ffffff;" valign="top">
								<a style="color:#ffffff; text-decoration:underline;" href="http://mondaymorning.co.in/">Visit our website </a>							</td>
							<td bgcolor="#0f75c3" style="width: 300px; padding:10px 20px 10px 20px; background:#162F51; background-color:#162F51; text-align:right; color:#ffffff;" valign="top">
								Sales and Support: +91 9599272618							</td>
						</tr>
						<tr style=" border-style:outset; border-right-color:#000033">
							<td bgcolor="#FFFFFF" style="width: 320px; padding:20px 0 15px 20px; background:#ffffff; background-color:#ffffff;" valign="middle">
								<p style="padding:0; margin:0; line-height:160%; font-size:18px;">
									<img alt="Monday Morning Newsletter" height="80" src="'.$base_url.'images/monday--morning-Logo.png" style="padding:0;border:0;" width="300">								</p>							</td>
							<td bgcolor="#FFFFFF" style="width: 300px; padding:20px 20px 15px 20px; background:#ffffff; background-color:#ffffff; text-align:center;" valign="middle">&nbsp;</td>
						</tr>
					</tbody></table>				</td>
			</tr>
			<tr>
				<td valign="top" style="height:5px;margin:0;padding:0;line-height:0;">
				<img alt="" height="5" src="'.$base_url.'images/BottomBackground_Blue_21.png" vspace="0" style="border:0; padding:0; margin:0; line-height:0;" width="620"></td>
			</tr>
			<!-- End of logo and top links -->
			<!-- Start of Letter Content -->
			<tr>
				<td valign="top" style="height:5px;margin:0;padding:20px 0 0 0;line-height:0;"><img alt="" height="5" src="'.$base_url.'images/BottomBackground_Blue_mm.png" vspace="0" style="border:0; padding:0; margin:0; line-height:0;" width="620"></td>
			</tr>
			<tr>
				<td bgcolor="#FFFFFF" style="padding:10px 20px; border-right:2px solid black; border-left:2px solid black; background:#ffffff;background-color:#ffffff;" valign="top" >
					<span style="color:#999999; font-size:8pt;">'.$date.'</span><br>
					<p style="padding:0; margin:0 0 11pt 0;line-height:160%; font-size:18px;">
				  Welcome to Monday Morning!</p>
				  <p style="padding:0; margin:11pt 0;line-height:160%; font-size:15px; font-style:italic;">Dear '.$name.', </p>
					We are glad to confirm your registration as an member with Monday Morning.<br>
	        <br>
					<strong>Here are your login Credential.<br>
Username : '.$email.'<br>
Password : '.$password.'<br>
</strong>
					<br>
				  Thank you for being part of Monday Morning. <br>
                    <br>			</td>
			</tr>
			<tr style="border-right:2px solid black; border-left:2px solid black;">
				<td bgcolor="#FFFFFF" style="padding:20px; background:#ffffff;background-color:#ffffff;" valign="top">
					<table cellpadding="0" cellspacing="0" style="width: 100%; border-collapse:collapse; text-align:left; font-family:Tahoma; font-weight:normal; font-size:12px; line-height:15pt; color:#444444;">
						<tbody><tr>
							<td valign="top">&nbsp;</td>
							<td valign="middle" style="width:200px; text-align:center;">
							<font style="font-size:14px;"><strong>Best Wishes</strong></font><br>Monday Morning Team							</td>
							<td valign="top" style="width:50px;">&nbsp;</td>
						</tr>
					</tbody></table>				</td>
			</tr>
			<tr>
				<td valign="top" style="height:5px;margin:0;padding:0;line-height:0;">
				<img alt="" height="5" src="'.$base_url.'images/BottomBackground_Blue_21.png" vspace="0" style="border:0; padding:0; margin:0; line-height:0;" width="620"></td>
			</tr>
			<!-- End of Letter Content -->
			<!-- Start of Footer -->
			<tr>
				<td valign="top" style="height:5px;margin:0;padding:20px 0 0 0;line-height:0;">
				<img alt="" height="5" src="'.$base_url.'images/BottomBackground_Blue_mm.png" vspace="0" style="border:0; padding:0; margin:0; line-height:0;" width="620"></td>
			</tr>
			<tr>
				<td bgcolor="#0f75c3" style="padding:0 20px 15px 20px; background-color:#162F51; background:#162F51;">
					<table cellpadding="0" cellspacing="0" style="width: 100%; border-collapse:collapse; font-family:Tahoma; font-weight:normal; font-size:12px; line-height:15pt; color:#FFFFFF;">
						<tbody>
                        <tr>
							<td style="height:20px;">&nbsp;							</td>
						</tr>
						<tr>
							<td style="width:340px; padding:0 20px 0 0;">
								Monday Morning,
The Ithum, Unit - 10, 3rd Floor,<br> Tower A, Plot No. A-40, Sector - 62, Noida - 201301, INDIA<br>
								<a style="color:#308dd5; text-decoration:underline;" href="http://mondaymorning.co.in/">www.mondaymorning.co.in</a> <span style="color:#308dd5;"> | </span> <a style="color:#0f75c3; text-decoration:underline;" href="#">mm@tkcfirm.in</a><br>
								Sales and Support: +91 9599272618							</td>
							<td valign="middle" align="center" style="text-align:center; width:240px;">
								<table cellpadding="0" cellspacing="5" style="width: 100%; border-collapse:collapse;">
									<tbody><tr>
										<td style="width:20%;"><a style="text-decoration:none; color:#053b64;" href="#"><img alt="MM" height="35" src="'.$base_url.'images/monday-morning-fevicon.jpg" style="border:0;" width="35"></a></td>
										<td style="width:20%;"><a style="text-decoration:none; color:#053b64;" href="#"><img alt="Twitter" height="32" src="'.$base_url.'images/twitter.png" style="border:0;" width="32"></a></td>
										<td style="width:20%;"><a style="text-decoration:none; color:#053b64;" href="#"><img alt="Facebook" height="32" src="'.$base_url.'images/facebook.png" style="border:0;" width="32"></a></td>
										<td style="width:20%;"><a style="text-decoration:none; color:#053b64;" href="#"><img alt="Youtube" height="32" src="'.$base_url.'images/youtube.png" style="border:0;" width="32"></a></td>
										<td style="width:20%;"><a style="text-decoration:none; color:#053b64;" href="#"><img alt="Linkedin" height="32" src="'.$base_url.'images/linkedin.png" style="border:0;" width="32"></a></td>
									</tr>
								</tbody></table>							</td>
						</tr>
						<tr>
							<td style="padding:20px 0 0 0;" colspan="2">
								You are currently signed up to Monday Morning as: <a style="color:#0f75c3; text-decoration:underline;" href="#">'.$email.'</a><br>Copyright © 2017 
								Monday Morning							</td>
						</tr>
					</tbody></table>				</td>
			</tr>
			<tr>
				<td valign="top" style="height:5px;margin:0;padding:0 0 20px 0;line-height:0;"><img alt="" height="5" src="'.$base_url.'/images/BottomBackground_Blue_21.png" vspace="0" style="border:0; padding:0; margin:0; line-height:0;" width="620"></td>
			</tr>
			<!-- End of Footer -->
		</tbody></table>
	  </td>
	</tr>
</tbody></table>
<!-- End of main container -->

</body></html>';
						return $html;
			}
			catch (Exception $e)
	        {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
          }
	}
   function auth_email($name,$email,$auth_key,$page_name,$date)
	{
		 try
			{
				    $base_url=base_url().'assets/';
				    $html_auth='<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta content="en-us" http-equiv="Content-Language">

<title>Monday Morning</title>
<style type="text/css">
body {
	margin:0;
	padding:0;
	background-color:#ffffff;
	background:#ffffff;
}
</style>
</head>

<body bgcolor="#ffffff" link="#0f75c3" vlink="#0f75c3">
<!-- Start of main container -->
<table align="center" bgcolor="#ffffff" cellpadding="0" cellspacing="0" style="width: 100%; background:#ffffff; background-color:#ffffff; margin:0; padding:0 20px;">
	<tbody><tr>
		<td>
		<table align="center" cellpadding="0" cellspacing="0" style="width: 620px; border-collapse:collapse; text-align:left; font-family:Tahoma; font-weight:normal; font-size:12px; line-height:15pt; color:#444444; margin:0 auto; ">
			<!-- Start of logo and top links -->
			<tbody><tr>
				<td valign="top" style="height:5px;margin:0;padding:20px 0 0 0;;line-height:0;">
				<img alt="" height="5" src="'.$base_url.'images/BottomBackground_Blue_mm.png" vspace="0" style="border:0; padding:0; margin:0; line-height:0;" width="620"></td>
			</tr>
			<tr>
				<td style=" width:620px;" valign="top">
					<table cellpadding="0" cellspacing="0" style="width:100%; 
					font-family:Tahoma; font-weight:normal; font-size:12px; line-height:15pt; color:#444444; border-right:2px solid black; border-left:2px solid black;">
						<tbody><tr>
							<td bgcolor="#0f75c3" style="width: 320px; padding:10px 0 10px 20px; background:#162F51; background-color:#162F51; color:#ffffff;" valign="top">
								<a style="color:#ffffff; text-decoration:underline;" href="http://mondaymorning.co.in/">Visit our website </a>							</td>
							<td bgcolor="#0f75c3" style="width: 300px; padding:10px 20px 10px 20px; background:#162F51; background-color:#162F51; text-align:right; color:#ffffff;" valign="top">
								Sales and Support: +91 9599272618							</td>
						</tr>
						<tr style=" border-style:outset; border-right-color:#000033">
							<td bgcolor="#FFFFFF" style="width: 320px; padding:20px 0 15px 20px; background:#ffffff; background-color:#ffffff;" valign="middle">
								<p style="padding:0; margin:0; line-height:160%; font-size:18px;">
									<img alt="Monday Morning Newsletter" height="80" src="'.$base_url.'images/monday--morning-Logo.png" style="padding:0;border:0;" width="300">								</p>							</td>
							<td bgcolor="#FFFFFF" style="width: 300px; padding:20px 20px 15px 20px; background:#ffffff; background-color:#ffffff; text-align:center;" valign="middle">&nbsp;</td>
						</tr>
					</tbody></table>				</td>
			</tr>
			<tr>
				<td valign="top" style="height:5px;margin:0;padding:0;line-height:0;">
				<img alt="" height="5" src="'.$base_url.'images/BottomBackground_Blue_21.png" vspace="0" style="border:0; padding:0; margin:0; line-height:0;" width="620"></td>
			</tr>
			<!-- End of logo and top links -->
			<!-- Start of Letter Content -->
			<tr>
				<td valign="top" style="height:5px;margin:0;padding:20px 0 0 0;line-height:0;"><img alt="" height="5" src="'.$base_url.'images/BottomBackground_Blue_mm.png" vspace="0" style="border:0; padding:0; margin:0; line-height:0;" width="620"></td>
			</tr>
			<tr>
				<td bgcolor="#FFFFFF" style="padding:10px 20px; border-right:2px solid black; border-left:2px solid black; background:#ffffff;background-color:#ffffff;" valign="top" >
					<span style="color:#999999; font-size:8pt;">'.$date.'</span><br>
					<p style="padding:0; margin:0 0 11pt 0;line-height:160%; font-size:18px;">
				  Welcome to Monday Morning!</p>
				  <p style="padding:0; margin:11pt 0;line-height:160%; font-size:15px; font-style:italic;">Dear '.$name.', </p>
									 <span style="font-size:10pt;">We noticed that you need to verify your email address.
<br>
					 </span>
                 <span style="color:#000000; font-size:12pt;"> To do so, simple click the button below.<br>
</span><br>
	        
				<table width="290" cellspacing="0" cellpadding="0" border="0">
		        <tbody>
		          <tr>
		            <td width="290" height="50" bgcolor="#162F51" style="border-radius:10px;font-family:Arial,Helvetica,sans-serif;color:#ffffff;font-size:18px;text-align:center;font-weight:bold">
						<a style="text-decoration:none;color:#ffffff" href="'.base_url().$page_name.$auth_key.'" target="_blank">Verify Your Email Address</a></td>
		            </tr>
		          </tbody>
		        </table>
				</td>
			</tr>
			<tr style="border-right:2px solid black; border-left:2px solid black;">
				<td bgcolor="#FFFFFF" style="padding:20px; background:#ffffff;background-color:#ffffff;" valign="top">
					<table cellpadding="0" cellspacing="0" style="width: 100%; border-collapse:collapse; text-align:left; font-family:Tahoma; font-weight:normal; font-size:12px; line-height:15pt; color:#444444;">
						<tbody><tr>
							<td valign="top">&nbsp;</td>
							<td valign="middle" style="width:200px; text-align:center;">
							<font style="font-size:14px;"><strong>Best Wishes</strong></font><br>Monday Morning Team							</td>
							<td valign="top" style="width:50px;">&nbsp;</td>
						</tr>
					</tbody></table>				</td>
			</tr>
			<tr>
				<td valign="top" style="height:5px;margin:0;padding:0;line-height:0;">
				<img alt="" height="5" src="'.$base_url.'images/BottomBackground_Blue_21.png" vspace="0" style="border:0; padding:0; margin:0; line-height:0;" width="620"></td>
			</tr>
			<!-- End of Letter Content -->
			<!-- Start of Footer -->
			<tr>
				<td valign="top" style="height:5px;margin:0;padding:20px 0 0 0;line-height:0;">
				<img alt="" height="5" src="'.$base_url.'images/BottomBackground_Blue_mm.png" vspace="0" style="border:0; padding:0; margin:0; line-height:0;" width="620"></td>
			</tr>
			<tr>
				<td bgcolor="#0f75c3" style="padding:0 20px 15px 20px; background-color:#162F51; background:#162F51;">
					<table cellpadding="0" cellspacing="0" style="width: 100%; border-collapse:collapse; font-family:Tahoma; font-weight:normal; font-size:12px; line-height:15pt; color:#FFFFFF;">
						<tbody>
                        <tr>
							<td style="height:20px;">&nbsp;							</td>
						</tr>
						<tr>
							<td style="width:340px; padding:0 20px 0 0;">
								Monday Morning,
The Ithum, Unit - 10, 3rd Floor,<br> Tower A, Plot No. A-40, Sector - 62, Noida - 201301, INDIA<br>
								<a style="color:#308dd5; text-decoration:underline;" href="http://mondaymorning.co.in/">www.mondaymorning.co.in</a> <span style="color:#308dd5;"> | </span> <a style="color:#0f75c3; text-decoration:underline;" href="#">mm@tkcfirm.in</a><br>
								Sales and Support: +91 9599272618							</td>
							<td valign="middle" align="center" style="text-align:center; width:240px;">
								<table cellpadding="0" cellspacing="5" style="width: 100%; border-collapse:collapse;">
									<tbody><tr>
										<td style="width:20%;"><a style="text-decoration:none; color:#053b64;" href="#"><img alt="MM" height="35" src="'.$base_url.'images/monday-morning-fevicon.jpg" style="border:0;" width="35"></a></td>
										<td style="width:20%;"><a style="text-decoration:none; color:#053b64;" href="#"><img alt="Twitter" height="32" src="'.$base_url.'images/twitter.png" style="border:0;" width="32"></a></td>
										<td style="width:20%;"><a style="text-decoration:none; color:#053b64;" href="#"><img alt="Facebook" height="32" src="'.$base_url.'images/facebook.png" style="border:0;" width="32"></a></td>
										<td style="width:20%;"><a style="text-decoration:none; color:#053b64;" href="#"><img alt="Youtube" height="32" src="'.$base_url.'images/youtube.png" style="border:0;" width="32"></a></td>
										<td style="width:20%;"><a style="text-decoration:none; color:#053b64;" href="#"><img alt="Linkedin" height="32" src="'.$base_url.'images/linkedin.png" style="border:0;" width="32"></a></td>
									</tr>
								</tbody></table>							</td>
						</tr>
						<tr>
							<td style="padding:20px 0 0 0;" colspan="2">
								You are currently signed up to Monday Morning as: <a style="color:#0f75c3; text-decoration:underline;" href="#">'.$email.'</a><br>Copyright © 2017 
								Monday Morning							</td>
						</tr>
					</tbody></table>				</td>
			</tr>
			<tr>
				<td valign="top" style="height:5px;margin:0;padding:0 0 20px 0;line-height:0;"><img alt="" height="5" src="'.$base_url.'/images/BottomBackground_Blue_21.png" vspace="0" style="border:0; padding:0; margin:0; line-height:0;" width="620"></td>
			</tr>
			<!-- End of Footer -->
		</tbody></table>
	  </td>
	</tr>
</tbody></table>
<!-- End of main container -->

</body></html>';
						return $html_auth;
			}
			catch (Exception $e)
	        {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
          }
	}
 
}