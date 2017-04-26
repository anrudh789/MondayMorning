
<!-- **Main** -->
<div id="main">

  <!-- Slider Section -->

  <!-- Sub Title Section -->
  <!-- ** Breadcrumb Section ** -->
  <section class="main-title-section-wrapper">
    <div class="container">
      <div class="main-title-section">
        <h1>Application Form</h1>
       
      </div>
      <div class="header-search">
      </div>
    </div>
  </section>
  <!-- ** Breadcrumb Section End ** -->
  <!-- Sub Title Section -->

  <!-- ** Container ** -->
  <div class="container">

    <!-- ** Primary Section ** -->
    <section id="primary" class="content-full-width">
      <div id="post-4753" class="post-4753 page type-page status-publish hentry">
        <div class="dt-sc-course-searchform-container">
          <div class="dt-sc-course-searchform">

            <div class="dt-sc-searchbox-container">
            <!-- Start Personal Detail -->	
              
								<form name="" action="<?php echo base_url();?>step-one" method="post">
									<fieldset>
										<h4 class="border-title  ">Personal Detail<span></span></h4>
							
												<div class="course-type-module">
												<label>Email Address<span class="required"> * </span> </label> 
												<input type="email" name="user_email" disabled class="input"
															 value="<?php echo $this->session->userdata('user_email');?>" required="required"></div>
												<div class="sub-course-type-module">
												<label>Position Applied For<span class="required"> * </span> </label>
												<div class="selection-box">
												<select name="applied_for" class="input"   required="required" >
													<option value="">--Select Apply For--</option>
													<option value="Consultant" <?php if(isset($job_data[0]['applied_for'])==1){echo "selected=selected";}else{echo '';}?>>Consultant</option>
												</select>
												</div>
												</div>
												<!--<div class="course-type-module">
												<label>Sur Name<span class="required"> * </span> </label> 
												<input type="text" name="surname" class="input"
													value="<?php if(isset($job_data[0]['surname'])){echo $job_data[0]['surname']; }?>"  required="required"></div>-->
												<div class="course-type-module">
												<label>Name<span class="required"> * </span> </label> 
												<input type="text" maxlength="30" name="name" class="input"
															 value="<?php
															if(isset($job_data[0]['name']))
															 {
																if($job_data[0]['name']!=null || $job_data[0]['name']!='')
																{ echo $job_data[0]['name']; }
																else{
																	 echo $this->session->userdata('name');
																}
															 }
															 else{echo $this->session->userdata('name');}
															
															 ?>"
															 required="required"></div>
											<div class="sub-course-type-module">
												<label>Gender<span class="required"> * </span> </label>
												<div class="selection-box">
												<select name="gender" class="input"   required="required" >
													<option value="">--Select Gender--</option>
													<option value="male" <?php if(isset($job_data[0]['gender'])){if($job_data[0]['gender']=='male'){echo 'selected=selected'; }else{ echo '';} }?>>Male</option>
													<option value="female" <?php if(isset($job_data[0]['gender'])){if($job_data[0]['gender']=='female'){echo 'selected=selected'; }else{ echo '';} }?>>Female</option>
												</select>
												</div>
												</div>
												<div class="course-type-module">
												<label>Father/Husband's Name<span class="required"> * </span> </label> 
												<input maxlength="30" type="text" name="fa_hu_name" placeholder="e.g ( John Doe )" class="input" value="<?php  if(isset($job_data[0]['fa_hu_name'])){echo $job_data[0]['fa_hu_name'];}?>" size="20" required="required"></div>
												<div class="sub-course-type-module">
												<label>Father/Husband's Occupation<span class="required"> * </span> </label> 
												<input type="text" name="fa_hu_occupation" class="input" maxlength="70"  placeholder=" (e.g. Software Developer )"
										value="<?php if(isset($job_data[0]['fa_hu_occupation'])){echo $job_data[0]['fa_hu_occupation'];}?>"  required="required"></div>
												<div class="course-type-module">
											<label> Current Location <span class="required"> * </span> </label>
									
											<select required name="current_city">
                              <option value="">Select Location</option>
															<?php foreach($state as $sta){?>
															<option <?php if(isset($job_data[0]['current_city'])){if($job_data[0]['current_city']==$sta['state']){echo 'selected=selected'; }else{ echo '';} }?>
															
															value="<?php echo $sta['state'];?>" >
															<?php echo $sta['state'];?>
															</option>
															<?php  }?>
                      </select>
											
											</div>
														<div class="sub-course-type-module">
											<label>Date, Month & Year of Birth:<span class="required"> * </span> </label> 
											<input type="text" name="dob" class="input" id="dob_caf" placeholder=" Select Your DOB (e.g. 2017-04-05)"
														 value="<?php  if(isset($job_data[0]['dob'])){echo $job_data[0]['dob'];}?>" required="required"></div>
											
               </fieldset>
        <!-- End Personal Detail -->
        
         <!-- Start Address  Detail -->
            <fieldset>
								        <h4 class="border-title ">Address<span></span></h4>
									
											<div class="course-type-module">
											<label>Present Address<span class="required"> * </span> </label>
											
											<input type="text" name="present_addr" class="input" placeholder="Type a locality ( e.g. Noida )" maxlength="150"
														 value="<?php  if(isset($job_data[0]['present_addr'])){echo $job_data[0]['present_addr'];}?>" required="required"></div>
											<div class="sub-course-type-module">
											<label>Permanent Address<span class="required"> * </span> </label>
											<input type="text" name="permanent_addr" class="input" placeholder="Which locality do you live in ?" maxlength="150"
														 value="<?php  if(isset($job_data[0]['permanent_addr'])){echo $job_data[0]['permanent_addr'];}?>"  required="required" />
											</div>
											
              </fieldset >
     
             <fieldset>
							  <h4 class="border-title ">Contact Phone Number<span></span></h4>
									
										      
												<div class="course-type-module">
												<label>Cell<span class="required"> * </span> </label> 
		<input type="text" maxlength="10" name="cell" class="input"  pattern="[0-9]{10}" placeholder="10 digit number (e.g. XXXXXXXXXX)"
					 value="<?php  if(isset($job_data[0]['cell'])){echo $job_data[0]['cell'];}?>" required="required"></div>
															
															 
												<div class="sub-course-type-module">
												<label>Emergency Contact Number<span class="required">  </span> </label> 
												<input maxlength="10" type="text" name="emergency_cell" class="input" placeholder="10 digit number (e.g. XXXXXXXXXX)"
															 value="<?php  if(isset($job_data[0]['emergency_cell'])){echo $job_data[0]['emergency_cell'];}?>"  ></div>
      
													  <button type="submit" name="caf_one" value="caf_one" class="btn btn-primary btn-md">NEXT</button>		
											
            </fieldset >
      
                 </form>
								
    
               </div>
          </div>
        </div>
  </div>
				
  <!-- #post-4753 -->

  </section>
  <!-- ** Primary Section End ** -->
  <!-- Secondary Right -->

</div>
<!-- **Container - End** -->
</div>
<!-- **Main - End** -->
<style>
	table {
	font-size: 1em;
}

.ui-draggable, .ui-droppable {
	background-position: top;
}
</style>
 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

  jQuery( function() {
    jQuery( "#dob_caf" ).datepicker({
      changeMonth: true,
      changeYear: true,
     dateFormat: 'yy-mm-dd',
     yearRange: "-50:-1",
    });
  } );
 
</script>