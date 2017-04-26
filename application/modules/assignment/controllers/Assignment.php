<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assignment extends MX_Controller {
	
	
  function __construct()
   {
						parent::__construct();
						$this->load->model('Assignment_modal');
						$this->load->model('crud/Crud_modal');
						$this->load->helper('url');
						$this->load->library('session');
						$this->load->library('image_lib');
					
									
   }
	
	public function asignments()
	{
		 try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
						$data['title']='CAF Profile for Monday Morning';
				    $uid=$this->session->userdata('mm_uid');
						$where_user="`uid`='$uid'";
						$where="`mm_uid`='$uid'";
						$data['user_data_tbl']=$this->Crud_modal->all_data_select('*','user_data',$where_user,'uid asc');
					
					  $this->load->view('usertempletes/head',$data);
						$this->load->view('usertempletes/header',$data);	
					  $this->load->view('usertempletes/sidebar',$data);
						$this->load->view('ass-1',$data);
						$this->load->view('usertempletes/footer');
				}
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
		public function asignments_level()
	{
		 try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
						$data['title']='CAF Profile for Monday Morning';
				    $uid=$this->session->userdata('mm_uid');
						$where_user="`uid`='$uid'";
						$where="`mm_uid`='$uid'";
						$data['user_data_tbl']=$this->Crud_modal->all_data_select('*','user_data',$where_user,'uid asc');
						$data['cc_1_tbl']=$this->Crud_modal->fetch_alls('cc1','cc1_name asc');
						$data['cc_2_tbl']=$this->Crud_modal->fetch_alls('cc2','cc2_name asc');
				   	$where_page="`uid`='$uid' and `status`='0'";
						$data['user_assign_done_page_tbl']=$this->Crud_modal->all_data_select('*','assignment_done',$where_page,'aid asc');
					  $this->load->view('usertempletes/head',$data);
						$this->load->view('usertempletes/header',$data);	
					  $this->load->view('usertempletes/sidebar',$data);
						$this->load->view('level',$data);
						$this->load->view('usertempletes/footer');
				}
				else{redirect(base_url().'register','refresh');}
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	public function asignment_start()
	{
		try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
					   $po=trim($this->input->post('Assign_lvl'));
						 $break=explode('-',$po);
						 $assig_id=$break[0];
						 $lvl=$break[1];
						 $uid=$this->session->userdata('mm_uid');
						 $where="`ms_assign_id`='$assig_id' and `uid`='$uid' and `level_name`='$lvl'";
						 $data['assign_val']=$this->Crud_modal->all_data_select('*','assignment_done',$where,'uid asc');
					//	 print_r($data['assign_val']);
					//	 exit;
						 if($data['assign_val']=="" || $data['assign_val']==null)
						 {
							 $field=array(
												'ms_assign_id'=>$break[0],
												'level_id'=>1,
												'level_name'=>$break[1],
												'start_time'=>date('Y-m-d H:i:s'),
												'uid'=>$uid,
												'last_screen'=>$this->input->post('Step')
												);
								 
									$data['data_added']= $this->Crud_modal->data_insert('assignment_done',$field);
									if($data['data_added']==1)
									{
										 echo '1';
									}
									 else{ echo '0';}
						 }
						 else{
						 if($data['assign_val'][0]['upload_file_count']==3 && $data['assign_val'][0]['status']==1)
						 {
							$field=array(
												'ms_assign_id'=>$break[0],
												'level_id'=>1,
												'level_name'=>$break[1],
												'start_time'=>date('Y-m-d H:i:s'),
												'uid'=>$uid,
												'last_screen'=>$this->input->post('Step')
												);
								 
									$data['data_added']= $this->Crud_modal->data_insert('assignment_done',$field);
									if($data['data_added']==1)
									{
										 echo '1';
									}
									 else{ echo '0';}
						 }
						
						 else
						 {
							 echo '10';
						 }
		 }
				}
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	public function xls_upload_ajax()
	{
		try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
					        									
										$po=trim($this->input->post('assignlvl'));
										$break=explode('-',$po);
										$assig_id=$break[0];
										$uid=$this->session->userdata('mm_uid');
										$lvl=$break[1];
										$where="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level_name`='$lvl' and `status`='0'";
						        $data['user_assign_done_tbl']=$this->Crud_modal->all_data_select('*','assignment_done',$where,'aid asc');
										
										$where_upload="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level`='$lvl' and `final_status`='0' and `file_type`='xlsx'";
						        $data['user_file_tbl']=$this->Crud_modal->all_data_select('*','assignment_files',$where_upload,'aid asc');
									//	print_r($data['user_file_tbl']);
										 if(isset($data['user_file_tbl'][0]['ms_assign_id'])!="")
										 {
											
											     	$folder=$_SERVER['DOCUMENT_ROOT']."/mmt/upload/".$uid.'/';
														if(!is_dir($folder)) {
														      mkdir($folder,'0777');
														}
											chmod($folder, 0777);
											   $target_dir =$_SERVER['DOCUMENT_ROOT']."/mmt/upload/".$uid.'/';
										
														$file_name = mt_rand(99,999).'-'.$_FILES["up_xls"]["name"];
														$target_file = $target_dir .$file_name;
														if(move_uploaded_file($_FILES["up_xls"]["tmp_name"], $target_file))
														{
															   $unfile=$data['user_file_tbl'][0]['file_name'];
															  unlink($target_dir.$unfile);
													   	$fields=array(
																		 'file_name'=>$file_name,
																		 'upload_time'=>date('Y-m-d H:i:s'),
																		 'final_status'=>0,
																		 'shown_file_name'=>$_FILES["up_xls"]["name"],
																		 'uid'=>$uid,
																		 'level'=>$lvl,
																		 );
										$where_upload="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level`='$lvl' and `final_status`='0' and `file_type`='xlsx'";
										$data['data_update']= $this->Crud_modal->update_data($where_upload,'assignment_files',$fields);
											
											 echo "1";
										}
										else{echo "0";}
										 }
										 else{
											$folder=$_SERVER['DOCUMENT_ROOT']."/mmt/upload/".$uid.'/';
											if(!is_dir($folder)) {
														      mkdir($folder,'0777');
														}
														chmod($folder, 0777);
											$target_dir =$_SERVER['DOCUMENT_ROOT']."/mmt/upload/".$uid.'/';
										
								  	  $file_name = mt_rand(99,999).'-'.$_FILES["up_xls"]["name"];
								    $target_file = $target_dir .$file_name;
										if(move_uploaded_file($_FILES["up_xls"]["tmp_name"], $target_file))
										{
											 $fields=array(
												             'aid'=>$data['user_assign_done_tbl'][0]['aid'],
																		 'ms_assign_id '=>$assig_id,
																		 'file_name'=>$file_name,
																		 'file_type'=>'xlsx',
																		 'upload_time'=>date('Y-m-d H:i:s'),
																		 'final_status'=>0,
																		 'shown_file_name'=>$_FILES["up_xls"]["name"],
																		 'uid'=>$uid,
																		 'level'=>$lvl,
																		 );
											 $data['data_added']= $this->Crud_modal->data_insert('assignment_files',$fields);
											 echo "1";
										}
										else{echo "0";}
										 }
									  
						
				 }
				 else
				 {
					  echo 'fg';
				 }
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
		
	}
	public function doc_upload_ajax()
	{
		try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
					        
									  $po=trim($this->input->post('assignlvl'));
										$break=explode('-',$po);
										$assig_id=$break[0];
										$uid=$this->session->userdata('mm_uid');
										$lvl=$break[1];
										$where="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level_name`='$lvl' and `status`='0' ";
						        $data['user_assign_done_tbl']=$this->Crud_modal->all_data_select('*','assignment_done',$where,'aid asc');
										
										$where_upload="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level`='$lvl' and `final_status`='0' and `file_type`='docx'";
						        $data['user_file_tbl']=$this->Crud_modal->all_data_select('*','assignment_files',$where_upload,'aid asc');
									//	print_r($data['user_file_tbl']);
										 if(isset($data['user_file_tbl'][0]['ms_assign_id'])!="")
										 {
											      $folder=$_SERVER['DOCUMENT_ROOT']."/mmt/upload/".$uid.'/';
														if(!is_dir($folder)) {
														      mkdir($folder,'0777');
														}
											chmod($folder, 0777);
											   $target_dir =$_SERVER['DOCUMENT_ROOT']."/mmt/upload/".$uid.'/';
														$file_name = mt_rand(99,999).'-'.$_FILES["up_doc"]["name"];
														$target_file = $target_dir .$file_name;
														if(move_uploaded_file($_FILES["up_doc"]["tmp_name"], $target_file))
														{
															   $unfile=$data['user_file_tbl'][0]['file_name'];
															  unlink($target_dir.$unfile);
													   	$fields=array(
																		 'file_name'=>$file_name,
																		 'upload_time'=>date('Y-m-d H:i:s'),
																		 'final_status'=>0,
																		 'shown_file_name'=>$_FILES["up_doc"]["name"],
																		 'uid'=>$uid,
																		 'level'=>$lvl,
																		 );
										$where_upload="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level`='$lvl' and `final_status`='0' and `file_type`='docx'";
										$data['data_update']= $this->Crud_modal->update_data($where_upload,'assignment_files',$fields);
											
											 echo "1";
										}
										else{echo "0";}
										 }
										 else{
											$folder=$_SERVER['DOCUMENT_ROOT']."/mmt/upload/".$uid.'/';
														if(!is_dir($folder)) {
														      mkdir($folder,'0777');
														}
											chmod($folder, 0777);
											   $target_dir =$_SERVER['DOCUMENT_ROOT']."/mmt/upload/".$uid.'/';
									 
								  	$file_name = mt_rand(99,999).'-'.$_FILES["up_doc"]["name"];
									//exit;
		                $target_file = $target_dir .$file_name;
										if(move_uploaded_file($_FILES["up_doc"]["tmp_name"], $target_file))
										{
											$fields=array(
												             'aid'=>$data['user_assign_done_tbl'][0]['aid'],
																		 'ms_assign_id '=>$assig_id,
																		 'file_name'=>$file_name,
																		 'file_type'=>'docx',
																		 'upload_time'=>date('Y-m-d H:i:s'),
																		 'final_status'=>0,
																		 'shown_file_name'=>$_FILES["up_doc"]["name"],
																		 'uid'=>$uid,
																		 'level'=>$lvl,
																		 );
											 $data['data_added']= $this->Crud_modal->data_insert('assignment_files',$fields);
											 echo "1";
										}
									    	else{echo "0";}
										 }
						
				 }
				 else
				 {
					  echo 'fg';
				 }
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	public function ppt_upload_ajax()
	{
		try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
					         
									  $po=trim($this->input->post('assignlvl'));
										$break=explode('-',$po);
										$assig_id=$break[0];
										$uid=$this->session->userdata('mm_uid');
										$lvl=$break[1];
										$where="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level_name`='$lvl' and `status`='0'";
						        $data['user_assign_done_tbl']=$this->Crud_modal->all_data_select('*','assignment_done',$where,'aid asc');
										
										
										$where_upload="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level`='$lvl' and `final_status`='0' and `file_type`='ppt'";
						        $data['user_file_tbl']=$this->Crud_modal->all_data_select('*','assignment_files',$where_upload,'aid asc');
									//	print_r($data['user_file_tbl']);
										 if(isset($data['user_file_tbl'][0]['ms_assign_id'])!="")
										 {
											
											     $folder=$_SERVER['DOCUMENT_ROOT']."/mmt/upload/".$uid.'/';
														if(!is_dir($folder)) {
														      mkdir($folder,'0777');
														}
											chmod($folder, 0777);
											   $target_dir =$_SERVER['DOCUMENT_ROOT']."/mmt/upload/".$uid.'/';
														$file_name = mt_rand(99,999).'-'.$_FILES["up_ppt"]["name"];
														$target_file = $target_dir .$file_name;
														if(move_uploaded_file($_FILES["up_ppt"]["tmp_name"], $target_file))
														{
															   $unfile=$data['user_file_tbl'][0]['file_name'];
															  unlink($target_dir.$unfile);
													   	$fields=array(
																		 'file_name'=>$file_name,
																		 'upload_time'=>date('Y-m-d H:i:s'),
																		 'final_status'=>0,
																		 'shown_file_name'=>$_FILES["up_ppt"]["name"],
																		 'uid'=>$uid,
																		 'level'=>$lvl,
																		 );
										$where_upload="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level`='$lvl' and `final_status`='0' and `file_type`='pptx'";
										$data['data_update']= $this->Crud_modal->update_data($where_upload,'assignment_files',$fields);
											
											 echo "1";
										}
										else{echo "0";}
										 }
										 else{
									 $folder=$_SERVER['DOCUMENT_ROOT']."/mmt/upload/".$uid.'/';
														if(!is_dir($folder)) {
														      mkdir($folder,'0777');
														}
											chmod($folder, 0777);
											   $target_dir =$_SERVER['DOCUMENT_ROOT']."/mmt/upload/".$uid.'/';
								  	$file_name = mt_rand(99,999).'-'.$_FILES["up_ppt"]["name"];
									//exit;
		                $target_file = $target_dir .$file_name;
										if(move_uploaded_file($_FILES["up_ppt"]["tmp_name"], $target_file))
										{
											 $fields=array(
												             'aid'=>$data['user_assign_done_tbl'][0]['aid'],
																		 'ms_assign_id '=>$assig_id,
																		 'file_name'=>$file_name,
																		 'file_type'=>'ppt',
																		 'upload_time'=>date('Y-m-d H:i:s'),
																		 'final_status'=>0,
																		 'shown_file_name'=>$_FILES["up_ppt"]["name"],
																		 'uid'=>$uid,
																		 'level'=>$lvl,
																		 );
											 $data['data_added']= $this->Crud_modal->data_insert('assignment_files',$fields);
											 echo "1";
										}
										else{echo "0";}
										 }
						
				 }
				 else
				 {
					  echo 'fg';
				 }
			}
			catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	public function start_timer()
	{
		
		  try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
					 
				$po=trim($this->input->post('Assign_lvl'));
				$break=explode('-',$po);
				$assig_id=$break[0];
				$uid=$this->session->userdata('mm_uid');
				$lvl=$break[1];
				$where="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level_name`='$lvl' and `status`='0'";
				$data['user_assign_done_tbl']=$this->Crud_modal->all_data_select('*','assignment_done',$where,'aid asc');
				$vf=$this->input->post('Con_one');
				if (!empty($vf)) {
  
				$filed=array(
										 'cn_one'=>$this->input->post('Con_one'),
										 'cn_two'=>$this->input->post('Con_two')
										 );
				
					$where_up="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level_name`='$lvl' and `status`='0'";
				 $data['data_update']= $this->Crud_modal->update_data($where_up,'assignment_done',$filed);
        	}
			  	return $this->load->view('timer',$data);
				 }
			}
				 catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
		public function count_uploaded_files()
	{
				$po=trim($this->input->post('Assign_lvl'));
				$break=explode('-',$po);
				$assig_id=$break[0];
				$uid=$this->session->userdata('mm_uid');
				$lvl=$break[1];
				$where="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level_name`='$lvl' and `status`='0'";
				$data['user_assign_done_tbl']=$this->Crud_modal->all_data_select('*','assignment_done',$where,'aid asc');
				echo  $data['user_assign_done_tbl'][0]['upload_file_count'];
			
	}
	public function count_update_files()
	{
		 try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
						$po=trim($this->input->post('Assign_lvl'));
						$break=explode('-',$po);
						$assig_id=$break[0];
						$uid=$this->session->userdata('mm_uid');
						$lvl=$break[1];
						$where="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level`='$lvl' and `final_status`='0'";
						$data['user_assign_files_tbl']=$this->Crud_modal->all_data_select('*','assignment_files',$where,'aid asc');
	       $count= 	count($data['user_assign_files_tbl']);
				 if($count==3)
				 {
						$where_up="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level_name`='$lvl' and `status`='0'";
						$field=array('upload_file_count'=>$count);
				    $data['data_update']= $this->Crud_modal->update_data($where_up,'assignment_done',$field);
				 }
	      	echo	json_encode($data['user_assign_files_tbl']);
			  	//echo  $data['user_assign_done_tbl'][0]['upload_file_count'];
				 }
			}
			 catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	public function update_done_status()
	{
		try
			{
				  
			 if($this->session->userdata('user_name')!="" || $this->session->userdata('user_name')!=null )
		     {
					   	$po=trim($this->input->post('Assign_lvl'));
				$break=explode('-',$po);
				$assig_id=$break[0];
				$uid=$this->session->userdata('mm_uid');
				$lvl=$break[1];
				$where="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level`='$lvl' and `final_status`='0'";
				$data['user_assign_files_tbl']=$this->Crud_modal->all_data_select('*','assignment_files',$where,'aid asc');
	       $count= 	count($data['user_assign_files_tbl']);
				 if($count==3)
				 {
						$where_up="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level_name`='$lvl' and `status`='0'";
						$field=array('status'=>1,'end_time'=>date('Y-m-d H:i:s'));
				    $data['data_update']= $this->Crud_modal->update_data($where_up,'assignment_done',$field);
						$where="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level`='$lvl' and `final_status`='0'";
						$field_f=array('final_status'=>1);
						  $data['data_update_files']= $this->Crud_modal->update_data($where,'assignment_files',$field_f);
						if($data['data_update']==1)
						{
							 echo 1;
						}
						else{
							    echo 0;
						}
				 }
	
			  
				 }
			}
			 catch (Exception $e)
			{
				echo 'Caught exception: ',  $e->getMessage(), "\n";
			}
	}
	public function go_to_screen()
	{
		
				$po=trim($this->input->post('Assign_lvl'));
				$break=explode('-',$po);
				$assig_id=$break[0];
				$uid=$this->session->userdata('mm_uid');
				$lvl=$break[1];
				 $where="`uid`='$uid' and `ms_assign_id`='$assig_id' and `level_name`='$lvl' and `status`='0'";
				$data['user_assign_files_tbl']=$this->Crud_modal->all_data_select('*','assignment_done',$where,'aid asc');
				echo $data['user_assign_files_tbl'][0]['last_screen'];

	}
}
