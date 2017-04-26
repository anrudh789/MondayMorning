<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userdashboard extends MX_Controller {
	
	
  function __construct()
   {
						parent::__construct();
						$this->load->model('Userdashboard_modal');
						$this->load->model('crud/Crud_modal');
						$this->load->helper('url');
						$this->load->library('session');
						$this->load->library('image_lib');
									
   }
	public function dashboard()
	{
		  try
			{
				   
			   if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
				    $data['title']='User Dashboard for Monday Morning';
						$uid=$this->session->userdata('mm_uid');
						$where="`mm_uid`='$uid'";
						$where_user_data="`uid`='$uid'";
						$data['user_tbl']=$this->Crud_modal->all_data_select('*','user',$where,'mm_uid asc');
						$data['user_data_tbl']=$this->Crud_modal->all_data_select('*','user_data',$where_user_data,'uid asc');
						$data['country']=$this->Crud_modal->fetch_alls('countries','name asc');
						//$data['state']=$this->Crud_modal->fetch_alls('states','name asc');
								$where_ug="de_category=1";
								$where_pg="de_category=2";
							
								$data['board']=$this->Crud_modal->fetch_alls('master_board','board_name asc');
								$data['ug']=$this->Crud_modal->all_data_select('*','master_degree',$where_ug,'degree_name asc');
							  $data['pg']=$this->Crud_modal->all_data_select('*','master_degree',$where_pg,'degree_name asc');
								$data['uni']=$this->Crud_modal->fetch_alls('master_university','un_name  asc');
						$where_state_id="`country_id`='101'";
						$data['state']=$this->Crud_modal->all_data_select('*','states',$where_state_id,'name asc');
						$data['city']=$this->Crud_modal->fetch_alls('cities','name asc');
						$this->load->view('usertempletes/head',$data);
						$this->load->view('usertempletes/header',$data);	
					  $this->load->view('usertempletes/sidebar',$data);
						$this->load->view('index',$data);
						$this->load->view('usertempletes/footer');
						//$this->load->view('admintempletes/foot');
				 }
				  else
				 {
					
				    redirect(base_url().'register','refresh');
			     }
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
		public function user_profile_update()
		{
			   try
			{
				   
			   if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
				         
									$uid=$this->session->userdata('mm_uid');
									$where_user="`mm_uid`='$uid'";
									
									
									$field_user_tbl=array('mm_user_full_name'=>$this->input->post('mm_user_full_name'));
									$data['data_update']= $this->Crud_modal->update_data($where_user,'user',$field_user_tbl);
									$dob_break=explode('/',$this->input->post('dob'));
									if(isset($dob_break[2]))
									{
									$dob=$dob_break[2].'-'.$dob_break[0].'-'.$dob_break[1];
				            }
										else{$dob=$this->input->post('dob');}
										
										
										
                   if($_FILES["user_image"]["name"]!="" || $_FILES["user_image"]["name"]!=null){
											$target_dir =$_SERVER['DOCUMENT_ROOT']."/mmt/upload/";
								  	$image = mt_rand(99,999).'-'.$_FILES["user_image"]["name"];
									//exit;
		                $target_file = $target_dir .$image;
										if(move_uploaded_file($_FILES["user_image"]["tmp_name"], $target_file)){
								      	$field_user_data_tbl=array(
																						 'father_name'=>$this->input->post('father_name'),
																						 'fa_hu_occupation'=>$this->input->post('fa_hu_occupation'),
																						 'dob'=>$dob,
																						 'present_addr'=>$this->input->post('present_addr'),
																						 'permanent_addr'=>$this->input->post('permanent_addr'),
																						 'emergency_cell'=>$this->input->post('emergency_cell'),
																						 'contact_number'=>$this->input->post('contact_number'),
																						 'country'=>$this->input->post('country'),
																						 'state'=>$this->input->post('state'),
																						 'city'=>$this->input->post('city'),
																						 'image'=>$image,
																						 );
													 }}
													 else{
														
														
														$field_user_data_tbl=array(
																						 'father_name'=>$this->input->post('father_name'),
																						 'fa_hu_occupation'=>$this->input->post('fa_hu_occupation'),
																						 'dob'=>$dob,
																						 'present_addr'=>$this->input->post('present_addr'),
																						 'permanent_addr'=>$this->input->post('permanent_addr'),
																						 'emergency_cell'=>$this->input->post('emergency_cell'),
																						 'contact_number'=>$this->input->post('contact_number'),
																						 'country'=>$this->input->post('country'),
																						 'state'=>$this->input->post('state'),
																						 'city'=>$this->input->post('city'),
																					
																						 );
													 }
		
								    $where_user_data="`uid`='$uid'";
										$data['data_update']= $this->Crud_modal->update_data($where_user_data,'user_data',$field_user_data_tbl);
										
									if($data['data_update']==1)
									 {
										   $this->session->set_flashdata('sucess', 'Record Saved Sucessfully.');
										  redirect(base_url().'user-dashboard','refresh');
									 }
					       
									else{
										     $this->session->set_flashdata('error', 'Some Error Occured Please try again.');
										  redirect(base_url().'user-dashboard','refresh');
									}
				 }
				  else
				 {
					
				    redirect(base_url().'register','refresh');
			     }
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
		}
		public function education_update()
		{
			    try
			{
				   
			   if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
				         
									$uid=$this->session->userdata('mm_uid');
									$where_user="`uid`='$uid'";
									
									  	$field_user_data_tbl=array(
																						 'high_q'=>$this->input->post('high_q'),
																						 'insti'=>$this->input->post('insti'),
																						 'add_insti'=>$this->input->post('add_insti'),
																						 
																						 ); 
								    $where_user_data="`uid`='$uid'";
										$data['data_update']= $this->Crud_modal->update_data($where_user,'user_data',$field_user_data_tbl);
										
									if($data['data_update']==1)
									 {
										   $this->session->set_flashdata('sucess', 'Record Saved Sucessfully.');
										  redirect(base_url().'user-dashboard','refresh');
									 }
				 }
				 
				 else
				 {
					
				    redirect(base_url().'register','refresh');
			     }
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
			
		}
				public function work_experience_update()
		{
			    try
			{
				   
			   if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
				         
									$uid=$this->session->userdata('mm_uid');
									$where_user="`uid`='$uid'";
									
									  	$field_user_data_tbl=array(
																						 'current_org_name'=>$this->input->post('current_org_name'),
																						 'curr_designation'=>$this->input->post('curr_designation'),
																						 'time_period'=>$this->input->post('time_period'),
																						 'location'=>$this->input->post('location'),
																						 
																						 ); 
								    $where_user_data="`uid`='$uid'";
										$data['data_update']= $this->Crud_modal->update_data($where_user,'user_data',$field_user_data_tbl);
										
									if($data['data_update']==1)
									 {
										   $this->session->set_flashdata('sucess', 'Record Saved Sucessfully.');
										   redirect(base_url().'user-dashboard','refresh');
									 }
				 }
				 
				 else
				 {
					
				    redirect(base_url().'register','refresh');
			     }
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
			
		}
    public function fill_state_dropdown()
		{
			  try
			{
				   
			   if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
					    $cid=  $this->input->post('Country_id');
							$where="`country_id`='$cid'";
							$data['state']=$this->Crud_modal->all_data_select('*','states',$where,'name asc');
							return $this->load->view('state',$data);
				 }
				 else
				 {
					
				    redirect(base_url().'register','refresh');
			   }
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
		}
		public function fill_city_dd()
		{
			  try
			{
				   
			   if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
					    $cid=  $this->input->post('State_id');
							$where="`state_id`='$cid'";
							$data['city']=$this->Crud_modal->all_data_select('*','cities',$where,'name asc');
							return $this->load->view('city',$data);
				 }
				 else
				 {
					
				    redirect(base_url().'register','refresh');
			   }
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
		}
		public function mm_user_profile()
		{
			try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
					  $data['title']='User Dashboard for Monday Morning';
						$uid=$this->session->userdata('mm_uid');
						$where_user="`uid`='$uid'";
						$where="`mm_uid`='$uid'";
						$data['user_profile_data']=$this->Crud_modal->all_data_select('*','user_data',$where_user,'uid asc');
						$data['user_data_tbl']=$this->Crud_modal->all_data_select('*','user_data',$where_user,'uid asc');
						$data['user']=$this->Crud_modal->all_data_select('*','user',$where,'mm_uid asc');
					  $this->load->view('usertempletes/head',$data);
						$this->load->view('usertempletes/header',$data);	
					  $this->load->view('usertempletes/sidebar',$data);
						$this->load->view('profile',$data);
						$this->load->view('usertempletes/footer');
				 }
				 else
				 {
					
				    redirect(base_url().'register','refresh');
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
							  if($this->session->userdata('user_name')!='' || $this->session->userdata('user_name')!=null)
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
										'jee_core'=>$this->input->post('jee_core'),
										'gate_score'=>$this->input->post('gate_score'),
										);
									 $uid=$this->session->userdata('mm_uid');
									 $where="`uid`='$uid'";
									 $data['data_update']= $this->Crud_modal->update_data($where,'user_data',$field);
									if($data['data_update']==1)
									 {
										   $this->session->set_flashdata('sucess', 'Record Saved Sucessfully.');
										   redirect(base_url().'user-dashboard','refresh');
									 }
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
							  if($this->session->userdata('user_name')!='' || $this->session->userdata('user_name')!=null)
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
										'emp1_to'=>$this->input->post('emp1_to'),
										'emp2_to'=>$this->input->post('emp2_to'),
										'emp3_to'=>$this->input->post('emp3_to'),
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
										
										);
									 $uid=$this->session->userdata('mm_uid');
									 $where="`uid`='$uid'";
									 $data['data_update']= $this->Crud_modal->update_data($where,'user_data',$field);
									if($data['data_update']==1)
									 {
										   $this->session->set_flashdata('sucess', 'Record Saved Sucessfully.');
										   redirect(base_url().'user-dashboard','refresh');
									 }
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
							  if($this->session->userdata('user_name')!='' || $this->session->userdata('user_name')!=null)
								{   
									$field=array(
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
									 $where="`uid`='$uid'";
									 $data['data_update']= $this->Crud_modal->update_data($where,'user_data',$field);
									if($data['data_update']==1)
									 {
										   $this->session->set_flashdata('sucess', 'Record Saved Sucessfully.');
										   redirect(base_url().'user-dashboard','refresh');
									 }
								}
						}
				catch (Exception $e)
	        {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
          }	
	}
	public function step_five_save()
	{
		       try
		      	{
							  if($this->session->userdata('user_name')!='' || $this->session->userdata('user_name')!=null)
								{   
									$field=array(
										'father_age'=>$this->input->post('father_age'),
										'mother_age'=>$this->input->post('mother_age'),
										'spouse_age'=>$this->input->post('spouse_age'),								
										'father_edu'=>$this->input->post('father_edu'),
										'mother_edu'=>$this->input->post('mother_edu'),
										'spouse_edu '=>$this->input->post('spouse_edu'),
										'spouse_occu '=>$this->input->post('spouse_occu'),
										'father_occu'=>$this->input->post('father_occu'),
										'mother_occu'=>$this->input->post('mother_occu'),
										'crime_involve'=>$this->input->post('crime_involve'),
									
										);
									 $uid=$this->session->userdata('mm_uid');
									 $where="`uid`='$uid'";
									 $data['data_update']= $this->Crud_modal->update_data($where,'user_data',$field);
									if($data['data_update']==1)
									 {
										   $this->session->set_flashdata('sucess', 'Record Saved Sucessfully.');
										   redirect(base_url().'user-dashboard','refresh');
									 }
								}
						}
				catch (Exception $e)
	        {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
          }	
	}
		public function caf_profile()
	{
		     try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
					  $data['title']='CAF Profile for Monday Morning';
						$uid=$this->session->userdata('mm_uid');
						$where_user="`uid`='$uid'";
						$where="`mm_uid`='$uid'";
						$data['user_profile_data']=$this->Crud_modal->all_data_select('*','user_data',$where_user,'uid asc');
						$data['user_data_tbl']=$this->Crud_modal->all_data_select('*','user_data',$where_user,'uid asc');
						$data['user']=$this->Crud_modal->all_data_select('*','user',$where,'mm_uid asc');
					  $this->load->view('usertempletes/head',$data);
						$this->load->view('usertempletes/header',$data);	
					  $this->load->view('usertempletes/sidebar',$data);
						$this->load->view('caf_profile',$data);
						$this->load->view('usertempletes/footer');
				 }
				 else
				 {
					
				    redirect(base_url().'register','refresh');
			   }
			}
		
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
		public function user_data_edit()
	{
		 try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
							//$pk= $this->input->post('pk');
							$db_col= $this->input->post('name');
							$val= $this->input->post('value');
							$uid=$this->session->userdata('mm_uid');
						  $field=array($db_col=>$val);
							$where="`uid`='$uid'";
							$data['data_update']= $this->Crud_modal->update_data($where,'user_data',$field);
				}
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
			
	}
	public function asi_one()
	{
		 try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
							 $data['title']='CAF Profile for Monday Morning';
				
					  $this->load->view('usertempletes/head',$data);
						$this->load->view('usertempletes/header',$data);	
					  $this->load->view('usertempletes/sidebar',$data);
						$this->load->view('ass1',$data);
						$this->load->view('usertempletes/footer');
				}
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	public function asi_two()
	{
		 try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
							 $data['title']='CAF Profile for Monday Morning';
				
					  $this->load->view('usertempletes/head',$data);
						$this->load->view('usertempletes/header',$data);	
					  $this->load->view('usertempletes/sidebar',$data);
						$this->load->view('ass_screen2',$data);
						$this->load->view('usertempletes/footer');
				}
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	public function asi_four()
	{
		 try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
							 $data['title']='CAF Profile for Monday Morning';
				
					  $this->load->view('usertempletes/head',$data);
						$this->load->view('usertempletes/header',$data);	
					  $this->load->view('usertempletes/sidebar',$data);
						$this->load->view('assn4',$data);
						$this->load->view('usertempletes/footer');
				}
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	public function asi_three()
	{
		 try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
							 $data['title']='CAF Profile for Monday Morning';
				
					  $this->load->view('usertempletes/head',$data);
						$this->load->view('usertempletes/header',$data);	
					  $this->load->view('usertempletes/sidebar',$data);
						$this->load->view('assn3',$data);
						$this->load->view('usertempletes/footer');
				}
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
}
