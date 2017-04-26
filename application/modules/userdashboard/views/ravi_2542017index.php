<?php  $img_path=base_url().'upload/';?>
<style>
	.required-sp{
  content:"*";
  color:red;
}

.modal-dialog {
    width: 800px !important;
    margin: 30px auto;
}


.box-header
{background-color: #112B4E;
color: #fff;
}
.btn-col
{background-color: #587EA3;
color: #fff;
border-color: #587EA3;
}	

.box-col
{
border-top: 3px solid #112B4E;	
}
.lef{margin-left: 13px !important}
	
</style>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="lef">
        Dashboard
       <!-- <small><?php
															if(isset($user_tbl[0]['mm_user_full_name']))
															 {
																if($user_tbl[0]['mm_user_full_name']!=null || $user_tbl[0]['mm_user_full_name']!='')
																{ echo $user_tbl[0]['mm_user_full_name']; }
																else{
																	 echo $this->session->userdata('name_user');
																}
															 }
															 else{echo $this->session->userdata('name_user');}
															
															 ?></small--> 
      </h1>
	  <?php foreach($last_login as $login){?>
	  <p class="lef" style="font-style: italic;">Last Login <small><?php $d=$login->login_time; echo date("d-m-Y h:i A", strtotime($d));?></small></p>
	  <?php }?>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!--<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box 
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>3000 Users</h3>

              <p>1500 CAF User</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
           <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -
        <div class="col-lg-3 col-xs-6">
          <!-- small box 
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Assignment<br> Complete</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -
        <div class="col-lg-3 col-xs-6">
          <!-- small box 
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Top 3</h3>

              <p>High Score</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -
        <div class="col-lg-3 col-xs-6">
          <!-- small box -
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -
      </div>
      --><!-- /.row -->
     
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-col">
            <div class="box-header with-border">
              <h3 class="box-title">Monday Morning Profile</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table class="table table-bordered">
                
                <tr>
                  <td>Personal Profile</td>
                  <!--<td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%">55%</div>
                    </div>
                  </td>-->
                
                  <td>
                     <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-block btn-primary btn-sm btn-col">Edit</button></td>
     <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Personal Profile</h4>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <form role="form" action="<?php echo base_url()?>update-profile" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                  <label for="exampleInputname">Full Name<span  class="required-sp">*</span></label>
                  <input type="text" name="mm_user_full_name" value="<?php
															if(isset($user_tbl[0]['mm_user_full_name']))
															 {
																if($user_tbl[0]['mm_user_full_name']!=null || $user_tbl[0]['mm_user_full_name']!='')
																{ echo $user_tbl[0]['mm_user_full_name']; }
																else{
																	 echo $this->session->userdata('name_user');
																}
															 }
															 else{echo $this->session->userdata('name_user');}
															
															 ?>" required class="form-control" pattern="[a-zA-Z\s]+"  placeholder="myname" maxlength="30">
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Father / Husband Name<span  class="required-sp">*</span></label>
                  <input type="text" name="father_name" class="form-control" value="<?php
															if(isset($user_data_tbl[0]['father_name']))
															 {
																if($user_data_tbl[0]['father_name']!=null || $user_data_tbl[0]['father_name']!='')
																{ echo $user_data_tbl[0]['father_name']; }
																
															 }?>"  id="" placeholder="name" pattern="[a-zA-Z\s]+" maxlength="30">
                </div>
                </div>
                <div class="col-lg-6">
                   <div class="form-group">
                <label>DOB :<span  class="required-sp">*</span></label>

                <div class="input-group date">
				
				
						
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  	
                  <input type="text" name="dob" value="<?php $d=$user_data_tbl[0]['dob'];  if($d != "0000-00-00"){ echo date('d-m-Y',strtotime($d)) ;}?>" class="form-control pull-right" id="dob_caf" placeholder="dd-mm-yyyy"></input>
				
                </div>
                <!-- /.input group -->
              </div>
                </div>
                
               <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Email Address</label>
                  <input type="email" class="form-control" disabled  value="<?php echo $this->session->userdata('user_name')?>" required  placeholder="myemail@gmail.com" maxlength="30">
                </div>
                </div>
                 <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Address<span  class="required-sp">*</span></label>
                  <input type="text" name="present_addr" class="form-control" id="addressnotnumber" value="<?php if(isset($user_data_tbl[0]['present_addr']))
															 {
																if($user_data_tbl[0]['present_addr']!=null || $user_data_tbl[0]['present_addr']!='')
																{ echo $user_data_tbl[0]['present_addr']; }
																
															 }?>"  required placeholder="Present Address" maxlength="80">
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Contact No<span  class="required-sp">*</span></label>
                  <input type="text" name="contact_number" class="form-control" id="contactnumber"   value="<?php if(isset($user_data_tbl[0]['contact_number']))
															 {
																if($user_data_tbl[0]['contact_number']!=null || $user_data_tbl[0]['contact_number']!='')
																{ echo $user_data_tbl[0]['contact_number']; }
																
															 }?>" required placeholder="eg. 8545784512" maxlength="10">
                </div>
                </div>
                      <!-- select -->
                 <!--      <div class="col-lg-4">
               <div class="form-group">
                  <label>Country<span  class="required-sp">*</span></label>
                  <select class="form-control" required name="country" id="country">
                    <option value="">---Select Country ---</option>
					<?php foreach($country as $countries){?>
                    <option value="<?php echo $countries['cid']?>"><?php echo $countries['name']?></option>
					<?php }?>
                    
                 
                  </select>
                </div>
                      </div>-->
                      <!-- select -->
					   
                      <div class="col-lg-6">
                <div class="form-group">
                  <label>State<span  class="required-sp">*</span></label>
                  <select class="form-control" required name="state" id="state">
                    <option value="">---Select State ---</option>
					<?php foreach($state as $st){?>
					 <option <?php if($user_data_tbl[0]['state']==$st['sid']){echo 'selected=selected';}?>   value="<?php echo $st['sid']?>"><?php echo $st['name']?></option>
					 <?php }?>
                 
                    
                  </select>
                </div>
                      </div>
                 <!-- select -->
                 <div class="col-lg-6">
                <div class="form-group">
                  <label>City<span  class="required-sp">*</span></label>
                  <select class="form-control" required id="city" name="city">
                    <option>---Select City ----</option>
						<?php $all_city=$this->Userdashboard_modal->cityname($user_data_tbl[0]['state']);
						
					
						?>
			<?php foreach($all_city as $ct){?>
					 <option <?php if($user_data_tbl[0]['city']==$ct['ci_id']){echo 'selected=selected';}?>  value="<?php echo $ct['ci_id']?>"><?php echo $ct['name']?></option>
					 <?php }?>
			
					
                    
                    
                  </select>
                </div>
                  <!-- /input-group --> <!-- Date -->
                 </div>
                 <div class="col-lg-6">
                  <!-- /input-group -->
                  <div class="form-group">
                  <label for="exampleInputFile">Upload Image</label>
                  <input type="file" id="s_img"  name="user_image">

                </div>
                </div>
					   <div class="col-lg-6">
                  <!-- /input-group -->
                  <div class="form-group">
                  <?php if($user_data_tbl[0]['image']!="" || $user_data_tbl[0]['image']!=""){$img=$user_data_tbl[0]['image'];}else{$img="user.jpg";}?>
                  <img src="<?php echo $img_path.$img?>" id="img_pre" width="100px" height="100px">
                </div>
                </div>
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <!-- /.row -->
                
              </div>
              <!-- /.box-body -->
            
              <div class="box-footer">
                <button style="float:right" type="submit" class="btn btn-primary">Submit</button>
              </div>
            
          </div></form>
        <!-- form END -->
          <!-- /.box -->
      </div>
      
    </div>
  </div>       </tr>
                <tr>
                  <td>Educational Profile</td>
                 <!-- <td> <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%">70%</div>
                    </div>
                  </td>-->
                   <td>
                     <button type="button" data-toggle="modal" data-target="#myModaleducation" class="btn btn-block btn-primary btn-sm btn-col">Edit</button></td>
     <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModaleducation" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Education Profile</h4>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url()?>education-update" method="post">
              <div class="box-body">
                <div class="row">
                
                <div class="col-lg-6">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Highest Qualification<span  class="required-sp">*</span></label>
                  <select class="form-control select2" style="width: 100%;" required name="high_q">
					<option value="">---Select Qualification---</option>
                  <option <?php if($user_data_tbl[0]['high_q']=='MBA'){echo 'selected=selected';}?>  value="MBA">MBA</option>
                  <option <?php if($user_data_tbl[0]['high_q']=='MCA'){echo 'selected=selected';}?>  value="MCA">MCA</option>
                  <option <?php if($user_data_tbl[0]['high_q']=='BBA'){echo 'selected=selected';}?>  value="BBA">BBA</option>
                  <option <?php if($user_data_tbl[0]['high_q']=='BCA'){echo 'selected=selected';}?>  value="BCA">BCA</option>
                  
                </select>
                </div>
                </div>
                
                
               <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                   <!-- /.form-group -->
              <div class="form-group">
                <label>College / University<span  class="required-sp">*</span></label>
                <select class="form-control select2" style="width: 100%;" name="insti" required >
					<option value="">---Select Institute---</option>
                  <option <?php if($user_data_tbl[0]['insti']=='Indian Institute of Management'){echo 'selected=selected';}?>  value="Indian Institute of Management">Indian Institute of Management</option>
                  <option <?php if($user_data_tbl[0]['insti']=='Indian Institute of Foreign Trade (IIFT)'){echo 'selected=selected';}?>  value="Indian Institute of Foreign Trade (IIFT)">Indian Institute of Foreign Trade (IIFT)</option>
                  <option <?php if($user_data_tbl[0]['insti']=='XLRI - Xavier School of Management'){echo 'selected=selected';}?> value="XLRI - Xavier School of Management">XLRI - Xavier School of Management</option>
                </select>
              </div>
              <!-- /.form-group -->
                </div>
                 <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                   <div class="form-group">
                  <label for="exampleInputEmail1">City<span  class="required-sp">*</span></label>
                  <input type="text" required  pattern="[a-zA-Z\s]+" value="<?php echo $user_data_tbl[0]['add_insti']?>" class="form-control" id="exampleInputEmail1" placeholder="eg. Delhi" maxlength="80" name="add_insti">
                </div>
                </div>
              <!--  <div class="col-lg-6">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Complete Education from CAF<span  class="required-sp">*</span></label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Education" maxlength="30">
                </div>
                </div>-->
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <!-- /.row -->
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button style="float:right" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        <!-- form END -->
          <!-- /.box -->
      </div>
    </div>
  </div> </tr>
                <tr>
                  <td>Work Experience</td>
                 <!-- <td><div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%">30%</div>
                    </div>
                  </td>-->
                 <td>
                     <button type="button" data-toggle="modal" data-target="#myModalexperience" class="btn btn-block btn-primary btn-sm btn-col">Edit</button></td>
     <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModalexperience" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Work Experience</h4>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  action="<?php echo base_url()?>work-exp-update" method="post">
              <div class="box-body">
                <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Organization Name<span  class="required-sp">*</span></label>
                  <input type="text" name="current_org_name"  pattern="[a-zA-Z\s]+" required value="<?php echo $user_data_tbl[0]['current_org_name']?>" class="form-control" id="" placeholder="eg. TKC" maxlength="30">
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Designation<span  class="required-sp">*</span></label>
                  <input type="text" name="curr_designation" pattern="[a-zA-Z\s]+" required value="<?php echo $user_data_tbl[0]['curr_designation']?>" class="form-control" id="" placeholder="eg. HR" maxlength="30">
                </div>
                </div>
                
               <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                  <!-- Date and time range -->
              <div class="form-group">
                <label>Time Period<span  class="required-sp">*</span></label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input type="text"  maxlength="70" required  pattern="[0-9]+" name="time_period" value="<?php echo $user_data_tbl[0]['time_period']?>"  class="form-control pull-right" id="">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
                </div>
                 <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                   <div class="form-group">
                  <label for="">Location<span  class="required-sp">*</span></label>
                  <input type="text"   required  name="location" pattern="[a-zA-Z\s]+"  value="<?php echo $user_data_tbl[0]['location']?>" class="form-control" id="" placeholder="Present Address" maxlength="80">
                </div>
                </div>
        
                </div>
                <!-- /.col-lg-6 -->
              </div>
              <!-- /.row -->
                
              </div>
              <!-- /.box-body -->
             <div class="box-footer">
                <button style="float:right" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        <!-- form END -->
          <!-- /.box -->
       
      </div>
      
    </div>
  </div>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
           
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="box box-col">
            <div class="box-header with-border">
              <h3 class="box-title">Recent Assignment</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <td>1.</td>
                  <td>Assignment 1</td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm btn-col">View</button></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Assignment 2</td>
                 <td><button type="button" class="btn btn-block btn-primary btn-sm btn-col">View</button></td>
                </tr>
                <tr>
                 <td>3.</td>
                  <td>Assignment 3</td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm btn-col">View</button></td>
                </tr>
               
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
     </section>
    <!-- /.content -->
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-col">
            <div class="box-header with-border">
              <h3 class="box-title">CAF Certification for Job Apply</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table class="table table-bordered">
               <tr>
                  <td>Personal Profile</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">55%</span></td>
                   <td>
         