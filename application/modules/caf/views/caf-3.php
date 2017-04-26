 <style>
	.empfrom{
		width: 82px !important;
	}
	.empto{
		 float: right !important;
    margin-top: -48px !important;
    width: 82px !important;
	   }
 </style>
<div id="main">

  <section class="main-title-section-wrapper">
    <div class="container">
      <div class="main-title-section">
        <h1>Application Form</h1>
       
        <!-- ** breadcrumb - End -->
      </div>
      <div class="header-search">
      </div>
    </div>
  </section>
  
  <div class="container">

    <!-- ** Primary Section ** -->
    <section id="primary" class="content-full-width">
      <div id="post-4753" class="post-4753 page type-page status-publish hentry">
        <div class="dt-sc-course-searchform-container">
          <div class="dt-sc-course-searchform">

            <div class="dt-sc-searchbox-container" id="mydiv">
            <!-- Start SSC (Class X) Examination Details -->	
             <form name="" action="<?php echo base_url()?>step-three" method="post">
 
   
		    <div class="content-full-width">
			    <table >
						<h4 class="border-title  ">Work History<span></span></h4>
				<thead>
					
					<tr >
						<th class="text-center">
							#
						</th>
						<th class="text-center">
							Organization Name
						</th>
						<th class="text-center">
							Designation
						</th>
						<th class="text-center">
							Employment Period(From-To)
						</th>
						
							<th class="text-center">
						CTC-at the time of joining
						</th>
						<th class="text-center">
						CTC-at the time of exit
						</th>
						<th class="text-center">
						Reason of Leaving
						</th>						
						
					</tr>
				</thead>
				<tbody>
					<tr >
						<td>
						1
						</td>
						<td>
						<input type="text" placeholder="(e.g. TKC)" maxlength="70" name='org_name1'  value="<?php if(isset($job_data[0]['org_name1'])){echo $job_data[0]['org_name1']; }?>" class="form-control"/>
						</td>
						<td>
						<input type="text" placeholder="(e.g. Software D.)" maxlength="20" name='designnation_1' value="<?php if(isset($job_data[0]['designnation_1'])){echo $job_data[0]['designnation_1']; }?>"  class="form-control"/>
						</td>
						<td>
							
						<input  id="emp1from"" placeholder="(e.g. 2017-05)" type="text" name='emp1_from' value="<?php if(isset($job_data[0]['emp1_from'])){echo $job_data[0]['emp1_from']; }?>"  class="empfrom form-control"/>
								   
									<input  id="emp1to" placeholder="(e.g. 2017-05)" type="text" name='emp1_to' value="<?php if(isset($job_data[0]['emp1_to'])){echo $job_data[0]['emp1_to']; }?>"  class="empto form-control"/>

						</td>
						
						<td>
						<input type="text" pattern="[0-9]+" placeholder="( e.g. 100000) " maxlength="10" name='ctc_join_1' value="<?php if(isset($job_data[0]['ctc_join_1'])){echo $job_data[0]['ctc_join_1']; }?>"   class="form-control"/>
						</td>
						<td>
						<input type="text" pattern="[0-9]+" placeholder="( e.g. 100000) " maxlength="10" name='ctc_left_1' value="<?php if(isset($job_data[0]['ctc_left_1'])){echo $job_data[0]['ctc_left_1']; }?>" class="form-control"/>
						</td>
						<td>
						<input type="text" placeholder="Reason" maxlength="20" name='reason_leave1' value="<?php if(isset($job_data[0]['reason_leave1'])){echo $job_data[0]['reason_leave1']; }?>" class="form-control"/>
						</td>
					</tr>
					<tr >
						<td>
						2
						</td>
						<td>
						<input type="text" placeholder="(e.g. TKC..)" maxlength="70" name='org_name2' value="<?php if(isset($job_data[0]['org_name2'])){echo $job_data[0]['org_name2']; }?>"  class="form-control"/>
						</td>
						<td>
						<input type="text" placeholder="(e.g. Software D.)" maxlength="20" name='designnation_2' value="<?php if(isset($job_data[0]['designnation_2'])){echo $job_data[0]['designnation_2']; }?>"  class="form-control"/>
						</td>
						<td>
						<input  id="emp2from" placeholder="(e.g. 2017-05)" type="text" name='emp2_from'  value="<?php if(isset($job_data[0]['emp2_from'])){echo $job_data[0]['emp2_from']; }?>" class="empfrom form-control"/>
						<input  id="emp2to" placeholder="(e.g. 2017-05)" type="text" name='emp2_to'  value="<?php if(isset($job_data[0]['emp2_to'])){echo $job_data[0]['emp2_to']; }?>" class="empto form-control"/>
						
						</td>
						
						<td>
						<input type="text" name='ctc_join_2'
									pattern="[0-9]+" placeholder="( e.g. 100000) " maxlength="10" value="<?php if(isset($job_data[0]['ctc_join_2'])){echo $job_data[0]['ctc_join_2']; }?>" class="form-control"/>
						</td>
						<td>
						<input type="text" pattern="[0-9]+" placeholder="( e.g. 100000)" maxlength="10" name='ctc_left_2' value="<?php if(isset($job_data[0]['ctc_left_2'])){echo $job_data[0]['ctc_left_2']; }?>" class="form-control"/>
						</td>
						<td>
						<input type="text" placeholder="Reason" maxlength="20" name='reason_leave2' value="<?php if(isset($job_data[0]['reason_leave2'])){echo $job_data[0]['reason_leave2']; }?>"  class="form-control"/>
						</td>
					</tr>
					<tr >
						<td>
						3 
						</td>
						<td>
						<input type="text" placeholder="(e.g. TKC...)" maxlength="70" name='org_name3' value="<?php if(isset($job_data[0]['org_name3'])){echo $job_data[0]['org_name3']; }?>"  class="form-control"/>
						</td>
						<td>
						<input type="text" placeholder="(e.g. Software D.)" maxlength="20" name='designnation_3' value="<?php if(isset($job_data[0]['designnation_3'])){echo $job_data[0]['designnation_3']; }?>"  class="form-control"/>
						</td>
						<td>
						<input id="emp3from" placeholder="(e.g. 2017-05)"  type="text" name='emp3_from' value="<?php if(isset($job_data[0]['emp3_from'])){echo $job_data[0]['emp3_from']; }?>"  class="empfrom form-control"/>
						<input id="emp3to"  placeholder="(e.g. 2017-05)"  type="text" name='emp3_to' value="<?php if(isset($job_data[0]['emp3_to'])){echo $job_data[0]['emp3_to']; }?>"  class="empto form-control"/>
			
						</td>
						
						<td>
						<input type="text" pattern="[0-9]+" placeholder="( e.g. 100000) " maxlength="10" name='ctc_join_3'  value="<?php if(isset($job_data[0]['ctc_join_3'])){echo $job_data[0]['ctc_join_3']; }?>" class="form-control"/>
						</td>
						<td>
						<input type="text" pattern="[0-9]+" placeholder="( e.g. 100000) " maxlength="10" name='ctc_left_3'  value="<?php if(isset($job_data[0]['ctc_left_3'])){echo $job_data[0]['ctc_left_3']; }?>" class="form-control"/>
						</td>
						<td>
						<input type="text" name='reason_leave3' placeholder="Reason" maxlength="20" value="<?php if(isset($job_data[0]['reason_leave3'])){echo $job_data[0]['reason_leave3']; }?>"  class="form-control"/>
						</td>
					</tr>
                   
				</tbody>
			    </table>
		    </div>
	    <fieldset>
					<div class="course-type-module">
		<label>Salary Expected Per Month<span class="required"> * </span> </label> 
        <input type="text" maxlength="10" pattern="[0-9]+" placeholder="Type Salary Expected Per Month" name="salry_expect" class="input" value="<?php if(isset($job_data[0]['salry_expect'])){echo $job_data[0]['salry_expect']; }?>" required="required">
	</div>
					<div class="sub-course-type-module">
		<label>If selected, when can you join (Notice Period)<span class="required"> * </span> </label> 
        <input type="text"  maxlength="10" placeholder="Notice Period ( e.g. 30 Days )" name="notice_period" class="input" value="<?php if(isset($job_data[0]['notice_period'])){echo $job_data[0]['notice_period']; }?>" size="" required="required">
	</div>
					
			</fieldset>
			
			<fieldset>
					<h4 class="border-title  ">References<span></span></h4>
 <table >
				<thead>
					
					<tr >
						<th class="text-center">
							#
						</th>
						<th class="text-center">
							1 Reference
						</th>
						<th class="text-center">
							2 Reference
						</th>
						
						
					</tr>
				</thead>
				<tbody>
					<tr >
						<td>
					Name
						</td>
						<td>
						<input type="text" placeholder="(e.g. John deo)" maxlength="15" name='ref_1_name' value="<?php if(isset($job_data[0]['ref_1_name'])){echo $job_data[0]['ref_1_name']; }?>"  class="form-control"/>
						</td>
						<td>
						<input type="text" placeholder="(e.g. wanda)" maxlength="15" name='ref_2_name' value="<?php if(isset($job_data[0]['ref_2_name'])){echo $job_data[0]['ref_2_name']; }?>"  class="form-control"/>
						</td>
						
					</tr>
					<tr >
						<td>
					Address
						</td>
						<td>
						<input type="text" placeholder="(e.g. Sec-62 Noida)" maxlength="100" name='ref_1_add' value="<?php if(isset($job_data[0]['ref_1_add'])){echo $job_data[0]['ref_1_add']; }?>"  class="form-control"/>
						</td>
						<td>
						<input type="text" placeholder="(e.g. Sec-62 Noida)" maxlength="100" name='ref_2_add' value="<?php if(isset($job_data[0]['ref_2_add'])){echo $job_data[0]['ref_2_add']; }?>" class="form-control"/>
						</td>
						
					</tr>
					<tr >
						<td>
						Occupation
						</td>
						<td>
						<input type="text" placeholder="(e.g. Data Scientist)" maxlength="25" name='ref_1_occu' value="<?php if(isset($job_data[0]['ref_1_occu'])){echo $job_data[0]['ref_1_occu']; }?>"  class="form-control"/>
						</td>
						<td>
						<input type="text"  placeholder="(e.g. Accountant)" maxlength="25"  name='ref_2_occu' value="<?php if(isset($job_data[0]['ref_2_occu'])){echo $job_data[0]['ref_2_occu']; }?>" class="form-control"/>
						</td>
						
						
					</tr>
					<tr >
						<td>
						Telephone No
						</td>
						<td>
						<input type="text" name='ref_1_cell' maxlength="10" pattern="[0-9]+" placeholder="10 digit number (e.g. XXXXXXXXXX)" value="<?php if(isset($job_data[0]['ref_1_cell'])){echo $job_data[0]['ref_1_cell']; }?>"  class="form-control"/>
						</td>
						<td>
						<input type="text" name='ref_2_cell'  maxlength="10" pattern="[0-9]+" placeholder="10 digit number (e.g. XXXXXXXXXX)" value="<?php if(isset($job_data[0]['ref_2_cell'])){echo $job_data[0]['ref_2_cell']; }?>"  class="form-control"/>
						</td>
						
						
					</tr>
                   
				</tbody>
			    </table>
 <div class="course-type-module">
        <label>May we make discrete enquiries about you from them <span class="required"> * </span> </label> 
  <input name="discrete_enquiries" id="Nego1" value="1" type="radio" <?php if(isset($job_data[0]['discrete_enquiries']))if($job_data[0]['discrete_enquiries']=='1'){{echo "checked=checked"; }}?> required>
  <label for="Negotiable">Yes</label>
  <input name="discrete_enquiries" id="Nego1" value="2" type="radio" <?php if(isset($job_data[0]['discrete_enquiries']))if($job_data[0]['discrete_enquiries']=='2'){{echo "checked=checked"; }}?> required>
    <label for="Negotiable">No</label>
  
 
    </div>
 </fieldset>
 <fieldset>
					<div class="course-type-module">
		<label>Source though which you have applied to us :<span class="required"> * </span> </label> 
        <input type="text" maxlength="15" placeholder="( e.g. Shine )" name="source_name" class="input" value="<?php if(isset($job_data[0]['source_name'])){echo $job_data[0]['source_name']; }?>" size="" required="required">
	</div>
					<div class="sub-course-type-module">
		<label>If Referred, Please mention the name of the employee<span class="required"> </span> </label> 
        <input type="text" name="refrered_name" maxlength="15" placeholder="( e.g. Jhon )" class="input" value="<?php if(isset($job_data[0]['refrered_name'])){echo $job_data[0]['refrered_name']; }?>" size="" >
	</div>
					
			</fieldset>
			         <p> <input type="submit" class="dt-sc-button" value="Next"></p>
				  <p> <a href="<?php echo base_url().'caf-two'?>" class="dt-sc-button" value="Previous">Previous</a></p>
</form>
  
            </div>
          </div>
        </div >
      
  </div>
  <!-- #post-4753 -->

  </section>
 

</div>
<!-- **Container - End** -->
</div>
<!-- **Main - End** -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

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
