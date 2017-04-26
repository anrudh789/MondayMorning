<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends MX_Controller {
	
	
  function __construct()
   {
						parent::__construct();
						$this->load->model('Crud_modal');
						$this->load->helper('url');
						$this->load->library('session'); 
   }
	//public function index()
	//{
	//	  try
	//		{
	//			    $data['title']='Sims Login';
	//					$this->load->view('templetes/header',$data);
	//					$this->load->view('index');
	//					$this->load->view('templetes/footer');
	//		}
	//		catch (Exception $e)
	//		{
	//			echo 'Caught exception: ',  $e->getMessage(), "\n";
	//		}
	//}
	public function delete_any_entry()
	{
		  try
			{
				 if($this->session->userdata('username')!="" || $this->session->userdata('username')!=null )
		     {
		          $post=$this->input->post('del_id_wid_tbl');
							$explode=explode('@',$post);
							
								$tblname=$explode[0];
								$id=$explode[1];
								$url=$explode[2];
								$fileds_ar=$explode[3];
								$column=$explode[4];
								$field=array($fileds_ar=>0);
								$where="`$column`=$id";
								$data['data_deleted_status']= $this->Crud_modal->delete_status_change($where,$tblname,$field);
								if($data['data_deleted_status']==1)
								{
									$this->session->set_flashdata('sucess', 'Data Deleted Successfully');
									redirect(base_url().$url,'refresh');
								}
				 }
		 }
			catch (Exception $e)
	   {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
      }
		
	}
		
		public function edit_data_through_ajax()
		{
			 try
			{
				 if($this->session->userdata('username')!="" || $this->session->userdata('username')!=null )
		      {
						 $whe_field=$this->input->post('WHE');
						 $id=$this->input->post('ID');
						 $tblname=$this->input->post('TBL');
						 $page=$this->input->post('PAGE');
						 $where=$whe_field.'='.$id;
					   $data['data_fetch']= $this->Crud_modal->fetch_update_data($where,$tblname);
						 echo $str_json=json_encode($data['data_fetch']);
						// print_r($data['data_fetch']);
					}
			}
			catch (Exception $e)
	    {
                echo 'Caught exception: ',  $e->getMessage(), "\n";
      }
		}
		

}