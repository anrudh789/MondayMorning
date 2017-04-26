<!-- **Main** -->
<div id="main">
	<style>
.staticbtn {
	border: 2px solid;
	padding: 5px;
	border-radius: 60px; float: right;
}
	.bottn {
		float: left;
margin-left: 92px;
}
	</style>
	<?php error_reporting(0); $imgpath=base_url().'upload/';?>
<!-- Slider Section -->

<!-- Sub Title Section -->
<!-- ** Breadcrumb Section ** --><section class="main-title-section-wrapper">
<div class="container">		<div class="main-title-section">
<h1><?php echo $job_data[0]['name']?></h1><!-- ** breadcrumb - End -->		</div>		<div class="header-search"> 
</div>	</div></section><!-- ** Breadcrumb Section End ** -->        <!-- Sub Title Section -->   

<!-- ** Container ** -->
<div class="container">

<!-- ** Primary Section ** -->
<section id="primary" class="content-full-width">
<article id="post-4396" class="post-4396 dt_teachers type-dt_teachers status-publish has-post-thumbnail hentry">
	
<h3 class="border-title ">summary: <?php echo $job_data[0]['name']?> <span></span><p style="float: right;
font-size: 17px;
margin: -9px 0 0 0;"><a class="staticbtn" href="<?php echo base_url()?>caf-one">Edit Personal Details</a></p></h3>
	

	
<div class="column dt-sc-one-fourth space first">
<div class="team-thumb">
<img width="550" height="550" src="<?php echo $imgpath.'user.jpg'?>"
class="attachment-full size-full wp-post-image" alt="" sizes="(max-width: 550px) 100vw, 550px" id="imgh" />
<br>
<br>
<input type="file" id="s_img" name="uimage">
</div>
</div>

<div class="column dt-sc-three-fourth space">
<div class='content-full-width'>

<ul class="teachers-details">
<li><b>Full Name : </b><?php echo $job_data[0]['name']?></li>
<li><b> Email : </b><?php echo $this->session->userdata('user_email');?> </li>
<li><b>Mobile No. : </b><?php echo $job_data[0]['cell']?> </li>
<li><b>DOB :</b> <?php echo $job_data[0]['dob']?></li>
<li><b>Gender :</b> <?php echo $job_data[0]['gender']?></li>
<li> <b>Address : </b><?php echo $job_data[0]['present_addr']?> </li>

<li> <b>Father's Name:</b> <?php echo $job_data[0]['fa_hu_name']?></li>
<li> <b>Current Location:</b> <?php echo $job_data[0]['current_city']?> </li>
<li> <b>Position Applied For : </b><?php echo $job_data[0]['applied_for']?></li>

<li><b>Father/Husband Occupation:</b> <?php echo $job_data[0]['fa_hu_occupation']?></li>
<li><b>Permanent Address : </b><?php echo $job_data[0]['permanent_addr']?></li>
</ul>





<h5 class="border-title ">Qualification<span></span> &nbsp;&nbsp;<a class="staticbtn" href="<?php echo base_url()?>caf-two">Edit Qualification</a></h5> 
<table class="courses-table-list tablesorter">
<thead>
<tr>
<th  scope="col">#</th>
<th  scope="col">Institute/Specialization</th>
<th  scope="col">Year Of Passing</th>
<th scope="col">% Of marks</th>
<th  scope="col">Achievements</th>
</tr>
</thead>
<tbody><tr>
<td >SSC (X)</td>
<td ><?php
  $sid=$job_data[0]['ssc_institution'];
  $whessc="`bid`='$sid'";
$ssc_institution=$this->Crud_modal->all_data_select('*','master_board',$whessc,'bid asc');
echo $ssc_institution[0]['board_name'];?></td>
<td ><?php echo $job_data[0]['ssc_year_pass']?></td>
<td ><?php echo $job_data[0]['ssc_marks_per']?></td>
<td ><?php echo $job_data[0]['ssc_achievements']?></td>
</tr>
<tr>
<td>HSC (XII)</td>
<td ><?php
 $hid=$job_data[0]['hsc_institution'];
  $whessc="`bid`='$hid'";
$ssc_institution=$this->Crud_modal->all_data_select('*','master_board',$whessc,'bid asc');
echo $ssc_institution[0]['board_name']?></td>
<td ><?php echo $job_data[0]['hsc_year_pass']?></td>
<td ><?php echo $job_data[0]['hsc_marks_per']?></td>
<td ><?php echo $job_data[0]['hsc_achievements']?></td>
</tr>
<tr>
<td ><?php

$gid=$job_data[0]['grad_degree'];
  $whessc="`md_id`='$gid'";
$gd=$this->Crud_modal->all_data_select('*','master_degree',$whessc,'md_id asc');


echo $gd[0]['degree_name']?>
</td>
<td ><?php

$giid=$job_data[0]['grad_institution'];
  $whessc="`mu_id`='$giid'";
$gi=$this->Crud_modal->all_data_select('*','master_university',$whessc,'mu_id asc');


echo $gi[0]['un_name']?></td>
<td ><?php echo $job_data[0]['grad_year_pass']?></td>
<td ><?php echo $job_data[0]['grad_marks_per']?></td>
<td ><?php echo $job_data[0]['grad_achievements']?></td>
</tr>
<tr>
<td ><?php
$pid=$job_data[0]['pg_degree'];
  $whessc="`md_id`='$pid'";
$pd=$this->Crud_modal->all_data_select('*','master_degree',$whessc,'md_id asc');


echo $pd[0]['degree_name']?>
</td>
<td ><?php
$piid=$job_data[0]['pg_institution'];
  $whessc="`mu_id`='$piid'";
$pi=$this->Crud_modal->all_data_select('*','master_university',$whessc,'mu_id asc');



echo $pi[0]['un_name']?></td>
<td ><?php echo $job_data[0]['pg_year_pass']?></td>
<td ><?php echo $job_data[0]['pg_marks_per']?></td>
<td ><?php echo $job_data[0]['pg_achievements']?></td>
</tr>
<tr>
<td>CAT Score-</td><td><?php if(isset($job_data[0]['cat_score']))
					 {
								if($job_data[0]['cat_score']!=0)
							 {
								echo $job_data[0]['cat_score'];
							 }
							 else{echo 'NA';}
					 }?></td>
<td>GMAT Score-</td><td><?php if(isset($job_data[0]['gmat_score']))
					 {
								if($job_data[0]['gmat_score']!=0)
							 {
								echo $job_data[0]['gmat_score'];
							 }
							 else{echo 'NA';}
					 }?></td>
<td>Jee Rank-<?php if(isset($job_data[0]['jee_core']))
					 {
								if($job_data[0]['jee_core']!=0)
							 {
								echo $job_data[0]['jee_core'];
							 }
							 else{echo 'NA';}
					 }
					?></td>
</tr>


</tbody></table>

<table>
<h5 class="border-title ">Work History<span></span>&nbsp;&nbsp;<a class="staticbtn" href="<?php echo base_url()?>caf-three">Edit Work History</a></h5><table class="courses-table-list tablesorter">
<thead>
<tr>
<th  scope="col">#</th>
<th  scope="col">Organization Name </th>
<th  scope="col">Designation </th>
<th scope="col">Employment Period(From-To)</th>
<th  scope="col">CTC-at the time of Joining </th>
<th  scope="col">CTC-at the time of Exit </th>
<th  scope="col">Reason of Leaving </th>
</tr>
</thead>
<tbody>
<tr>
<td >1</td>
<td ><?php echo $job_data[0]['org_name1']?></td>
<td ><?php echo $job_data[0]['designnation_1']?></td>
<td ><?php echo $job_data[0]['emp1_from'].' <br>to <br>'.$job_data[0]['emp1_to']?></td>
<td ><?php echo $job_data[0]['ctc_join_1']?></td>
<td ><?php echo $job_data[0]['ctc_left_1']?></td>
<td ><?php echo $job_data[0]['reason_leave1']?></td>
</tr>
<tr>
<td >2</td>
<td ><?php echo $job_data[0]['org_name2']?></td>
<td ><?php echo $job_data[0]['designnation_2']?></td>
<td ><?php echo $job_data[0]['emp2_from'].' <br>to <br>'.$job_data[0]['emp2_to']?></td>
<td ><?php echo $job_data[0]['ctc_join_2']?></td>
<td ><?php echo $job_data[0]['ctc_left_2']?></td>
<td ><?php echo $job_data[0]['reason_leave2']?></td>
</tr>
<tr>
<td >3</td>
<td ><?php echo $job_data[0]['org_name3']?></td>
<td ><?php echo $job_data[0]['designnation_3']?></td>
<td ><?php echo $job_data[0]['emp3_from'].' <br>to <br>'.$job_data[0]['emp3_to']?></td>
<td ><?php echo $job_data[0]['ctc_join_3']?></td>
<td ><?php echo $job_data[0]['ctc_left_3']?></td>
<td ><?php echo $job_data[0]['reason_leave3']?></td>
</tr>
<tr>
<td colspan="3">Salary Expected Per Month</td>
<td colspan="4"><?php echo $job_data[0]['salry_expect']?></td></tr>

<tr>
<td colspan="4">If selected, when can you join (Notice Period) </td>
<td colspan="3"><?php echo $job_data[0]['notice_period']?></td>
</tr>
</tbody></table>
<table>
<h5 class="border-title ">References<span></span>&nbsp;&nbsp;<a class="staticbtn " href="<?php echo base_url()?>caf-three">Edit References</a></h5><table class="courses-table-list tablesorter">
<thead>
<tr>
<th  >#</th>
<th  >References-1 </th>
<th  >References-2 </th>

</tr>
</thead>
<tbody>
<tr>
<td >Name</td>
<td ><?php echo $job_data[0]['ref_1_name']?></td>
<td ><?php echo $job_data[0]['ref_2_name']?></td>

</tr>
<tr>
<td >Address</td>
<td ><?php echo $job_data[0]['ref_1_add']?></td>
<td ><?php echo $job_data[0]['ref_2_add']?></td>

</tr>
<tr>
<td >Occupation </td>
<td ><?php echo $job_data[0]['ref_1_occu']?></td>
<td ><?php echo $job_data[0]['ref_2_occu']?></td>

</tr>
<tr>
<td >Telephone No </td>
<td ><?php echo $job_data[0]['ref_1_cell']?></td>
<td ><?php echo $job_data[0]['ref_2_cell']?></td>

</tr>
<tr>
<td colspan="2"><b>May we make discrete enquiries about you from them -</b></td>
<td ><?php if(isset($job_data[0]['discrete_enquiries'])){if($job_data[0]['discrete_enquiries']==1){echo 'Yes';}else{echo 'No';}}?></td>


</tr>
<tr>
<td colspan="2"><b>Source though which you have applied to us-</b></td>
<td ><?php echo $job_data[0]['source_name']?></td>

</tr>
<tr>
<td colspan="2"><b>If Referred, Please mention the name of the employee-</b></td>
<td ><?php echo $job_data[0]['refrered_name']?></td>

</tr>
</tbody></table>


<table>
<h5 class="border-title ">Family Background<span></span>&nbsp;&nbsp;<a class="staticbtn" href="<?php echo base_url()?>caf-four">Edit Family Details</a></h5><table class="courses-table-list tablesorter">
<thead>
<tr>
<th  scope="col">#</th>
<th  scope="col">Age </th>
<th scope="col">Education</th>
<th  scope="col">Occupation</th>


</tr>
</thead>
<tbody>

<tr>
<td>Father</td>
<td ><?php echo $job_data[0]['father_age']?></td><td ><?php echo $job_data[0]['father_edu']?></td ><td ><?php echo $job_data[0]['father_occu']?></td>

</tr>
<tr>
<td>Mother</td>
<td ><?php echo $job_data[0]['mother_age']?></td><td ><?php echo $job_data[0]['mother_edu']?></td ><td ><?php echo $job_data[0]['mother_occu']?></td>

</tr>
<tr>
<td>Spouse</td>
<td ><?php echo $job_data[0]['w_or_h_age']?></td><td ><?php echo $job_data[0]['w_or_h_edu']?></td ><td ><?php echo $job_data[0]['w_or_h_occu']?></td>

</tr>
<tr>
<td colspan="2">Have you been involved personally in any legal / criminal processdings ?</td>
<td colspan="2"><?php
    if(isset($job_data[0]['crime_involve']))
	{
		 if($job_data[0]['crime_involve']==2)
		 {
			 echo 'No';
		 }
		   else{
			echo 'Yes';
		 }
	} ?></td>

</tr>

</tbody>
</table><form action="<?php echo base_url()?>review-save"  class="bottn">
	 <input type="submit" class="btn btn-primary" value="Save Details">
	
</form>
</div>



</article>

</section><!-- ** Primary Section End ** -->                </div><!-- **Container - End** -->
</div><!-- **Main - End** -->

<script>
        
     
      jQuery("#s_img").change(function() {

    var val = jQuery(this).val();

    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
        case 'gif': case 'jpg': case 'png':
           
               

        var reader = new FileReader();
                    reader.onload = function (e) {
                        jQuery("#imgh").attr("src", e.target.result);
                    }
                    reader.readAsDataURL(jQuery(this)[0].files[0]);

        reader.readAsDataURL(input.files[0]);
            break;
        default:
            jQuery(this).val('');
            // error message here
             alert('Use can use only jpg,png,gif');
            break;
    }
});
        
     </script>