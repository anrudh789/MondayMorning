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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Caf Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>user-dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
       
        <li class="active">User Caf profile</li>
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
               <li><a href="#reference" data-toggle="tab">Reference</a></li>
               <li><a href="#family" data-toggle="tab">Family Background</a></li>
             
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  
             <div class="bs-callout bs-callout-danger">    
 
<h3>Profile Information</h3>              
  <table class="table table-striped table-responsive">
      <tbody>
    <!-- <tr>    
        <td><b>Full Name</b></td>
        <td>: smith</td>       
     </tr>
     <tr>    
        <td><b>Position Applied For</b></td>
        <td>: Web developer</td>       
     </tr>-->
     <tr>    
        <td><b>Father/Husband Name</b></td>
        <td>: <?php echo $user_profile_data[0]['father_name'] ?></td>       
     </tr>
      <tr>    
        <td><b>Father/Husband Occupation</b></td>
        <td>: <?php echo $user_profile_data[0]['fa_hu_occupation'] ?></td>           
     </tr>
    <tr>    
        <td><b>DOB</b></td>
        <td>: <?php echo $user_profile_data[0]['dob'] ?></td>       
    </tr>
    <tr>
     <td><b>Country</b></td> 
        <td>: <?php echo 'India'; ?></td>   
      
    </tr>
    <tr>
        <td><b>State</b></td>
        <td>: <?php $all_state=$this->Userdashboard_modal->state_name_withid($user_profile_data[0]['state']); echo $all_state['name'] ?> </td> 
     </tr>
     <tr>  
        <td><b>City</b></td>
        <td>: <?php $all_city=$this->Userdashboard_modal->cityname_with_cityid($user_profile_data[0]['city']); echo $all_city['name'] ?></td> 
     </tr>
     <tr>    
        <td><b>Phone</b></td>
        <td>: <?php echo $user_profile_data[0]['contact_number'] ?></td>       
     </tr>
     <tr>    
        <td><b>Alternate Phone</b></td>
        <td>:  <?php echo $user_profile_data[0]['emergency_cell'] ?></td>       
     </tr>
    
   <tr>    
        <td><b>Permanent Address</b></td>
        <td>: <?php echo $user_profile_data[0]['present_addr'] ?></td>       
    </tr>
    <tr>    
        <td><b> Address (B)</b></td>
        <td>:  <?php echo $user_profile_data[0]['permanent_addr'] ?></td>       
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
              <th>Degree</th>
            <th>University/School</th>
            <th>Year</th>
              <th>% of marks</th>
            <th>Achievement</th>
        
          </tr>
          </thead>
          <tbody>
			<?php if($user_profile_data[0]['pg_institution']!=""|| $user_profile_data[0]['pg_institution']!=null){$sty_pg="";}else{$sty_pg="display:none";}?>
            <tr style="<?php echo $sty_pg?>">
				<?php
						$pid=$user_profile_data[0]['pg_degree'];
						$whessc="`md_id`='$pid'";
						$pd=$this->Crud_modal->all_data_select('*','master_degree',$whessc,'md_id asc');
						
						$piid=$user_profile_data[0]['pg_institution'];
						$whessc="`mu_id`='$piid'";
						$pi=$this->Crud_modal->all_data_select('*','master_university',$whessc,'mu_id asc'); ?>

              <td><?php echo $pd[0]['degree_name']?></td>
              <td><?php echo $pi[0]['un_name'] ?></td>
                <td><?php echo $user_profile_data[0]['pg_year_pass'] ?></td>
              <td> <?php echo $user_profile_data[0]['pg_marks_per'] ?> </td>
              <td> <?php echo $user_profile_data[0]['pg_achievements'] ?> </td>
            </tr>
           <tr>
			<?php       $gid=$user_profile_data[0]['grad_degree'];
						$whessc="`md_id`='$gid'";
						$gd=$this->Crud_modal->all_data_select('*','master_degree',$whessc,'md_id asc');
						$giid=$user_profile_data[0]['grad_institution'];
						$whessc="`mu_id`='$giid'";
						$gi=$this->Crud_modal->all_data_select('*','master_university',$whessc,'mu_id asc');
?>

             <td><?php echo $gd[0]['degree_name'] ?></td>
              <td><?php echo $gi[0]['un_name'] ?></td>
                <td><?php echo $user_profile_data[0]['grad_year_pass'] ?></td>
              <td> <?php echo $user_profile_data[0]['grad_marks_per'] ?> </td>
              <td> <?php echo $user_profile_data[0]['grad_achievements'] ?> </td>
            </tr>
           <tr>
              <td>Intermediate (XII)</td>
           <?php
 $hid=$user_profile_data[0]['hsc_institution'];
  $whessc="`bid`='$hid'";
$hsc_institution=$this->Crud_modal->all_data_select('*','master_board',$whessc,'bid asc');
?>
              <td><?php echo $hsc_institution[0]['board_name'] ?></td>
                <td><?php echo $user_profile_data[0]['hsc_year_pass'] ?></td>
              <td> <?php echo $user_profile_data[0]['hsc_marks_per'] ?> </td>
              <td> <?php echo $user_profile_data[0]['hsc_achievements'] ?> </td>
            </tr>
           <tr>
              <td>High School (X)</td>
             <?php
					$sid=$user_profile_data[0]['ssc_institution'];
					$whessc="`bid`='$sid'";
				    $ssc_institution=$this->Crud_modal->all_data_select('*','master_board',$whessc,'bid asc'); ?>

              <td><?php echo $ssc_institution[0]['board_name']; ?></td>
                <td><?php echo $user_profile_data[0]['ssc_year_pass'] ?></td>
              <td> <?php echo $user_profile_data[0]['ssc_marks_per'] ?> </td>
              <td> <?php echo $user_profile_data[0]['ssc_achievements'] ?> </td>
            </tr>
           
            
            
          </tbody>
        </table>
        <ul class="list-inline">
<!-- <li class="pull-right">
                      <a href="#" class="link-black text-sm"><strong><i class="fa fa-pencil margin-r-5"></i>Edit</strong></a></li>-->
</ul>
      </div>
     <div class="bs-callout bs-callout-danger">
        <h3>Other Qualification</h3>
        <table class="table table-striped table-responsive ">
          <thead>
            <tr>
              <th>CAT Score (If Applicable)</th>
            <th>GMAT Score (If Applicable)</th>
            <th>JEE Score (If Applicable)</th>
             
        
          </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php if(isset($user_profile_data[0]['cat_score'])){
								if($user_profile_data[0]['cat_score']!=0)
							 {
								echo $user_profile_data[0]['cat_score'];
							 }
							 else{echo 'NA';}
					 }
					
					 ?></td>
              <td><?php if(isset($user_profile_data[0]['gmat_score'])){
								if($user_profile_data[0]['gmat_score']!=0)
							 {
								echo $user_profile_data[0]['gmat_score'];
							 }
							 else{echo 'NA';}
					 }
					
					 ?></td>
                <td><?php if(isset($user_profile_data[0]['jee_core'])){
								if($user_profile_data[0]['jee_core']!=0)
							 {
								echo $user_profile_data[0]['jee_core'];
							 }
							 else{echo 'NA';}
					 }
					
					 ?></td>
             
            </tr>
          
           
            
            
          </tbody>
        </table>
        <ul class="list-inline">
 <!--<li class="pull-right">
                      <a href="#" class="link-black text-sm"><strong><i class="fa fa-pencil margin-r-5"></i>Edit</strong></a></li>-->
</ul>
      </div>
    
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                	<?php if($user_profile_data[0]['org_name1']!=""|| $user_profile_data[0]['org_name1']!=null){$sty1="";}else{$sty1="display:none";}?>
                 <div class="bs-callout bs-callout-danger" style="<?php echo $sty1?>">
        <h3>Work Experience 1</h3>
        <table class="table table-striped table-responsive ">
          <thead>
            <tr>
              <th>Organization</th>
            <th>Designation </th>
            <th>Time Period</th>
             
           
        
          </tr></thead>
          <tbody>
            <tr>
              <td ><?php echo $user_profile_data[0]['org_name1']?></td>
<td ><?php echo $user_profile_data[0]['designnation_1']?></td>
<td ><?php echo $user_profile_data[0]['emp1_from'].' - <b>to</b> - '.$user_profile_data[0]['emp1_to']?></td>
            </tr>
           
            
             
          </tbody>
        </table>
        <table class="table table-striped table-responsive ">
          <thead>
            <tr>
              <th>CTC-At the joining</th>
            <th>CTC-At the Exit</th>
            <th>Reason Of leaving</th>
             
          
        
          </tr></thead>
          <tbody>
            <tr>
              <td ><?php echo $user_profile_data[0]['ctc_join_1']?></td>
<td ><?php echo $user_profile_data[0]['ctc_left_1']?></td>
<td ><?php echo $user_profile_data[0]['reason_leave1']?></td>
             
             
            </tr>
           
            
             
          </tbody>
        </table>
        <ul class="list-inline">
 <!--<li class="pull-right">
                      <a href="#" class="link-black text-sm"><strong><i class="fa fa-pencil margin-r-5"></i>Edit</strong></a></li>-->
</ul>
      </div>
				<?php if($user_profile_data[0]['org_name2']!=""|| $user_profile_data[0]['org_name2']!=null){$sty2="";}else{$sty2="display:none";}?>
                 <div class="bs-callout bs-callout-danger" style="<?php echo $sty2?>">
        <h3>Work Experience 2</h3>
        <table class="table table-striped table-responsive ">
          <thead>
            <tr>
              <th>Organization</th>
            <th>Designation </th>
            <th>Time Period</th>
             
           
        
          </tr></thead>
          <tbody>
            <tr>
            <td ><?php echo $user_profile_data[0]['org_name2']?></td>
<td ><?php echo $user_profile_data[0]['designnation_2']?></td>
<td ><?php echo $user_profile_data[0]['emp2_from'].' - <b>to</b> - '.$user_profile_data[0]['emp2_to']?></td>
             
             
            </tr>
           
            
             
          </tbody>
        </table>
        <table class="table table-striped table-responsive ">
          <thead>
            <tr>
              <th>CTC-At the joining</th>
            <th>CTC-At the Exit</th>
            <th>Reason Of leaving</th>
             
          
        
          </tr></thead>
          <tbody>
            <tr>
                   <td ><?php echo $user_profile_data[0]['ctc_join_2']?></td>
<td ><?php echo $user_profile_data[0]['ctc_left_2']?></td>
<td ><?php echo $user_profile_data[0]['reason_leave2']?></td>
             
             
            </tr>
           
            
             
          </tbody>
        </table>
        <ul class="list-inline">
 <!--<li class="pull-right">
                      <a href="#" class="link-black text-sm"><strong><i class="fa fa-pencil margin-r-5"></i>Edit</strong></a></li>-->
</ul>
      </div>
				 <?php if($user_profile_data[0]['org_name3']!=""|| $user_profile_data[0]['org_name3']!=null){$sty="";}else{$sty="display:none";}?>
                  <div class="bs-callout bs-callout-danger" style="<?php echo $sty?>">
        <h3>Work Experience 3</h3>
        <table class="table table-striped table-responsive ">
          <thead>
			
            <tr >
              <th>Organization</th>
            <th>Designation </th>
            <th>Time Period</th>
        
          </tr></thead>
          <tbody>
			
            <tr >
               <td ><?php echo $user_profile_data[0]['org_name3']?></td>
<td ><?php echo $user_profile_data[0]['designnation_3']?></td>
<td ><?php echo $user_profile_data[0]['emp3_from'].' - <b>to</b> - '.$user_profile_data[0]['emp3_to']?></td>
             
            </tr>
         
          </tbody>
        </table>
        <table class="table table-striped table-responsive ">
          <thead>
            <tr>
              <th>CTC-At the joining</th>
            <th>CTC-At the Exit</th>
            <th>Reason Of leaving</th>
             
          
        
          </tr></thead>
          <tbody>
            <tr>
                <td ><?php echo $user_profile_data[0]['ctc_join_3']?></td>
<td ><?php echo $user_profile_data[0]['ctc_left_3']?></td>
<td ><?php echo $user_profile_data[0]['reason_leave3']?></td>
             
             
            </tr>
           
            
             
          </tbody>
        </table>
	
      </div>
				  	 <div class="bs-callout bs-callout-danger">
        <h3>Salary and Notice Period</h3>
        <table class="table table-striped table-responsive ">
        <tr>
  
              <td><b>Salary Expected Per Month</b></td>
              <td>: <?php echo $user_profile_data[0]['salry_expect']?></td>
           
            </tr>
        <tr>
  
             
              <td><b>If selected, when can you join (Notice Period)</b></td>
              
              <td>: <?php echo $user_profile_data[0]['notice_period']?></td>
             
            </tr>
        </table>
		 </div>
        <ul class="list-inline">
 <!--<li class="pull-right">
                      <a href="#" class="link-black text-sm"><strong><i class="fa fa-pencil margin-r-5"></i>Edit</strong></a></li>-->
</ul>
              </div>
              <!-- /.tab-pane -->
               <div class="tab-pane" id="reference">
                <!-- The timeline -->
                <?php  if($user_profile_data[0]['ref_1_name']!="" || $user_profile_data[0]['ref_1_name']!=null){$styref1="";}else{$styref1="display:none";};?>
    <div class="bs-callout bs-callout-danger" style="<?php echo $styref1?>">
        <h3>Reference</h3>
        <table class="table table-striped table-responsive ">
          <thead>
            <tr>
              <th>Name</th>
            <th>Address</th>
            <th>Occupation</th>
              <th>Telephone No</th>
      
          </tr>
          </thead>
          <tbody>
			
            <tr>
              <td><?php echo $user_profile_data[0]['ref_1_name']?></td>
              <td><?php echo $user_profile_data[0]['ref_1_add']?></td>
                <td><?php echo $user_profile_data[0]['ref_1_occu']?></td>
              <td> <?php echo $user_profile_data[0]['ref_1_cell']?> </td>
             
            </tr>      
          </tbody>
        </table>
        <ul class="list-inline">
<!-- <li class="pull-right">
                      <a href="#" class="link-black text-sm"><strong><i class="fa fa-pencil margin-r-5"></i>Edit</strong></a></li>-->
</ul>
      </div>
	  <?php  if($user_profile_data[0]['ref_2_name']!="" || $user_profile_data[0]['ref_2_name']!=null){$styref2="";}else{$styref2="display:none";};?>
	    <div class="bs-callout bs-callout-danger" style="<?php echo $styref2?>">
        <h3>Reference</h3>
        <table class="table table-striped table-responsive ">
          <thead>
            <tr>
              <th>Name</th>
            <th>Address</th>
            <th>Occupation</th>
              <th>Telephone No</th>
      
          </tr>
          </thead>
          <tbody>
			
            <tr>
              <td><?php echo $user_profile_data[0]['ref_2_name']?></td>
              <td><?php echo $user_profile_data[0]['ref_2_add']?></td>
                <td><?php echo $user_profile_data[0]['ref_2_occu']?></td>
              <td> <?php echo $user_profile_data[0]['ref_2_cell']?> </td>
             
            </tr>      
          </tbody>
        </table>
        <ul class="list-inline">
 <!--<li class="pull-right">
                      <a href="#" class="link-black text-sm"><strong><i class="fa fa-pencil margin-r-5"></i>Edit</strong></a></li>-->
</ul>
      </div>
    <div class="bs-callout bs-callout-danger">    
 
<h3>Other reference</h3>              
  <table class="table table-striped table-responsive">
      <tbody>
     <tr>    
        <td><b>May we make discrete enquiries about you from them</b></td>
        <td>:<?php echo $user_profile_data[0]['discrete_enquiries']?> </td>       
     </tr>
     <tr>    
        <td><b>Source through which you have applied to us</b></td>
        <td>: <?php echo $user_profile_data[0]['source_name']?></td>       
     </tr>
     <tr>    
        <td><b>If referred, Please mention the name of the employee</b></td>
        <td>: <?php echo $user_profile_data[0]['refrered_name']?></td>       
     </tr>
      
  
  

    </tbody>
  </table>
  <ul class="list-inline">
 <!--<li class="pull-right">
                      <a href="#" class="link-black text-sm"><strong><i class="fa fa-pencil margin-r-5"></i>Edit</strong></a></li>-->
</ul>

    </div><!--col-md-12 close-->     
    
    
              </div>
              <!-- /.tab-pane -->
              
               <div class="tab-pane" id="family">
                <div class="bs-callout bs-callout-danger">    
 
<h3>Family Background</h3>
<h4>Father</h4>
  <table class="table table-striped table-responsive ">
          <thead>
            <tr>
              <th>Father Age</th>
            <th>Father  Education</th>
            <th>Father Occupation </th>
             
           
        
          </tr></thead>
          <tbody>
            <tr>
              <td><?php echo $user_profile_data[0]['father_age']?></td>
              <td><?php echo $user_profile_data[0]['father_edu']?></td>
               <td> <?php echo $user_profile_data[0]['father_occu']?> </td>
             
             
            </tr>
           
            
             
          </tbody>
        </table>
  <ul class="list-inline">
 <!--<li class="pull-right">
                      <a href="#" class="link-black text-sm"><strong><i class="fa fa-pencil margin-r-5"></i>Edit</strong></a></li>-->
</ul>

    </div><!--col-md-12 close-->
     <div class="bs-callout bs-callout-danger">    
 

<h4>Mother</h4>
  <table class="table table-striped table-responsive ">
          <thead>
            <tr>
              <th>Mother Age</th>
            <th>Mother  Education</th>
            <th>Mother Occupation </th>
             
           
        
          </tr></thead>
          <tbody>
            <tr>
               <td><?php echo $user_profile_data[0]['mother_age']?></td>
              <td><?php echo $user_profile_data[0]['mother_edu']?></td>
               <td> <?php echo $user_profile_data[0]['mother_occu']?> </td>
             
             
            </tr>
           
            
             
          </tbody>
        </table>
  <ul class="list-inline">
 <!--<li class="pull-right">
                      <a href="#" class="link-black text-sm"><strong><i class="fa fa-pencil margin-r-5"></i>Edit</strong></a></li>-->
</ul>

    </div><!--col-md-12 close-->
	 <?php  if($user_profile_data[0]['spouse_age']!="" || $user_profile_data[0]['spouse_age']!=null){$stysp="";}else{$stysp="display:none";};?>
	    <div class="bs-callout bs-callout-danger" style="<?php echo $stysp?>">
       
 
<h4>Spouse</h4>
  <table class="table table-striped table-responsive ">
          <thead>
            <tr>
              <th>Spouse Age</th>
            <th>Spouse  Education</th>
            <th>Spouse Occupation </th>
             
           
        
          </tr></thead>
          <tbody>
            <tr>
                <td><?php echo $user_profile_data[0]['spouse_age']?></td>
              <td><?php echo $user_profile_data[0]['spouse_edu']?></td>
               <td> <?php echo $user_profile_data[0]['spouse_occu']?> </td>
             
             
            </tr>
           
            
        <tr>
              <td colspan="">Have you been involved personally in any Legal/Criminal processdings</td>
              <td><?php echo $user_profile_data[0]['crime_involve']?></td>
               
             
             
            </tr>      
          </tbody>
        </table>
  
  <ul class="list-inline">
 <!--<li class="pull-right">
                      <a href="#" class="link-black text-sm"><strong><i class="fa fa-pencil margin-r-5"></i>Edit</strong></a></li>-->
</ul>

    </div><!--col-md-12 close-->   
                  
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
  