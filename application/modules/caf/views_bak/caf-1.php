<??>
<!-- **Main** -->
<div id="main">

  <!-- Slider Section -->

  <!-- Sub Title Section -->
  <!-- ** Breadcrumb Section ** -->
  <section class="main-title-section-wrapper">
    <div class="container">
      <div class="main-title-section">
        <h1>Application Form</h1>
        <div class="breadcrumb">
          <a href="">Home</a><span class='fa default'>
                    
                </span>/<span class='current'>Application Form</span>
        </div>
        <!-- ** breadcrumb - End -->
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
              <fieldset>
								<form name="" action="<?php echo base_url();?>step-one" method="post">
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
													<option value="1" <?php if(isset($job_data[0]['applied_for'])==1){echo "selected=selected";}else{echo '';}?>>Consultant</option>
												</select>
												</div>
												</div>
												<!--<div class="course-type-module">
												<label>Sur Name<span class="required"> * </span> </label> 
												<input type="text" name="surname" class="input"
													value="<?php if(isset($job_data[0]['surname'])){echo $job_data[0]['surname']; }?>"  required="required"></div>-->
												<div >
												<label>Name<span class="required"> * </span> </label> 
												<input type="text" name="name" class="input" value="<?php echo $this->session->userdata('name');?>"  required="required"></div><br>
												<div class="course-type-module">
												<label>Father/Husband's Name<span class="required"> * </span> </label> 
												<input type="text" name="fa_hu_name" class="input" value="<?php  if(isset($job_data[0]['surname'])){echo $job_data[0]['surname'];}?>" size="20" required="required"></div>
												<div class="sub-course-type-module">
												<label>Father/Husband's Occupation<span class="required"> * </span> </label> 
												<input type="text" name="fa_hu_occupation" class="input"
										value="<?php if(isset($job_data[0]['fa_hu_occupation'])){echo $job_data[0]['fa_hu_occupation'];}?>" size="20" required="required"></div>
               </fieldset>
        <!-- End Personal Detail -->
        
         <!-- Start Address  Detail -->
            <fieldset>
								        <h4 class="border-title ">Address<span></span></h4>
									
											<div class="course-type-module">
											<label>Present Address<span class="required"> * </span> </label>
											<div class="sub-course-type-module">
											<input type="text" name="present_addr" class="input"
														 value="<?php  if(isset($job_data[0]['present_addr'])){echo $job_data[0]['present_addr'];}?>" required="required"></div></div>
											<div class="sub-course-type-module">
											<label>Permanent Address<span class="required"> * </span> </label>
											<input type="text" name="permanent_addr" class="input"
														 value="<?php  if(isset($job_data[0]['permanent_addr'])){echo $job_data[0]['permanent_addr'];}?>"  required="required" />
											</div>
											
              </fieldset >
          <!-- End Address -->
          
           <!-- Start Contact Phone Nos:  -->	
             <fieldset>
												
										        <h4 class="border-title ">Contact Phone Number<span></span></h4>
												<div class="sub-course-type-module">
												<label>Cell<span class="required"> * </span> </label> 
												<input type="text" maxlength="10" name="cell" class="input"  pattern="[0-9]{10}"
															value="<?php  if(isset($job_data[0]['cell'])){echo $job_data[0]['cell'];}?>" 
															 required="required"></div>
												<div class="course-type-module">
												<label>Emergency Contact Number<span class="required">  </span> </label> 
												<input maxlength="10" type="text" name="emergency_cell" class="input"
															 value="<?php  if(isset($job_data[0]['emergency_cell'])){echo $job_data[0]['emergency_cell'];}?>"  ></div>
        
            </fieldset >
        <!-- End  Contact Phone Nos: -->
          
          <!-- Start Other  -->	
              <fieldset >
										
								       <h4 class="border-title ">Other Information<span></span></h4>	
											<div class="sub-course-type-module">
											<label>Date, Month & Year of Birth:<span class="required"> * </span> </label> 
											<input type="text" name="dob" class="input" id="dob_caf" value="<?php  if(isset($job_data[0]['dob'])){echo $job_data[0]['dob'];}?>" required="required"></div>
											<div class="course-type-module">
											<label> Current Location <span class="required"> * </span> </label>
											<div class="selection-box">
											<select required="required" name="current_city" class="selection-box" >
                              <option value="">Select Location</option>
															<?php foreach($state as $sta){?>
															<option <?php if(isset($job_data[0]['current_city'])==$sta['id']){echo 'selected=selected';}else{echo '';}?> value="<?php echo $sta['id']?>" ><?php echo $sta['state']?></option>
															<?php  }?>
                      </select>
											</div>
										<!--	<input type="text" name="current_city" class="input" value="" size="20" required="required">-->
										</div>
										
											<div class="sub-course-type-module">
													  <button type="submit" name="caf_one" value="caf_one" class="btn btn-primary btn-md">NEXT</button>		
											</div>
							 </fieldset>
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