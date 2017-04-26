<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Crud_modal extends CI_model
{
 function __construct()
      {
            $this->load->database();
            $this->load->library('session');
            $this->load->library('email');
      }

 function admin_login()
      {
        try
	          {
																			$username=$this->input->post('username');
																			$password= $this->input->post('password');
																			$this->db->select('*');
																			$this->db->from('users');
																			$this->db->where(array('user_name'=>$username,'user_password'=>md5($password),'user_status'=>'1'));
																			$this->db->last_query();
																			$query = $this->db->get();
																			// $this->db->last_query();
															if($query->num_rows() == 1)
																{
																			$result=$query->row_array();
																			$uid=$result['uid'];
																			$login_user_data = array('username'=>$username,'userid'=>$uid);
																			$session_set= $this->session->set_userdata($login_user_data);
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
 function upd_current_login_status()
      {
        try
	          {
               $uid=$this->session->userdata('UID');
               $fields=array('log_status'=>0,'logout_time'=>date('Y-m-d H:i:s'),'IP_address'=>$_SERVER['REMOTE_ADDR']);
               $this->db->where('UID',$uid);
               $update= $this->db->update('login_status',$fields);
               return $update;
           }
       catch(Exception $e)
          {
              echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
          }
        
      }
 function check_email_ajax()
      {
         try
	        {
               $email=$this->input->post('Email');
               $this->db->select('*');
               $this->db->from('users');
               $this->db->where(array('user_email'=>$email));
               $query = $this->db->get();
													//	echo $this->db->last_query();
            if($query->num_rows() == 1)
             {
														  		$result=		$query->row_array();
										        	return $result;
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
						 function check_email_ajax_mem()
      {
         try
	        {
               $email=$this->input->post('Email');
               $this->db->select('*');
               $this->db->from('users');
               $this->db->where(array('user_email'=>$email));
               $query = $this->db->get();
											//			echo $this->db->last_query();
            if($query->num_rows() == 1)
             {
														  	return 1;
             
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
						function check_email_ajax_is_mem()
      {
         try
	        {
               $email=$this->input->post('Email');
               $this->db->select('*');
               $this->db->from('users');
               $this->db->where(array('user_email'=>$email,'type'=>'member','role'=>450));
               $query = $this->db->get();
											//			echo $this->db->last_query();
            if($query->num_rows() == 1)
             {
														  	return 1;
             
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
				  function delete_status_change($where,$tblname,$field)
						{
						   	try
					       {
													 $this->db->where($where);
              $update=  $this->db->update($tblname,$field);
													// $this->db->last_query();
														return $update;
					      	}
						
				   		catch(Exception $e)
          {
              echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
          }
     }
						function data_delete()
						{
							    try
					    {
										foreach ($_POST  as $key => $value)
																{
																	  $data[]= str_replace('delete=Delete','',$key.'='.$value);
																}
															 
																$str=explode('=',$data[0]);
															 $this->db->where($str[0], $str[2]);
                $del=  $this->db->delete($str[1]);
																			if($del==1)
																			{
																				  return 1;
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
						function fetch_update_data($where,$tblname)
						{
							 
									 try
					       {
															$this->db->select('*');
															$this->db->from($tblname);
															$this->db->where($where);
													 	$query = $this->db->get();
															 
															$result=		$query->row_array();
										//	echo 	 $this->db->last_query();
															return $result;
					      	}
						
				   		catch(Exception $e)
          {
              echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
          }
						}
						function update_data($where,$tblname,$field)
						{
							 try
					       {
													 $this->db->where($where);
													 	
              $update=  $this->db->update($tblname,$field);
             // echo 	 $this->db->last_query();
													//	exit;
														return $update;
					      	}
						
				   		catch(Exception $e)
          {
              echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
          }
						}
						
				public function all_data_select($fields,$tbl_name,$where,$orderby)
						{
							try
					    {
											$this->db->select($fields);
											$this->db->from($tbl_name);
								   $this->db->where($where);
											$query = $this->db->order_by($orderby);
											$query = $this->db->get();
											$result=		$query->result_array();
											return $result;
					   	}
						
						catch(Exception $e)
          {
              echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
          }
						}
						function data_insert($bl_name,$field)
						{
							  try
									{
										        $insert=		$this->db->insert($bl_name,$field);
																	
																		if($insert==1)
																			{
																				  return 1;
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
				
				
					function fetch_all($tblname,$orderby)
						{
							 
									 try
					       {
															$this->db->select('*');
															$this->db->from($tblname);
															$query = $this->db->get();
															 $query = $this->db->order_by($orderby);
															$result=		$query->row_array();
										//	echo 	 $this->db->last_query();
															return $result;
					      	}
						
				   		catch(Exception $e)
          {
              echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
          }
						}
  function fetch_alls($tblname,$orderby)
						{
							 try
									{
											$this->db->select('*');
											$this->db->from($tblname);
								  	$query = $this->db->order_by($orderby);
											$query = $this->db->get();
											$result=		$query->result_array();
											return $result;
					   	}
						
				   		catch(Exception $e)
          {
              echo 'Caught exception: ',  $this->$e->getMessage(), "\n";
          }
						}
  
//  function createThumbnail($image_name,$new_width,$new_height,$uploadDir,$moveToDir)
//{
//    $path = $uploadDir . '/' . $image_name;
//
//    $mime = getimagesize($path);
//
//    if($mime['mime']=='image/png') { 
//        $src_img = imagecreatefrompng($path);
//    }
//    if($mime['mime']=='image/jpg' || $mime['mime']=='image/jpeg' || $mime['mime']=='image/pjpeg') {
//        $src_img = imagecreatefromjpeg($path);
//    }   
//
//    $old_x          =   imageSX($src_img);
//    $old_y          =   imageSY($src_img);
//
//    if($old_x > $old_y) 
//    {
//        $thumb_w    =   $new_width;
//        $thumb_h    =   $old_y*($new_height/$old_x);
//    }
//
//    if($old_x < $old_y) 
//    {
//        $thumb_w    =   $old_x*($new_width/$old_y);
//        $thumb_h    =   $new_height;
//    }
//
//    if($old_x == $old_y) 
//    {
//        $thumb_w    =   $new_width;
//        $thumb_h    =   $new_height;
//    }
//
//    $dst_img        =   ImageCreateTrueColor($thumb_w,$thumb_h);
//
//    imagecopyresampled($dst_img,$src_img,0,0,0,0,$thumb_w,$thumb_h,$old_x,$old_y); 
//
//
//    // New save location
//    $new_thumb_loc = $moveToDir . $image_name;
//
//    if($mime['mime']=='image/png') {
//        $result = imagepng($dst_img,$new_thumb_loc,8);
//    }
//    if($mime['mime']=='image/jpg' || $mime['mime']=='image/jpeg' || $mime['mime']=='image/pjpeg') {
//        $result = imagejpeg($dst_img,$new_thumb_loc,80);
//    }
//
//    imagedestroy($dst_img); 
//    imagedestroy($src_img);
//
//    return $result;
//}
 
 
}
?>