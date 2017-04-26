<?php  $img_path=base_url().'upload/'?>

<style>/* uses font awesome for social icons */
.page-header{
  text-align: center;    
}
/* resume stuff */
.bs-callout {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    border-color: #eee;
    border-image: none;
    border-radius: 3px;
    border-style: solid;
    border-width: 1px 1px 1px 5px;
    margin-bottom: 5px;
    padding: 20px;
}
.bs-callout:last-child {
    margin-bottom: 0px;
}
.bs-callout h4, .bs-callout h3 {
    margin-bottom: 10px;
    margin-top: 0;
}
.bs-callout-danger {
    border-left-color: #d9534f;
}
.bs-callout-danger h4, .bs-callout-danger h3, h4{
    color: #d9534f;
}
.resume .list-group-item:first-child, .resume .list-group-item:last-child{
  border-radius:0;
}
/*makes an anchor inactive(not clickable)*/
.inactive-link {
   pointer-events: none;
   cursor: default;
}
.resume-heading .social-btns{
  margin-top:15px;
}
.resume-heading .social-btns i.fa{
  margin-left:-5px;
}
}

</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php base_url()?>user-dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
							<?php if($user_data_tbl[0]['image']!="" || $user_data_tbl[0]['image']!=""){$img=$user_data_tbl[0]['image'];}else{$img="user.jpg";}?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo $img_path.$img?>" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $user[0]['mm_user_full_name']?></h3>

              <p class="text-muted text-center"><?php echo $user_profile_data[0]['curr_designation'] ?></p>

              <ul class="list-group list-group-unbordered">
                <!--<li class="list-group-item">
                  <b>Name</b> <a class="pull-right">@krishna</a>
                </li>-->
                <li class="list-group-item">
                  <b>Email</b> <a class="pull-right"><?php echo $user[0]['mm_user_email']?></a>
                </li>
                <li class="list-group-item">
                  <b>Phone</b> <a class="pull-right"><?php echo $user_profile_data[0]['contact_number'] ?></a>
                </li>
              </ul>

             
            </div>
            
          </div>
         

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
               <?php echo $user_profile_data[0]['high_q'] ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted"><?php echo $user_profile_data[0]['location'] ?></p>

              <hr>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Profile Information</a></li>
              <li><a href="#timeline" data-toggle="tab">Education</a></li>
              <li><a href="#settings" data-toggle="tab">Work History</a></li>
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  
             <div class="bs-callout bs-callout-danger">    
 
<h3>Profile Information</h3>              
  <table class="table table-striped table-responsive">
      <tbody>
     
     <tr>    
        <td><b>Father/Husband Name</b></td>
        <td>: <a href="" id="father_name" data-type="text"><?php echo $user_profile_data[0]['father_name'] ?></a></td>       
     </tr>
     <tr>    
        <td><b>DOB</b></td>
        <td>: <a href="" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD"
				data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"
				data-title="Select Date of birth" data-original-title="" data-type="text"><?php echo $user_profile_data[0]['dob'] ?></a></td>       
    </tr>
    <tr>
     <td><b>Country</b></td> 
        <td>: <?php echo 'India'; ?></td>   
      
    </tr>
    <tr>
        <td><b>State</b></td>
        <td>: 
				<?php $all_state=$this->Userdashboard_modal->state_name_withid($user_profile_data[0]['state']); echo $all_state['name'] ?>
				</td> 
     </tr>
    <tr>  
        <td><b>City</b></td>
        <td>: <?php $all_city=$this->Userdashboard_modal->cityname_with_cityid($user_profile_data[0]['city']); echo $all_city['name'] ?></td> 
     </tr>
     <tr>    
        <td><b>Phone</b></td>
        <td>: <a href="" id="contact_number" data-type="text"><?php echo $user_profile_data[0]['contact_number'] ?></a></td>       
     </tr>
    
    <tr>    
        <td><b>Permanent Address</b></td>
        <td>:<a href="" id="present_addr" data-type="text"><?php echo $user_profile_data[0]['present_addr'] ?></a></td>       
    </tr>
  

    </tbody>
  </table>
  <ul class="list-inline">
<!-- <li class="pull-right">
                      <a href="#" class="link-black text-sm"><strong><i class="fa fa-pencil margin-r-5"></i>Edit</strong></a></li>-->
</ul>

    </div><!--col-md-12 close-->                             
                </div>
                <!-- /.post -->

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                
    <div class="bs-callout bs-callout-danger">
        <h3>Education</h3>
        <table class="table table-striped table-responsive ">
          <thead>
            <tr>
              <th>Highest Degree</th>
            <th>University/School</th>
            <!--<th>Year</th>
              <th>% of marks</th>
            <th>Achievement</th>-->
        
          </tr></thead>
          <tbody>
            <tr>
              <td><a href="" id="high_q"><?php echo $user_profile_data[0]['high_q'] ?></a></td>
              <td><?php echo $user_profile_data[0]['insti'] ?></td>
                <!--<td>2016</td>
              <td> 3.50 </td>
              <td> 3.50 </td>-->
            </tr>
           
            
            
          </tbody>
        </table>
        <ul class="list-inline">
<!-- <li class="pull-right">
                      <a href="#" class="link-black text-sm"><strong><i class="fa fa-pencil margin-r-5"></i>Edit</strong></a></li>-->
</ul>
      </div>
    
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <div class="bs-callout bs-callout-danger">
        <h3>Work Experience</h3>
        <table class="table table-striped table-responsive ">
          <thead>
            <tr>
              <th>Organization</th>
            <th>Designation </th>
            <th>Time Period</th>
             
            <th>Location</th>
        
          </tr></thead>
          <tbody>
            <tr>
              <td><a href="" id="current_org_name"><?php echo $user_profile_data[0]['current_org_name'] ?></a></td>
              <td><a href="" id="curr_designation"><?php echo $user_profile_data[0]['curr_designation'] ?></td>
               <td><a href="" id="time_period"> <?php echo $user_profile_data[0]['time_period'] ?></a> </td>
              <td><a href="" id="location"><?php echo $user_profile_data[0]['location'] ?></a></td>
             
            </tr>
           
            
             
          </tbody>
        </table>
        <ul class="list-inline">
<!-- <li class="pull-right">
                      <a href="#" class="link-black text-sm"><strong><i class="fa fa-pencil margin-r-5"></i>Edit</strong></a></li>-->
</ul>
      </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  