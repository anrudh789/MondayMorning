
<!-- **Main** -->
<div id="main">

<!-- Slider Section -->

<!-- Sub Title Section -->
<!-- ** Breadcrumb Section ** --><section class="main-title-section-wrapper">
<div class="container">		<div class="main-title-section">
<h1>Jenny Sheen</h1><!-- ** breadcrumb - End -->		</div>		<div class="header-search"> 
</div>	</div></section><!-- ** Breadcrumb Section End ** -->        <!-- Sub Title Section -->   

<!-- ** Container ** -->
<div class="container">

<!-- ** Primary Section ** -->
<section id="primary" class="content-full-width">
<article id="post-4396" class="post-4396 dt_teachers type-dt_teachers status-publish has-post-thumbnail hentry">
<h3 class="border-title ">summary: <?php echo $job_data[0]['name']?> <span></span></h3>
<div class="column dt-sc-one-fourth space first">
<div class="team-thumb">
<img width="550" height="550" src="" class="attachment-full size-full wp-post-image" alt="teacher4" sizes="(max-width: 550px) 100vw, 550px" />
</div>
</div>

<div class="column dt-sc-three-fourth space">
<div class='content-full-width'>
<div class="column dt-sc-one-half space first">
<ul class="teachers-details">
<li>Full Name :<?php echo $job_data[0]['name']?></li>
<li> Email : <?php echo $job_data[0]['fa_hu_name']?> </li>
<li>Mobile No. : <?php echo $job_data[0]['cell']?> </li>
<li>DOB : <?php echo $job_data[0]['dob']?></li>
</ul>
</div>
<div class="column dt-sc-one-half space ">
<ul class="teachers-details">
<li> Father's Name: <?php echo $job_data[0]['fa_hu_name']?></li>
<li> Current Location: <?php echo $job_data[0]['current_city']?> </li>
<li> Position Applied For : <?php echo $job_data[0]['name']?></li>
<li> Address : <?php echo $job_data[0]['present_addr']?> </li>
</ul>
</div>
<ul class="teachers-details">
<li>Father/Husband Occupation:<?php echo $job_data[0]['fa_hu_occupation']?></li>
<li>Parmanent Address : <?php echo $job_data[0]['permanent_addr']?></li>

</ul>
</div>

<h5 class="border-title ">Qualification<span></span></h5><table class="courses-table-list tablesorter">
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
<td ><?php echo $job_data[0]['ssc_institution']?></td>
<td ><?php echo $job_data[0]['ssc_year_pass']?></td>
<td ><?php echo $job_data[0]['ssc_marks_per']?></td>
<td ><?php echo $job_data[0]['ssc_achievements']?></td>
</tr>
<tr>
<td>HSC (XII)</td>
<td ><?php echo $job_data[0]['hsc_institution']?></td>
<td ><?php echo $job_data[0]['hsc_year_pass']?></td>
<td ><?php echo $job_data[0]['hsc_marks_per']?></td>
<td ><?php echo $job_data[0]['hsc_achievements']?></td>
</tr>
<tr>
<td ><?php echo $job_data[0]['grad_degree']?></td>
<td ><?php echo $job_data[0]['grad_institution']?></td>
<td ><?php echo $job_data[0]['grad_year_pass']?></td>
<td ><?php echo $job_data[0]['grad_marks_per']?></td>
<td ><?php echo $job_data[0]['grad_achievements']?></td>
</tr>
<tr>
<td ><?php echo $job_data[0]['pg_degree']?></td>
<td ><?php echo $job_data[0]['pg_institution']?></td>
<td ><?php echo $job_data[0]['pg_year_pass']?></td>
<td ><?php echo $job_data[0]['pg_marks_per']?></td>
<td ><?php echo $job_data[0]['pg_achievements']?></td>
</tr>
<tr>
<td>CAT Score-</td><td><?php echo $job_data[0]['cat_score']?></td>
<td>GMAT Score-</td><td><?php echo $job_data[0]['gmat_score']?></td>
<td>Jee Rank-<?php echo $job_data[0]['jee_core']?></td>
</tr>


</tbody></table>

<table>
<h5 class="border-title ">Work History<span></span></h5><table class="courses-table-list tablesorter">
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
<td ><?php echo $job_data[0]['emp1_from']?></td>
<td ><?php echo $job_data[0]['ctc_join_1']?></td>
<td ><?php echo $job_data[0]['ctc_left_1']?></td>
<td ><?php echo $job_data[0]['reason_leave1']?></td>
</tr>
<tr>
<td >2</td>
<td ><?php echo $job_data[0]['org_name2']?></td>
<td ><?php echo $job_data[0]['designnation_2']?></td>
<td ><?php echo $job_data[0]['emp2_from']?></td>
<td ><?php echo $job_data[0]['ctc_join_2']?></td>
<td ><?php echo $job_data[0]['ctc_left_2']?></td>
<td ><?php echo $job_data[0]['reason_leave2']?></td>
</tr>
<tr>
<td >3</td>
<td ><?php echo $job_data[0]['org_name3']?></td>
<td ><?php echo $job_data[0]['designnation_3']?></td>
<td ><?php echo $job_data[0]['emp3_from']?></td>
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
<h5 class="border-title ">References<span></span></h5><table class="courses-table-list tablesorter">
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
<td ><?php echo $job_data[0]['discrete_enquiries']?></td>


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
<h5 class="border-title ">Family Background<span></span></h5><table class="courses-table-list tablesorter">
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
<td colspan="2"><?php echo $job_data[0]['crime_involve']?></td>

</tr>

</tbody></table>
</div>
<div class="dt-sc-hr-invisible-small  "></div>
</article>

</section><!-- ** Primary Section End ** -->                </div><!-- **Container - End** -->
</div><!-- **Main - End** -->

