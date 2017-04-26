<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Caf extends MX_Controller {
	
	
  function __construct()
   {
						parent::__construct();
						$this->load->model('Caf_modal');
						$this->load->model('crud/Crud_modal');
						$this->load->helper('url');
						$this->load->library('session');
						
   }

	public function caf_one()
	{
	        try
		      	{
							  if($this->session->userdata('user_email')!='' || $this->session->userdata('user_email')!=null)
								{
								$data['title']='Monday Morning Caf Step On';
								$uid=$this->session->userdata('mm_uid');
								$where="`mm_uid`='$uid'";
								$data['job_data']=$this->Crud_modal->all_data_select('*','applied_for_jobs',$where,'afj_id asc');
								$data['blood']=$this->Crud_modal->fetch_alls('master_blood_group','name asc');
								$data['state']=$this->Crud_modal->fetch_alls('masters_states','state asc');
								$this->load->view('templetes/head',$data);
								$this->load->view('templetes/header',$data);
								$this->load->view('caf-1',$data);
								$this->load->view('templetes/footer');
								$this->load->view('templetes/foot');
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
		public function caf_two()
	{
	        try
		      	{
							  if($this->session->userdata('user_email')!='' || $this->session->userdata('user_email')!=null)
								{
								$data['title']='Monday Morning Caf Step Two';
								$uid=$this->session->userdata('mm_uid');
								$where="`mm_uid`='$uid'";
								$data['job_data']=$this->Crud_modal->all_data_select('*','applied_for_jobs',$where,'afj_id asc');
								$this->load->view('templetes/head',$data);
								$this->load->view('templetes/header',$data);
								$this->load->view('caf-2',$data);
								$this->load->view('templetes/footer');
								$this->load->view('templetes/foot');
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
	public function step_one_save()
	{
		     try
		      	{
							  if($this->session->userdata('user_email')!='' || $this->session->userdata('user_email')!=null)
								{   
									$field=array(
										
										'applied_for'=>$this->input->post('applied_for'),
										'name'=>$this->input->post('name'),
										'surname'=>$this->input->post('surname'),
										'fa_hu_name'=>$this->input->post('fa_hu_name'),
										'fa_hu_occupation'=>$this->input->post('fa_hu_occupation'),
										'present_addr'=>$this->input->post('present_addr'),
										'permanent_addr '=>$this->input->post('permanent_addr'),
										'correspond_at'=>$this->input->post('correspond_at'),
										'residence_cell'=>$this->input->post('residence_cell'),
										'cell'=>$this->input->post('cell'),
										'emergency_cell'=>$this->input->post('emergency_cell'),
										'age'=>$this->input->post('age'),
										'dob'=>$this->input->post('dob'),
										'current_city'=>$this->input->post('current_city'),
										'blood_group'=>$this->input->post('blood_group'),
										'disability'=>$this->input->post('disability'),
										'accommodation'=>$this->input->post('accommodation'),
										);
									$uid=$this->session->userdata('mm_uid');
									 $where="`mm_uid`='$uid'";
									 $data['data_added']= $this->Crud_modal->update_data($where,'applied_for_jobs',$field);
									 if($data['data_added']==1)
									 {
										  redirect(base_url().'caf-two','refresh');
									 }
								}
						}
				catch (Exception $e)
	        {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
          }		 
	}
	public function step_two_save()
	{
		       try
		      	{
							  if($this->session->userdata('user_email')!='' || $this->session->userdata('user_email')!=null)
								{   
									$field=array(
										'ssc_institution'=>$this->input->post('ssc_institution'),
										'ssc_year_pass'=>$this->input->post('ssc_year_pass'),
										'ssc_marks_per'=>$this->input->post('ssc_marks_per'),
										'ssc_achievements'=>$this->input->post('ssc_achievements'),
										'hsc_institution'=>$this->input->post('hsc_institution'),
										'hsc_year_pass'=>$this->input->post('hsc_year_pass'),
										'hsc_marks_per'=>$this->input->post('hsc_marks_per'),
										'hsc_achievements '=>$this->input->post('hsc_achievements'),
										'grad_degree'=>$this->input->post('grad_degree'),
										'grad_institution'=>$this->input->post('grad_institution'),
										'grad_year_pass'=>$this->input->post('grad_year_pass'),
										'grad_marks_per'=>$this->input->post('grad_marks_per'),
										'grad_achievements'=>$this->input->post('grad_achievements'),
										'pg_degree'=>$this->input->post('pg_degree'),
										'pg_institution'=>$this->input->post('pg_institution'),
										'pg_year_pass'=>$this->input->post('pg_year_pass'),
										'pg_marks_per'=>$this->input->post('pg_marks_per'),
										'pg_achievements'=>$this->input->post('pg_achievements'),
										'cat_score'=>$this->input->post('cat_score'),
										'gmat_score'=>$this->input->post('gmat_score'),
										'other_bschool_detail'=>$this->input->post('other_bschool_detail'),
										'jee_core'=>$this->input->post('jee_core'),
										'gate_score'=>$this->input->post('gate_score'),
										);
									 $uid=$this->session->userdata('mm_uid');
									 $where="`mm_uid`='$uid'";
									 $data['data_added']= $this->Crud_modal->update_data($where,'applied_for_jobs',$field);
									 if($data['data_added']==1)
									 {
										  redirect(base_url().'caf-three','refresh');
									 }
								}
						}
				catch (Exception $e)
	        {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
          }	
	}
	public function caf_three()
	{
		    try
		      	{
							  if($this->session->userdata('user_email')!='' || $this->session->userdata('user_email')!=null)
								{
								$data['title']='Monday Morning Caf Step Two';
								$uid=$this->session->userdata('mm_uid');
								$where="`mm_uid`='$uid'";
								$data['job_data']=$this->Crud_modal->all_data_select('*','applied_for_jobs',$where,'afj_id asc');
								$this->load->view('templetes/head',$data);
								$this->load->view('templetes/header',$data);
								$this->load->view('caf-3',$data);
								$this->load->view('templetes/footer');
								$this->load->view('templetes/foot');
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
		public function step_three_save()
	{
		       try
		      	{
							  if($this->session->userdata('user_email')!='' || $this->session->userdata('user_email')!=null)
								{   
									$field=array(
										'org_name1'=>$this->input->post('org_name1'),
										'org_name2'=>$this->input->post('org_name2'),
										'org_name3'=>$this->input->post('org_name3'),
										'designnation_1'=>$this->input->post('designnation_1'),
										'designnation_2'=>$this->input->post('designnation_2'),
										'designnation_3'=>$this->input->post('designnation_3'),
										'emp1_from'=>$this->input->post('emp1_from'),
										'emp2_from '=>$this->input->post('emp2_from'),
										'emp3_from'=>$this->input->post('emp3_from'),
										'ctc_join_1'=>$this->input->post('ctc_join_1'),
										'ctc_join_2'=>$this->input->post('ctc_join_2'),
										'ctc_join_3'=>$this->input->post('ctc_join_3'),
										'ctc_left_1'=>$this->input->post('ctc_left_1'),
										'ctc_left_2'=>$this->input->post('ctc_left_2'),
										'ctc_left_3'=>$this->input->post('ctc_left_3'),
										'reason_leave1'=>$this->input->post('reason_leave1'),
										'reason_leave2'=>$this->input->post('reason_leave2'),
										'reason_leave3'=>$this->input->post('reason_leave3'),
										'salry_expect'=>$this->input->post('salry_expect'),
										'notice_period'=>$this->input->post('notice_period'),
										'ref_1_name'=>$this->input->post('ref_1_name'),
										'ref_2_name'=>$this->input->post('ref_2_name'),
										'ref_1_add'=>$this->input->post('ref_1_add'),
										'ref_2_add'=>$this->input->post('ref_2_add'),
										'ref_1_occu'=>$this->input->post('ref_1_occu'),
										'ref_2_occu'=>$this->input->post('ref_2_occu'),
										'ref_1_cell'=>$this->input->post('ref_1_cell'),
										'ref_2_cell'=>$this->input->post('ref_2_cell'),
										'discrete_enquiries'=>$this->input->post('discrete_enquiries'),
										'source_name'=>$this->input->post('source_name'),
										'refrered_name'=>$this->input->post('refrered_name'),
										);
									 $uid=$this->session->userdata('mm_uid');
									 $where="`mm_uid`='$uid'";
									 $data['data_added']= $this->Crud_modal->update_data($where,'applied_for_jobs',$field);
									 if($data['data_added']==1)
									 {
										  redirect(base_url().'caf-four','refresh');
									 }
								}
						}
				catch (Exception $e)
	        {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
          }	
	}
	public function caf_four()
	{
		    try
		      	{
							  if($this->session->userdata('user_email')!='' || $this->session->userdata('user_email')!=null)
								{
								$data['title']='Monday Morning Caf Step Two';
								$uid=$this->session->userdata('mm_uid');
								$where="`mm_uid`='$uid'";
								$data['job_data']=$this->Crud_modal->all_data_select('*','applied_for_jobs',$where,'afj_id asc');
								$this->load->view('templetes/head',$data);
								$this->load->view('templetes/header',$data);
								$this->load->view('caf-4',$data);
								$this->load->view('templetes/footer');
								$this->load->view('templetes/foot');
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
		public function step_four_save()
	{
		       try
		      	{
							  if($this->session->userdata('user_email')!='' || $this->session->userdata('user_email')!=null)
								{   
									$field=array(
										'father_age'=>$this->input->post('father_age'),
										'mother_age'=>$this->input->post('mother_age'),
										'w_or_h_age'=>$this->input->post('w_or_h_age'),								
										'father_edu'=>$this->input->post('father_edu'),
										'mother_edu'=>$this->input->post('mother_edu'),
										'w_or_h_edu '=>$this->input->post('w_or_h_edu'),
										'w_or_h_occu'=>$this->input->post('w_or_h_occu'),
										
										'father_occu'=>$this->input->post('father_occu'),
										'mother_occu'=>$this->input->post('mother_occu'),
										'crime_involve'=>$this->input->post('crime_involve'),
										'crime_detail'=>$this->input->post('crime_detail'),
										'draft_status'=>1
										
										);
									 $uid=$this->session->userdata('mm_uid');
									 $where="`mm_uid`='$uid'";
									 $data['data_added']= $this->Crud_modal->update_data($where,'applied_for_jobs',$field);
									 if($data['data_added']==1)
									 {
										   $to =$this->session->userdata('user_email');
									
										$subject = 'Thank you for applying';
										
										$from = 'MondayMorning@mondaymorning.co.in';
										    $headers  = 'MIME-Version: 1.0' . "\r\n";
										$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
										$headers .= 'From: '.$from."\r\n".
										'Reply-To: '.$from."\r\n" .
										'X-Mailer: PHP/' . phpversion();
										// Create email headers
										$name=$this->session->userdata('name');
										$email=$to ;
									
										$date=date("F j, Y");
									
										// Compose a simple HTML email message
										$message = $this->caf_email($name,$email,$date);
										//$message="test mail from saurabh";
										mail($to, $subject, $message, $headers);
										$this->session->unset_userdata('user_email');
										$this->session->unset_userdata('mm_uid');
										$this->session->unset_userdata('name');
								
										redirect(base_url().'thank-you','refresh');
									 }
								}
						}
				catch (Exception $e)
	        {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
          }	
	}
	function thankyou()
	{
		            $this->load->view('templetes/head');
								$this->load->view('templetes/header');
								$this->load->view('thankyou');
								$this->load->view('templetes/footer');
								$this->load->view('templetes/foot');
	}
	function caf_email($name,$email,$date)
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
					<strong>Thank you for applying<br>

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
}