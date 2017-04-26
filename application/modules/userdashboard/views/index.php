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
        <small><?php
															if(isset($user_tbl[0]['mm_user_full_name']))
															 {
																if($user_tbl[0]['mm_user_full_name']!=null || $user_tbl[0]['mm_user_full_name']!='')
																{ echo $user_tbl[0]['mm_user_full_name']; }
																else{
																	 echo $this->session->userdata('name_user');
																}
															 }
															 else{echo $this->session->userdata('name_user');}
															
															 ?></small>
      </h1>
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
															
															 ?>" required class="form-control"  placeholder="myname" maxlength="30">
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
																
															 }?>"  id="" placeholder="name" maxlength="30">
                </div>
                </div>
                <div class="col-lg-6">
                   <div class="form-group">
                <label>DOB :<span  class="required-sp">*</span></label>

                <div class="input-group date">
						
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="dob" value="<?php if(isset($user_data_tbl[0]['dob']))
															 {
																if($user_data_tbl[0]['dob']!=null || $user_data_tbl[0]['dob']!='')
																{ echo $user_data_tbl[0]['dob']; }
																
															 }?>" class="form-control pull-right" id="dob_caf" placeholder="yy-mm-dd">
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
                  <input type="text" name="present_addr" class="form-control" id="" value="<?php if(isset($user_data_tbl[0]['present_addr']))
															 {
																if($user_data_tbl[0]['present_addr']!=null || $user_data_tbl[0]['present_addr']!='')
																{ echo $user_data_tbl[0]['present_addr']; }
																
															 }?>" required placeholder="Present Address" maxlength="80">
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
                  <input type="text" required   value="<?php echo $user_data_tbl[0]['add_insti']?>" class="form-control" id="exampleInputEmail1" placeholder="eg. Delhi" maxlength="80" name="add_insti">
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
                  <input type="text" name="current_org_name" required value="<?php echo $user_data_tbl[0]['current_org_name']?>" class="form-control" id="" placeholder="eg. TKC" maxlength="30">
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Designation<span  class="required-sp">*</span></label>
                  <input type="text" name="curr_designation" required value="<?php echo $user_data_tbl[0]['curr_designation']?>" class="form-control" id="" placeholder="eg. HR" maxlength="30">
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
                  <input type="text"  maxlength="70" required  name="time_period" value="<?php echo $user_data_tbl[0]['time_period']?>"  class="form-control pull-right" id="">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
                </div>
                 <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                   <div class="form-group">
                  <label for="">Location<span  class="required-sp">*</span></label>
                  <input type="text"   required  name="location" value="<?php echo $user_data_tbl[0]['location']?>" class="form-control" id="" placeholder="Present Address" maxlength="80">
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
                     <button type="button" data-toggle="modal" data-target="#myModalprofile" class="btn btn-block btn-primary btn-sm btn-col">Apply Now</button></td>
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModalprofile" role="dialog">
    <div class="modal-dialog">
		<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Personal Profile</b></h4>
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
                           <label for="exampleInputEmail1">Position Applied
                              For<span class="required-sp"> * </span>
                           </label>
                           <div class="selection-box">
                              <select class="form-control" name="applied_for" >
                                 <option>--Select
                                    Apply For--</option>
                                 <option>Consultant</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  
                <div class="col-lg-6">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Full Name<span class="required-sp"> * </span> </label>
                  <input type="text" value="<?php
															if(isset($user_tbl[0]['mm_user_full_name']))
															 {
																if($user_tbl[0]['mm_user_full_name']!=null || $user_tbl[0]['mm_user_full_name']!='')
																{ echo $user_tbl[0]['mm_user_full_name']; }
																else{
																	 echo $this->session->userdata('name_user');
																}
															 }
															 else{echo $this->session->userdata('name_user');}
															
															 ?>" required class="form-control" id="" placeholder="e.g ( Jackson Doe )" maxlength="30" name="mm_user_full_name">
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Father / Husband Name<span class="required-sp"> * </span></label>
                  <input maxlength="30" type="text" value="<?php
															if(isset($user_data_tbl[0]['father_name']))
															 {
																if($user_data_tbl[0]['father_name']!=null || $user_data_tbl[0]['father_name']!='')
																{ echo $user_data_tbl[0]['father_name']; }
																
															 }?>"  required name="father_name" placeholder="e.g ( John Doe )" class="form-control" id="exampleInputEmail1">
                </div>
                </div>
                 <!-- /.col-lg-4 -->
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Father / Husband
                              Occupation</label>
                           <input type="text" class="form-control"
								  value="<?php
															if(isset($user_data_tbl[0]['fa_hu_occupation']))
															 {
																if($user_data_tbl[0]['fa_hu_occupation']!=null || $user_data_tbl[0]['fa_hu_occupation']!='')
																{ echo $user_data_tbl[0]['fa_hu_occupation']; }
																
															 }?>"
                           id="exampleInputEmail1"
                           name="fa_hu_occupation" placeholder="e.g ( Software Development )"
                           maxlength="30">
                        </div>
                     </div>

                     <!-- /.col-lg-4 -->
                <div class="col-lg-6">
                   <div class="form-group">
                <label>DOB :<span class="required-sp"> * </span></label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="dob" class="form-control pull-right" id="dob_caf1" value="<?php if(isset($user_data_tbl[0]['dob']))
															 {
																if($user_data_tbl[0]['dob']!=null || $user_data_tbl[0]['dob']!='')
																{ echo $user_data_tbl[0]['dob']; }
																
															 }?>" placeholder=" Select Your DOB (e.g. 2017-04-05)">
                </div>
                <!-- /.input group -->
              </div>
                </div>
                
               <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Email Address</label>
                  <input type="email" disabled="disabled" value="<?php echo $this->session->userdata('user_name')?>" name="user_email" class="form-control" id="" placeholder="e.g ( john@gmail.com )" maxlength="30">
                </div>
                </div>
                <!-- /.col-lg-6 -->
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Present Address (A)<span class="required-sp"> * </span></label>
                           <input type="text" name="present_addr" class="form-control" value="<?php if(isset($user_data_tbl[0]['present_addr']))
															 {
																if($user_data_tbl[0]['present_addr']!=null || $user_data_tbl[0]['present_addr']!='')
																{ echo $user_data_tbl[0]['present_addr']; }
																
															 }?>"
                           id=""
                           placeholder="Type a locality ( e.g. Noida )" maxlength="150" required="required">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Permanent Address(B)<span class="required-sp"> * </span></label>
                           <input type="text" class="form-control" id=""
                           name="permanent_addr" value="<?php if(isset($user_data_tbl[0]['permanent_addr']))
															 {
																if($user_data_tbl[0]['permanent_addr']!=null || $user_data_tbl[0]['permanent_addr']!='')
																{ echo $user_data_tbl[0]['permanent_addr']; }
																
															 }?>" placeholder="Which locality do you live in ?" maxlength="150" required="required">
                        </div>
                     </div>
                     <!-- select -->
                <div class="col-lg-6">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Contact No<span class="required-sp"> * </span></label>
                  <input type="text" value="<?php if(isset($user_data_tbl[0]['contact_number']))
															 {
																if($user_data_tbl[0]['contact_number']!=null || $user_data_tbl[0]['contact_number']!='')
																{ echo $user_data_tbl[0]['contact_number']; }
																
															 }?>"
						 maxlength="10" required="required" name="contact_number"
						 placeholder="10 digit number (e.g. XXXXXXXXXX)"
						 class="form-control" id="contactnumber_caf" placeholder="Cell"
						 maxlength="10">
                </div>
                </div>
                      <!-- select -->
                       <!-- select -->
                <div class="col-lg-6">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Emergency Contact No<span class="required-sp"> * </span></label>
                  <input maxlength="10" type="text" name="emergency_cell" value="<?php if(isset($user_data_tbl[0]['emergency_cell']))
															 {
																if($user_data_tbl[0]['emergency_cell']!=null || $user_data_tbl[0]['emergency_cell']!='' || $user_data_tbl[0]['emergency_cell']!=0)
																{ echo $user_data_tbl[0]['emergency_cell']; }
																else{echo "";}
																
															 }?>" placeholder="10 digit number (e.g. XXXXXXXXXX)" class="form-control" id="contactnumber_caf_eme" placeholder="Emergency" maxlength="10">
                </div>
                </div>
                      <!-- select 
                      <div class="col-lg-4">
                <div class="form-group">
                  <label>Country</label>
                  <select class="form-control">
                    <option>India</option>
                    
                  </select>
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
                  <select class="form-control" required name="state" id="state_caf">
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
                  <select class="form-control" required id="city_caf" name="city">
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
                  <input type="file" id="s_img_caf"  name="user_image">

                </div>
                </div>
				   <div class="col-lg-6">
                  <!-- /input-group -->
                  <div class="form-group">
                  <img src="<?php echo $img_path.$user_data_tbl[0]['image']?>" id="img_pre_caf" width="100px" height="100px">
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
                <tr>
                  <td>Educational Profile</td>
                  <td> <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow">70%</span></td>
                 
                    <td>
                     <button type="button" data-toggle="modal" data-target="#myModaledu" class="btn btn-block btn-primary btn-sm btn-col">Apply Now</button></td>
     <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModaledu" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Education Profile</b></h4>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url()?>step-two" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                      <h4 class="border-title  "><b>SSC (Class X) Examination Details</b><span></span></h4>
                      <hr>
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">(X) Board <span class="required-sp"> * </span> </label>
               
				<select class="form-control select2" style="width: 100%;" name="ssc_institution" required>
			<option value="">--Select Ssc Board--</option>
			<?php foreach($board as $boa){?>
			<option value="<?php echo $boa['bid']?>" <?php if(isset($user_data_tbl[0]['ssc_institution'])){if($user_data_tbl[0]['ssc_institution']==$boa['bid']){echo 'selected=selected'; }else{ echo '';} }?> ><?php echo $boa['board_name']?></option>
			<?php }?>
		</select>
              </div>
                </div>
            
                <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">(X) Year of Passing<span class="required-sp"> * </span></label>
                 <select class="form-control select2" style="width: 100%;" required="required" name="ssc_year_pass">
					<option value="">--Select Passing Year--</option>
                 <?php for($ye=1980;$ye<=date('Y');$ye++){?>
  <option <?php if(isset($user_data_tbl[0]['ssc_year_pass'])){if($user_data_tbl[0]['ssc_year_pass']==$ye){echo 'selected=selected'; }else{ echo '';} }?> value="<?php echo $ye?>"><?php echo $ye?></option>
	<?php }?>
                </select>
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">(X) % of Marks<span class="required-sp"> * </span></label>
                  <input type="text" value="<?php if(isset($user_data_tbl[0]['ssc_marks_per'])){echo $user_data_tbl[0]['ssc_marks_per']; }?>" required class="form-control"
				  id="" maxlength="5" pattern="[0-9]+(\.[0-9]{0,2})?" placeholder="(e.g. 84.67 or 95)" name="ssc_marks_per">
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">(X) Achievements</label>
                  <input type="text" value="<?php if(isset($user_data_tbl[0]['ssc_achievements'])){echo $user_data_tbl[0]['ssc_achievements']; }?>"
				  class="form-control" id="" placeholder="(e.g. Got Gold Madel)" maxlength="30" name="ssc_achievements">
                </div>
                  
                </div>
                 <hr>
                 <!-- x detail finish content-->
                 <div class="col-lg-12">
                    <div class="form-group">
                      <h4 class="border-title"><b>HSC (Class XII) Examination Details</b><span></span></h4>
                      <hr>
                </div>
                </div>
                 <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">(XII) Board<span class="required-sp"> * </span> </label>
                <select class="form-control select2" name="hsc_institution" required style="width: 100%;" type="text">
            
		<option value="">--Select Hsc Board--</option>
			<?php foreach($board as $boa){?>
			<option value="<?php echo $boa['bid']?>" <?php if(isset($user_data_tbl[0]['hsc_institution'])){if($user_data_tbl[0]['hsc_institution']==$boa['bid']){echo 'selected=selected'; }else{ echo '';} }?> ><?php echo $boa['board_name']?></option>
			<?php }?>
			</select>
              </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">(XII) Year of Passing<span class="required-sp"> * </span></label>
                  <select class="form-control select2" style="width: 100%;" required name="hsc_year_pass">
                  <option value="" >--Select Passing Year--</option>
                  <?php for($ye=1980;$ye<=date('Y');$ye++){?>
  <option <?php if(isset($user_data_tbl[0]['ssc_year_pass'])){if($user_data_tbl[0]['hsc_year_pass']==$ye){echo 'selected=selected'; }else{ echo '';} }?> value="<?php echo $ye?>"><?php echo $ye?></option>
	<?php }?>
                </select>
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">(XII) % of Marks<span class="required-sp"> * </span> </label>
                  <input type="text" class="form-control" id="" name="hsc_marks_per" value="<?php if(isset($user_data_tbl[0]['hsc_marks_per'])){echo $user_data_tbl[0]['hsc_marks_per']; }?>"
				  required maxlength="5" pattern="[0-9]+(\.[0-9]{0,2})?" placeholder="(e.g. 84.67)">
                </div>
                </div>
               <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">(XII) Achievements</label>
                  <input type="text" class="form-control" id=""
						 name="hsc_achievements" class="input" value="<?php if(isset($user_data_tbl[0]['hsc_achievements'])){echo $user_data_tbl[0]['hsc_achievements']; }?>"
						 placeholder="(e.g. Got Gold Madel)" maxlength="30">
                </div>
                </div>
                <hr>
                <!-- xii detail finish content-->
                 <!-- x detail finish content-->
                 <div class="col-lg-12">
                    <div class="form-group">
                      <h4 class="border-title  "><b>Graduation Examination Details</b><span></span></h4>
                      <hr>
                </div>
                </div>
               <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Degree<span class="required-sp"> * </span></label>
                  	<select name="grad_degree" required="required" class="form-control" >
			<option value="">--Select UG Degree--</option>
			<?php foreach($ug as $graduate){?>
			<option <?php if(isset($user_data_tbl[0]['grad_degree'])){if($user_data_tbl[0]['grad_degree']==$graduate['md_id']){echo 'selected=selected'; }else{ echo '';} }?>  value="<?php echo $graduate['md_id']?>"><?php echo $graduate['degree_name']?></option>
			<?php }?>
          
        </select>
                </div>
                </div>
			    <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Institution<span class="required-sp"> * </span></label>
                  		<select name="grad_institution" required="required" class="form-control" >
			<option value="">--Select Institution--</option>
			<?php foreach($uni as $univer){?>
			<option <?php if(isset($user_data_tbl[0]['grad_institution'])){if($user_data_tbl[0]['grad_institution']==$univer['mu_id']){echo 'selected=selected'; }else{ echo '';} }?>  value="<?php echo $univer['mu_id']?>"><?php echo $univer['un_name']?></option>
			<?php }?>
          
        </select>
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Year of Passing<span class="required-sp"> * </span></label>
                 		<select required="required" name="grad_year_pass" class="form-control">
			 <option value="">--Select Passing Year--</option>
 <?php for($ye=1980;$ye<=date('Y');$ye++){?>
  <option <?php if(isset($user_data_tbl[0]['grad_year_pass'])){if($user_data_tbl[0]['grad_year_pass']==$ye){echo 'selected=selected'; }else{ echo '';} }?> value="<?php echo $ye?>"><?php echo $ye?></option>
	<?php }?>
  </select>
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">% of Marks<span class="required-sp"> * </span></label>
                  <input class="form-control"  id="" required  maxlength="5" value="<?php if(isset($user_data_tbl[0]['grad_marks_per'])){echo $user_data_tbl[0]['grad_marks_per']; }?>" placeholder="(e.g. 84.67)" pattern="[0-9]+(\.[0-9]{0,2})?" type="text" name="grad_marks_per">
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Achievements</label>
                  <input type="text" class="form-control" id=""
						 value="<?php if(isset($user_data_tbl[0]['grad_achievements'])){echo $user_data_tbl[0]['grad_achievements']; }?>"
						 placeholder=" (e.g. Got Gold Madel)"" maxlength="30" name="grad_achievements">
                </div>
                </div>
                <!-- xii detail finish content-->
                <!-- x detail finish content-->
                 <div class="col-lg-12">
                    <div class="form-group">
                      <h4 class="border-title"><b>Post Graduation Examination Details</b><span></span></h4>
                      <hr>
                </div>
                    <div class="divider"></div>
                </div>
				     <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">PG Degree</label>
              <select name="pg_degree" id="pg_deg" class="form-control">
			<option value="">--Select PG Degree--</option>
			<?php foreach($pg as $pgraduate){?>
			<option <?php if(isset($user_data_tbl[0]['pg_degree'])){if($user_data_tbl[0]['pg_degree']==$pgraduate['md_id']){echo 'selected=selected'; }else{ echo '';} }?>
			value="<?php echo $pgraduate['md_id']?>"><?php echo $pgraduate['degree_name']?></option>
			<?php }?>
      </select> 
               
                </div>
                </div>
               <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">PG Institute</label>
                  
					<select name="pg_institution" id="pgi" class="form-control">
			<option value="">--Select Institution--</option>
			<?php foreach($uni as $univer){?>
			<option <?php if(isset($user_data_tbl[0]['pg_institution'])){if($user_data_tbl[0]['pg_institution']==$univer['mu_id']){echo 'selected=selected'; }else{ echo '';} }?>  value="<?php echo $univer['mu_id']?>"><?php echo $univer['un_name']?></option>
			<?php }?>
          
        </select>
               
                </div>
                </div>
              <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">(PG) Year of Passing</label>
                  <select name="pg_year_pass" id="pgy" class="form-control">
					
  <option value="">--Select Passing Year--</option>
 <?php for($ye=1980;$ye<=date('Y');$ye++){?>
  <option <?php if(isset($user_data_tbl[0]['pg_year_pass'])){if($user_data_tbl[0]['pg_year_pass']==$ye){echo 'selected=selected'; }else{ echo '';} }?> value="<?php echo $ye?>"><?php echo $ye?></option>
	<?php }?>
				  </select>
                </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                  <label>(PG) % of Marks</label>
                  <input id="pgm" maxlength="5" value="<?php
					 if(isset($user_data_tbl[0]['pg_marks_per'])){echo $user_data_tbl[0]['pg_marks_per']; }
					 ?>" pattern="[0-9]+(\.[0-9]{0,2})?" type="text" placeholder= "(e.g. 84.67)" name="pg_marks_per" class="form-control" >
                </div>
                </div>
                
               <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">(PG) Achievements</label>
                   <input type="text" class="form-control"  value="<?php if(isset($user_data_tbl[0]['pg_achievements'])){echo $user_data_tbl[0]['pg_achievements']; }?>"  id="" placeholder="(e.g. Got Gold Madel)"" maxlength="30">
                </div>
                </div>
                <div class="col-sm-12" style="padding-left: 0px !important">
                <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">CAT Score (If Applicable)</label>
                  <input type="text" class="form-control"  value="<?php
					 if(isset($user_data_tbl[0]['cat_score']))
					 {
								if($user_data_tbl[0]['cat_score']!=0)
							 {
								echo $user_data_tbl[0]['cat_score'];
							 }
							 else{echo 'NA';}
					 }
					
					 ?>" pattern="[a-zA-Z0-9_ ]+.*\S.*" maxlength="5" placeholder="(e.g. 84.67)" name="cat_score">
                </div>
                </div>
              
              <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">GMAT Score (If Applicable)</label>
                  <input type="text" class="form-control"
						 value="<?php
					 if(isset($user_data_tbl[0]['gmat_score']))
					 {
								if($user_data_tbl[0]['gmat_score']!=0)
							 {
								echo $user_data_tbl[0]['gmat_score'];
							 }
							 else{echo 'NA';}
					 }
					
					 ?>" pattern="[a-zA-Z0-9_ ]+.*\S.*" maxlength="5" placeholder="(e.g. 84.67)" name="gmat_score">
                </div>
                </div>
           <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">JEE Score (If Applicable)</label>
                   <input type="text"  class="form-control"
						  value="<?php
					 if(isset($user_data_tbl[0]['jee_core']))
					 {
								if($user_data_tbl[0]['jee_core']!=0)
							 {
								echo $user_data_tbl[0]['jee_core'];
							 }
							 else{echo 'NA';}
					 }
					
					 ?>"
						  pattern="[a-zA-Z0-9_ ]+.*\S.*" maxlength="5" placeholder="(e.g. 84.67)" name="jee_core" >
                </div>
                </div>
                </div>
                <!-- xii detail finish content-->
               
                </div>
              <div class="box-footer">
                <button style="float:right" type="submit" class="btn btn-primary">Submit</button>
              </div>
                <!-- /.col-lg-6 -->
              </div>
              <!-- /.row -->
                  </form>
              </div> 
              <!-- /.box-body -->
            
              
          </div>
        <!-- form END -->
          <!-- /.box -->
      </div>
                </tr>
                <tr>
                  <td>Work Experience</td>
                  <td><div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                  <td>
                     <button type="button" data-toggle="modal" data-target="#myModalwork" class="btn btn-block btn-primary btn-sm btn-col">Apply Now</button></td>
     <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModalwork" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Work Experience</b></h4>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url()?>step-three" method="post">
              <div class="box-body">
                <div class="row">
                  <div class="col-lg-12">
                  <h4 class="border-title"><b>First Organization Details</b><span></span></h4>
                  <hr>
                  </div>
                <div class="col-lg-3">
                    <div class="form-group">
                     
                  <label for="exampleInputEmail1">Organization Name</label>
                  <input type="text" placeholder="(e.g. TKC)" maxlength="70" value="<?php if(isset($user_data_tbl[0]['org_name1'])){echo $user_data_tbl[0]['org_name1']; }?>" name='org_name1' class="form-control" id="org1">
                </div>
                </div>
               <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Designation</label>
                  <input type="text" placeholder="(e.g. Software D.)" maxlength="20"  value="<?php if(isset($user_data_tbl[0]['designnation_1'])){echo $user_data_tbl[0]['designnation_1']; }?>" name='designnation_1' class="form-control" id="desig1" placeholder="name" maxlength="30">
                </div>
                </div>
             
               <!-- /.col-lg-6 -->
                
                   <div class="col-lg-3">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Employment Period(From)</label>
                  <input id="emp1from" placeholder="(e.g. 2017-05)" type="text" name='emp1_from' value="<?php if(isset($user_data_tbl[0]['emp1_from'])){echo $user_data_tbl[0]['emp1_from']; }?>" class="form-control" >
                </div>
                </div>
                    <div class="col-lg-3">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Employment Period(To)</label>
                  <input id="emp1to" placeholder="(e.g. 2017-05)" type="text" name='emp1_to' value="<?php if(isset($user_data_tbl[0]['emp1_to'])){echo $user_data_tbl[0]['emp1_to']; }?>" class="form-control">
                </div>
                </div>
                 <!-- /.col-lg-6 -->
                
                <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">CTC-at the time of joining</label>
                  <input id="ctcj1" type="text" pattern="[0-9]+" placeholder="( e.g. 100000) " value="<?php if(isset($user_data_tbl[0]['ctc_join_1'])){echo $user_data_tbl[0]['ctc_join_1']; }?>" class="form-control" maxlength="10" name='ctc_join_1'>
                </div>
                </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">CTC-at the time of exit</label>
                  <input id="ctcl1" type="text" pattern="[0-9]+" placeholder="( e.g. 100000) " value="<?php if(isset($user_data_tbl[0]['ctc_left_1'])){echo $user_data_tbl[0]['ctc_left_1']; }?>" maxlength="10" name='ctc_left_1' class="form-control" >
                </div>
                </div>
                     <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">	Reason of Leaving</label>
                  <input id="rea1" type="text" placeholder="Reason" maxlength="20" name='reason_leave1' value="<?php if(isset($user_data_tbl[0]['reason_leave1'])){echo $user_data_tbl[0]['reason_leave1']; }?>" class="form-control" maxlength="20">
                </div>
                </div>
                      <!-- First Og End -->
                    <div class="col-lg-12">
                  <h4 class="border-title"><b>Second Organization Details</b><span></span></h4>
                  <hr>
                    </div>
                     <div class="col-lg-3">
                    <div class="form-group">
                     
                  <label for="exampleInputEmail1">Organization Name</label>
                  <input placeholder="(e.g. TKC..)" maxlength="70" name='org_name2' value="<?php if(isset($user_data_tbl[0]['org_name2'])){echo $user_data_tbl[0]['org_name2']; }?>" class="form-control" id="org2" >
                </div>
                </div>
               <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Designation</label>
                  <input placeholder="(e.g. Software D.)" maxlength="20" name='designnation_2' value="<?php if(isset($user_data_tbl[0]['designnation_2'])){echo $user_data_tbl[0]['designnation_2']; }?>" class="form-control" id="desig2">
                </div>
                </div>
             
               <!-- /.col-lg-6 -->
                
                   <div class="col-lg-3">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Employment Period(From)</label>
                  <input id="emp2from" placeholder="(e.g. 2017-05)" type="text" name='emp2_from' value="<?php if(isset($user_data_tbl[0]['emp2_from'])){echo $user_data_tbl[0]['emp2_from']; }?>" class="form-control">
                </div>
                </div>
                 <!-- /.col-lg-6 -->
                 <div class="col-lg-3">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Employment Period(To)</label>
                   <input id="emp2to" placeholder="(e.g. 2017-05)" type="text" name='emp2_to' value="<?php if(isset($user_data_tbl[0]['emp2_to'])){echo $user_data_tbl[0]['emp2_to']; }?>" class="form-control">
                </div>
                </div>
                 
                <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">CTC-at the time of joining</label>
                  <input type="text" name='ctc_join_2' pattern="[0-9]+" placeholder="( e.g. 100000) " value="<?php if(isset($user_data_tbl[0]['ctc_join_2'])){echo $user_data_tbl[0]['ctc_join_2']; }?>" maxlength="10" id="ctcj2" class="form-control">
                </div>
                </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">CTC-at the time of exit</label>
                  <input type="text" pattern="[0-9]+" placeholder="( e.g. 100000)" maxlength="10" value="<?php if(isset($user_data_tbl[0]['ctc_left_2'])){echo $user_data_tbl[0]['ctc_left_2']; }?>" name='ctc_left_2' id="ctcl2" class="form-control">
                </div>
                </div>
                     <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">	Reason of Leaving</label>
                  <input type="text" placeholder="Reason" maxlength="20" name='reason_leave2' value="<?php if(isset($user_data_tbl[0]['reason_leave2'])){echo $user_data_tbl[0]['reason_leave2']; }?>" id="rea2" class="form-control">
                </div>
                </div>
                 
                  <!-- /Second Og End -->
                   <div class="form-group">
                     <div class="col-lg-12">
                  <h4 class="border-title"><b>Third Organization Details</b><span></span></h4>
                  <hr>
                     </div>
                     <div class="col-lg-3">
                  <label for="exampleInputEmail1">Organization Name</label>
                  <input type="text" placeholder="(e.g. TKC...)" maxlength="70" value="<?php if(isset($user_data_tbl[0]['org_name3'])){echo $user_data_tbl[0]['org_name3']; }?>" name='org_name3' id="org3" class="form-control">
                </div>
                </div>
               <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Designation</label>
                  <input type="text" placeholder="(e.g. Software D.)" maxlength="20" value="<?php if(isset($user_data_tbl[0]['designnation_3'])){echo $user_data_tbl[0]['designnation_3']; }?>" name='designnation_3' id="desig3" class="form-control" >
                </div>
                </div>
             
               <!-- /.col-lg-6 -->
               
                   <div class="col-lg-3">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Employment Period(From)</label>
                  <input id="emp3from" placeholder="(e.g. 2017-05)"  type="text" name='emp3_from' class="form-control" value="<?php if(isset($user_data_tbl[0]['emp3_from'])){echo $user_data_tbl[0]['emp3_from']; }?>" >
                </div>
                </div>
                 <!-- /.col-lg-6 -->
                 
                 <!-- /.col-lg-6 -->
               
                   <div class="col-lg-3">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Employment Period(To)</label>
                  <input id="emp3to"  placeholder="(e.g. 2017-05)"  type="text" value="<?php if(isset($user_data_tbl[0]['emp3_to'])){echo $user_data_tbl[0]['emp3_to']; }?>" name='emp3_to' class="form-control">
                </div>
                </div>
                 <!-- /.col-lg-6 -->
                
                <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">CTC-at the time of joining</label>
                  <input type="text" pattern="[0-9]+" placeholder="( e.g. 100000) " value="<?php if(isset($user_data_tbl[0]['ctcj3'])){echo $user_data_tbl[0]['ctcj3']; }?>"  id="ctcj3" maxlength="10" name='ctc_join_3' class="form-control">
                </div>
                </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">CTC-at the time of exit</label>
                  <input type="text" pattern="[0-9]+" placeholder="( e.g. 100000) " value="<?php if(isset($user_data_tbl[0]['ctcl3'])){echo $user_data_tbl[0]['ctcl3']; }?>" id="ctcl3" maxlength="10" name='ctc_left_3' class="form-control">
                </div>
                </div>
                     <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">	Reason of Leaving</label>
                  <input type="text" name='reason_leave3' placeholder="Reason" value="<?php if(isset($user_data_tbl[0]['reason_leave3'])){echo $user_data_tbl[0]['reason_leave3']; }?>" maxlength="20" id="rea3" class="form-control">
                </div>
                </div>
                     
                     
                     <div class="col-lg-6">
                    <div class="form-group">
                  <label>Salary Expected Per Month<span class="required-sp"> * </span> </label> 
        <input type="text" maxlength="10" pattern="[0-9]+" placeholder="Type Salary Expected Per Month" value="<?php if(isset($user_data_tbl[0]['salry_expect'])){echo $user_data_tbl[0]['salry_expect']; }?>" required name="salry_expect" class="form-control">
                </div>
                </div>
                     <div class="col-lg-6">
                    <div class="form-group">
                 <label>If selected, when can you join (Notice Period)<span class="required-sp"> * </span> </label>
				 <select name="notice_period" required class="form-control">
					<option value=""> ---select NoticePeriod--- </option>
					<option <?php if($user_data_tbl[0]['notice_period']=='15 Days'){echo 'selected=selected';}?> value="15 Days"> 15 Days </option>
					<option <?php if($user_data_tbl[0]['notice_period']=='1 Month'){echo 'selected=selected';}?> value="1 Month"> 1 Month </option>
					<option <?php if($user_data_tbl[0]['notice_period']=='2 Month'){echo 'selected=selected';}?> value="2 Month"> 2 Month </option>
					<option <?php if($user_data_tbl[0]['notice_period']=='3 Month'){echo 'selected=selected';}?> value="3 Month"> 3 Month </option>
				 </select>
       
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
                <!-- form Start Famiy -->
          <!-- /.box -->
                 <tr>
                 <td>References</td>
                  <td><div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                   <td>
                     <button type="button" data-toggle="modal" data-target="#myModalreferences" class="btn btn-block btn-primary btn-sm btn-col">Apply Now</button></td>
                
     <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModalreferences" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>References</b></h4>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url()?>step-four"> 
              <div class="box-body">
                <div class="row">
                  <div class="col-lg-12">
                  <h4 class="border-title"><b>1 Reference</b><span></span></h4>
                  <hr>
                  </div>
                <div class="col-lg-3">
                    <div class="form-group">
                     
                  <label for="exampleInputEmail1">Name</label>
                <input type="text" id="ref1" placeholder="(e.g. John deo)" value="<?php if(isset($user_data_tbl[0]['ref_1_name'])){echo $user_data_tbl[0]['ref_1_name']; }?>" maxlength="15" name='ref_1_name' class="form-control">
                </div>
                </div>
           <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                 	<input type="text" id="ref1_add" placeholder="(e.g. Sec-62 Noida)" value="<?php if(isset($user_data_tbl[0]['ref_1_add'])){echo $user_data_tbl[0]['ref_1_add']; }?>" maxlength="100" name='ref_1_add'  class="form-control">
                </div>
                </div>
             
               <!-- /.col-lg-6 -->
                
                   <div class="col-lg-3">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Occupation</label>
                <input type="text" id="ref1_occu" placeholder="(e.g. Data Scientist)" value="<?php if(isset($user_data_tbl[0]['ref_1_occu'])){echo $user_data_tbl[0]['ref_1_occu']; }?>" maxlength="25" name='ref_1_occu' class="form-control">
                </div>
                </div>
                   
                   
                  <div class="col-lg-3">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Telephone No</label>
                <input type="text" id="ref1_tel" name='ref_1_cell' value="<?php if(isset($user_data_tbl[0]['ref_1_cell'])){echo $user_data_tbl[0]['ref_1_cell']; }?>" maxlength="10" pattern="[0-9]+" placeholder="(e.g. XXXXXXXXXX)" class="form-control">
                </div>
                </div>
              
                      <!-- First Og End -->
                    <div class="col-lg-12">
                    <h4 class="border-title"><b>2 Reference</b><span></span></h4>
                  <hr>
                  </div>
               <div class="col-lg-3">
                    <div class="form-group">
                     
                  <label for="exampleInputEmail1">Name</label>
               <input type="text" id="ref2" placeholder="(e.g. wanda)" value="<?php if(isset($user_data_tbl[0]['ref_2_name'])){echo $user_data_tbl[0]['ref_2_name']; }?>" maxlength="15" name='ref_2_name' class="form-control">
                </div>
                </div>
              <div class="col-lg-3">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Address</label>
                 <input type="text" id="ref2_add" placeholder="(e.g. Sec-62 Noida)" value="<?php if(isset($user_data_tbl[0]['ref_2_add'])){echo $user_data_tbl[0]['ref_2_add']; }?>" maxlength="100" name='ref_2_add' class="form-control">
                </div>
                </div>
             
               <!-- /.col-lg-6 -->
                
                  <div class="col-lg-3">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Occupation</label>
               	<input type="text" id="ref2_occu" placeholder="(e.g. Accountant)" maxlength="25" value="<?php if(isset($user_data_tbl[0]['ref_2_occu'])){echo $user_data_tbl[0]['ref_2_occu']; }?>" name='ref_2_occu' class="form-control">
                </div>
                </div>
                   
                   
                   <div class="col-lg-3">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Telephone No</label>
               <input type="text" id="ref2_tel" name='ref_2_cell'  maxlength="10" pattern="[0-9]+" value="<?php if(isset($user_data_tbl[0]['ref_2_cell'])){echo $user_data_tbl[0]['ref_2_cell']; }?>" placeholder="(e.g. XXXXXXXXXX)" class="form-control">
                </div>
                </div>
                
   <div class="col-lg-12">
                    
                  <hr>
                  </div>
    <div class="col-lg-4">
        <label>May we make discrete enquiries about you from them <span class="required-sp"> * </span> </label><br> 
  <input name="discrete_enquiries" <?php if($user_data_tbl[0]['discrete_enquiries']=='Yes'){echo 'checked=checked';}?>  value="Yes" type="radio" required>
  <label for="Negotiable">Yes</label>
  <input name="discrete_enquiries" <?php if($user_data_tbl[0]['discrete_enquiries']=='No'){echo 'checked=checked';}?>  value="No" type="radio" required>
    <label for="Negotiable">No</label>
    </div>
   
    <div class="col-lg-4">
        <label>Source though which you have applied to us :<span class="required-sp"> * </span> </label> 
        <input type="text" value="<?php if(isset($user_data_tbl[0]['source_name'])){echo $user_data_tbl[0]['source_name']; }?>" maxlength="15" placeholder="( e.g. Shine )" name="source_name" required  class="form-control">
    </div>
  <div class="col-lg-4">
        <label>If Referred, Please mention the name of the employee<span class="required-sp"> </span> </label> 
        <input type="text" name="refrered_name"  value="<?php if(isset($user_data_tbl[0]['refrered_name'])){echo $user_data_tbl[0]['refrered_name']; }?>" maxlength="15" placeholder="( e.g. Jhon )" class="form-control">
    </div>
 
    </div>
             
                </div>
            
            <div class="box-footer">
                <button style="float:right" type="submit" class="btn btn-primary">Submit</button>
              </div>
      
              <!-- /.row -->
                
              </div>
         </form>
          </div>
              <!-- /.box-body -->
               <tr>
                 <td>Family Background</td>
                  <td><div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                   <td>
                     <button type="button" data-toggle="modal" data-target="#myModalfamily" class="btn btn-block btn-primary btn-sm btn-col">Apply Now</button></td>
                
     <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModalfamily" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>Family Background</b></h4>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url()?>step-five" >
              <div class="box-body">
                <div class="row">
                  <div class="col-lg-12">
                  <h4 class="border-title"><b>Father</b><span class="required-sp"> * </span><span></span></h4>
                  <hr>
                  </div>
                <div class="col-lg-4">
                    <div class="form-group">
                     
                  <label for="exampleInputEmail1">Age(years)<span class="required-sp"> * </span></label>
                 <input type="text" id="faage" value="<?php if(isset($user_data_tbl[0]['father_age'])){echo $user_data_tbl[0]['father_age']; }?>" required placeholder="E.g. (45)" maxlength="3" pattern="[0-9]+" name='father_age' class="form-control">
                </div>
                </div>
               <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Education<span class="required-sp"> * </span></label>
                 	<input type="text" required placeholder="E.g. (BA Or BSc..)" maxlength="40" value="<?php if(isset($user_data_tbl[0]['father_edu'])){echo $user_data_tbl[0]['father_edu']; }?>" name='father_edu' class="form-control">
                </div>
                </div>
             
               <!-- /.col-lg-6 -->
                
                   <div class="col-lg-4">
                   <div class="form-group">
                  <label for="exampleInputEmail1">Occupation<span class="required-sp"> * </span></label>
                 <input type="text"  required placeholder="E.g. (Accountant)" maxlength="40" value="<?php if(isset($user_data_tbl[0]['father_occu'])){echo $user_data_tbl[0]['father_occu']; }?>" name='father_occu' class="form-control">
                </div>
                </div>
              
                      <!-- First Og End -->
                    <div class="col-lg-12">
                  <h4 class="border-title"><b>Mother</b><span></span></h4>
                  <hr>
                    </div>
                      <div class="col-lg-4">
                    <div class="form-group">
                     
                  <label for="exampleInputEmail1">Age(years)<span class="required-sp"> * </span></label>
                 <input type="text" id="moage" required placeholder="E.g (45)" maxlength="3" pattern="[0-9]+" value="<?php if(isset($user_data_tbl[0]['mother_age'])){echo $user_data_tbl[0]['mother_age']; }?>" name='mother_age' class="form-control" >
                </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                     
                  <label for="exampleInputEmail1">Education<span class="required-sp"> * </span></label>
                 <input type="text" required placeholder="E.g. (BA Or BSc..)" maxlength="40" value="<?php if(isset($user_data_tbl[0]['mother_edu'])){echo $user_data_tbl[0]['mother_edu']; }?>" name='mother_edu' class="form-control">
                </div>
                </div>
               <!-- /.col-lg-6 -->
                
                    <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Occupation<span class="required-sp"> * </span></label>
                 <input type="text" required placeholder="E.g. (Accountant)" maxlength="40" value="<?php if(isset($user_data_tbl[0]['mother_occu'])){echo $user_data_tbl[0]['mother_occu']; }?>" name='mother_occu' class="form-control">
                </div>
                </div>	
                  <!-- /Second Og End -->
                    <div class="col-lg-12">
                  <h4 class="border-title"><b>Spouse</b><span></span></h4>
                  <hr>
                  </div>
                <div class="col-lg-4">
                    <div class="form-group">
                     
                  <label for="exampleInputEmail1">Age(years)</label>
                 <input type="text" id="spage" placeholder="E.g (35)" maxlength="3" pattern="[0-9]+" value="<?php if(isset($user_data_tbl[0]['spouse_age'])){echo $user_data_tbl[0]['spouse_age']; }?>" name='spouse_age' class="form-control" id="">
                </div>
                </div>
               <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Education</label>
                  <input type="text"  placeholder="E.g. (MBA Or B.tech..)" maxlength="40" id="spname" value="<?php if(isset($user_data_tbl[0]['spouse_edu'])){echo $user_data_tbl[0]['spouse_edu']; }?>"  name='spouse_edu' class="form-control">
                </div>
                </div>
                 <div class="col-lg-4">
                    <div class="form-group">
                  <label for="exampleInputEmail1">Occupation</label>
                 <input type="text" placeholder="E.g. (Architect)" maxlength="40" id="spoc" value="<?php if(isset($user_data_tbl[0]['spouse_occu'])){echo $user_data_tbl[0]['spouse_occu']; }?>" name='spouse_occu' class="form-control">
                </div>
                </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                  <label for="exampleInputEmail1">Have you been involved personally in any leagal/criminal processdings?</label>
				  <br>
                  <input  name="crime_involve" <?php if($user_data_tbl[0]['crime_involve']=='Yes'){echo 'checked=checked';}?>  value="Yes" type="radio" required>
  <label for="Negotiable">Yes</label>
  <input  name="crime_involve" <?php if($user_data_tbl[0]['crime_involve']=='No'){echo 'checked=checked';}?> checked="checked" value="No" type="radio" required>
    <label for="Negotiable">No</label>
                 </div>
                  </div>
            
                </div>
            
            <div class="box-footer">
                <button style="float:right" type="submit" class="btn btn-primary">Submit</button>
              </div>
      
              <!-- /.row -->
                  </form>
              </div>
        
          </div>
             
       
        <!-- form END -->
          <!-- /.box -->
      </div>
        
          
      
              <!-- /.row -->
                
              </div>
        
         
              <!-- /.box-body -->
            
             
       
        <!-- form END -->
    </div>
       </tr>
              </table>
            </div>
            <!-- /.box-body -->
           
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      <!-- /.col -->
        <div class="col-md-6">
          <div class="box box-col">
            <div class="box-header with-border">
              <h3 class="box-title">Score</h3>
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
				 <tr>
                 <td>4.</td>
                  <td>Assignment 4</td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm btn-col">View</button></td>
                </tr>
				  <tr>
                 <td>5.</td>
                  <td>Assignment 5</td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm btn-col">View</button></td>
                </tr>
               
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
     <div class="row">
        

        <!--
        <!-- /.col -->
     <!--   <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Certification</h3>
            </div>
            <!-- /.box-header 
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
          <!-- /.box 
        </div>-->
        <!-- /.col -->
      </div>
      <!-- /.row -->
      
       <div class="row">
        <!--<div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Certification</h3>
            </div>
            <!-- /.box-header
            <div class="box-body">
              
              <table class="table table-bordered">
                
                <tr>
                  <td>Certification</td>
                  <td>
                    <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-red">55%</span></td>
                  <td><button type="button" class="btn btn-block btn-primary btn-sm btn-col">Edit</button></td>
                </tr>
                <tr>
                  <td>Educational Profile</td>
                  <td> <div class="progress progress-xs">
                      <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-yellow">70%</span></td>
                 
                   <td><button type="button" class="btn btn-block btn-primary btn-sm btn-col">Edit</button></td>
                </tr>
                <tr>
                  <td>Work Experience</td>
                  <td><div class="progress progress-xs progress-striped active">
                      <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                    </div>
                  </td>
                  <td><span class="badge bg-light-blue">30%</span></td>
                
                  <td><button type="button" class="btn btn-block btn-primary btn-sm btn-col">Edit</button></td>
                </tr>
              </table>
            </div>
            <!-- /.box-body 
           
          </div>
          <!-- /.box
        </div>
        --><!-- /.col -->
<!--        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Certification</h3>
            </div>
            <!-- /.box-header 
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
         
        </div>-->
        <!-- /.col -->
      </div>
      <!-- /.row -->
	
  </div>
  <div id="myModal_loader" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="left:360px;top: 275px;width: 48px;">
     
      <div class="modal-body">
          <img  src="<?php echo base_url()?>upload/loading.gif">
      </div>
   
    </div>

  </div>
</div>
     </section>
	 <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
     <!-- Main content -->

<script>

  $( function() {
    $( "#dob_caf" ).datepicker({
      changeMonth: true,
      changeYear: true,
     dateFormat: 'yy-mm-dd',
     yearRange: "-10:+0",
    });
  } );
  $( function() {
    $( "#dob_caf1" ).datepicker({
      changeMonth: true,
      changeYear: true,
     dateFormat: 'yy-mm-dd',
     yearRange: "-10:+0",
    });
  } );
 
  jQuery( function() {
    jQuery( "#emp1from" ).datepicker({
      changeMonth: true,
      changeYear: true,
     dateFormat: 'yy-mm-dd',
     yearRange: "-50:+0",
    });
  } );
	jQuery( function() {
    jQuery( "#emp2from" ).datepicker({
      changeMonth: true,
      changeYear: true,
     dateFormat: 'yy-mm-dd',
     yearRange: "-50:+0",
    });
  } );
	jQuery( function() {
    jQuery( "#emp3from" ).datepicker({
      changeMonth: true,
      changeYear: true,
     dateFormat: 'yy-mm-dd',
     yearRange: "-50:+0",
    });
  } );
	jQuery( function() {
    jQuery( "#emp1to" ).datepicker({
      changeMonth: true,
      changeYear: true,
     dateFormat: 'yy-mm-dd',
     yearRange: "-50:+0",
    });
  } );
	jQuery( function() {
    jQuery( "#emp2to" ).datepicker({
      changeMonth: true,
      changeYear: true,
     dateFormat: 'yy-mm-dd',
     yearRange: "-50:+0",
    });
  } );
	jQuery( function() {
    jQuery( "#emp3to" ).datepicker({
      changeMonth: true,
      changeYear: true,
     dateFormat: 'yy-mm-dd',
     yearRange: "-50:+0",
    });
  } );
</script>