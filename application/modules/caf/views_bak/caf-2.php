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
            <!-- Start SSC (Class X) Examination Details -->	
              <form  action="<?php echo base_url();?>step-two" method="post">
								<fieldset>
             <h4 class="border-title  ">SSC (Class X) Examination Details<span></span></h4> 
		<div class="course-type-module">
		<label>(X)Board<span class="required"> * </span> </label> 
	<input type="text" name="ssc_institution" class="input" value="<?php if(isset($job_data[0]['ssc_institution'])){echo $job_data[0]['ssc_institution']; }?>" size="" required="required"></div>
		<div class="sub-course-type-module">
		<label>(XII) Year of Passing</label> 
		<select required="required" name="ssc_year_pass">
   <option value="">--Select Passing Year--</option>
 <?php for($ye=1985;$ye<=date('Y');$ye++){?>
  <option <?php if(isset($job_data[0]['ssc_year_pass'])){if($job_data[0]['ssc_year_pass']==$ye){echo 'selected=selected'; }else{ echo '';} }?> value="<?php echo $ye?>"><?php echo $ye?></option>
	<?php }?>

</select></div>
		
		<div class="course-type-module">
		<label>(X) % of Marks<span class="required"> * </span> </label> 
		<input type="number" name="ssc_marks_per" class="input" value="<?php if(isset($job_data[0]['ssc_marks_per'])){echo $job_data[0]['ssc_marks_per']; }?>"  required="required"></div>
		
		<div class="sub-course-type-module">
		<label>(X) Achievements</label> 
		<input type="text" name="ssc_achievements" class="input" value="<?php if(isset($job_data[0]['ssc_achievements'])){echo $job_data[0]['ssc_achievements']; }?>" size="" ></div>
		<div class="sub-course-type-module">
		</div>
         </fieldset>
        <!-- End SSC (Class X) Examination Details -->
        
         <!-- Start HSC (Class XII) Examination Details -->
        <fieldset>
        <h4 class="border-title  ">HSC (Class XII) Examination Details<span></span></h4> 
		<div class="course-type-module">
		<label>(XII) Board<span class="required"> * </span> </label> 
	<input type="text" name="hsc_institution" class="input" value="<?php if(isset($job_data[0]['hsc_institution'])){echo $job_data[0]['hsc_institution']; }?>" size="20" required="required"></div>
		<div class="sub-course-type-module">
		<label>(XII) Year of Passing</label> 
		<select required="required" name="hsc_year_pass">
  <option value="">--Select Passing Year--</option>
 <?php for($ye=1985;$ye<=date('Y');$ye++){?>
  <option <?php if(isset($job_data[0]['hsc_year_pass'])){if($job_data[0]['hsc_year_pass']==$ye){echo 'selected=selected'; }else{ echo '';} }?> value="<?php echo $ye?>"><?php echo $ye?></option>
	<?php }?>

</select></div>
		<div class="course-type-module">
		<label>(XII) % of Marks<span class="required"> * </span> </label>
		<input type="number" name="hsc_marks_per" class="input"  value="<?php if(isset($job_data[0]['hsc_marks_per'])){echo $job_data[0]['hsc_marks_per']; }?>" size="20" required="required" />
		</div>
        <div class="sub-course-type-module">
		<label>(XII) Achievements<span class="required"> * </span> </label>
		<input type="text" name="hsc_achievements" class="input" value="<?php if(isset($job_data[0]['hsc_achievements'])){echo $job_data[0]['hsc_achievements']; }?>" size=""  />
		</div>
       </fieldset>
          <!-- End HSC (Class XII) Examination Details -->
          
           <!-- Start Contact Phone Nos:  -->	
             <fieldset>
              <h4 class="border-title  ">Graduation Examination Details<span></span></h4> 
		<div class="course-type-module">
		<label>Degree <span class="required"> * </span></label>
		<select name="grad_degree" required="required">
			<option value="">--Select Degree--</option>
          <option <?php if(isset($job_data[0]['grad_degree'])){if($job_data[0]['grad_degree']=='BBA'){echo 'selected=selected'; }else{ echo '';} }?> value="BBA">BBA</option>
          <option <?php if(isset($job_data[0]['grad_degree'])){if($job_data[0]['grad_degree']=='BCA'){echo 'selected=selected'; }else{ echo '';} }?> value="BCA">BCA</option>
          <option <?php if(isset($job_data[0]['grad_degree'])){if($job_data[0]['grad_degree']=='B.Sc'){echo 'selected=selected'; }else{ echo '';} }?> value="B.Sc">B.Sc</option>
        </select>
		</div>
		<div class="sub-course-type-module">
		<label>Institution <span class="required"> * </span> </label> 
		<input type="text" name="grad_institution" required >
		<!--<select required="required" name="grad_institution">
  <option value="University of Oxford">University of Oxford</option>
  <option value="California Institute of Technology">California Institute of Technology</option>
  <option value="Stanford University">Stanford University</option>-->

</select></div>
		<div class="course-type-module">
		<label>Year of Passing</label> 
		<select required="required" name="grad_year_pass">
			 <option value="">--Select Passing Year--</option>
 <?php for($ye=1985;$ye<=date('Y');$ye++){?>
  <option <?php if(isset($job_data[0]['grad_year_pass'])){if($job_data[0]['grad_year_pass']==$ye){echo 'selected=selected'; }else{ echo '';} }?> value="<?php echo $ye?>"><?php echo $ye?></option>
	<?php }?>
  

</select></div>
        <div class="sub-course-type-module">
		<label>% of Marks<span class="required"> * </span> </label> 
		<input type="text" name="grad_marks_per" class="input" value="<?php if(isset($job_data[0]['grad_marks_per'])){echo $job_data[0]['grad_marks_per']; }?>" size="20" required="required"></div>
        <div class="course-type-module">
		<label>Achievements</label> 
		<input type="text" name="grad_achievements" class="input" value="<?php if(isset($job_data[0]['grad_achievements'])){echo $job_data[0]['grad_achievements']; }?>" size="20"></div>
       </fieldset>
        <!-- End  Contact Phone Nos: -->
          
         <!-- Start Other  -->	
              <fieldset>
                 <h4 class="border-title">Post Graduation Examination Details<span></span></h4> 
		<div class="course-type-module">
		<label>PG Degree <span class="required" </span></label>
		<select name="pg_degree">
    <option value="">--Select Degree--</option>
          <option <?php if(isset($job_data[0]['pg_degree'])){if($job_data[0]['pg_degree']=='MBA'){echo 'selected=selected'; }else{ echo '';} }?> value="BBA">MBA</option>
          <option <?php if(isset($job_data[0]['pg_degree'])){if($job_data[0]['pg_degree']=='MCA'){echo 'selected=selected'; }else{ echo '';} }?> value="BCA">MCA</option>
          <option <?php if(isset($job_data[0]['pg_degree'])){if($job_data[0]['pg_degree']=='M.Sc'){echo 'selected=selected'; }else{ echo '';} }?> value="B.Sc">M.Sc</option>
        </select>     
		</div>
		<div class="sub-course-type-module">
		<label>(PG)Institution </label> 
		<input type="text" name="pg_institution" >
		<!--<select  name="pg_institution">
			<option value="">--Select Institution--</option>
          <option <?php if(isset($job_data[0]['pg_institution'])){if($job_data[0]['pg_institution']=='1'){echo 'selected=selected'; }else{ echo '';} }?> value="1">University of Oxford</option>
          <option <?php if(isset($job_data[0]['pg_institution'])){if($job_data[0]['pg_institution']=='2'){echo 'selected=selected'; }else{ echo '';} }?> value="2">California Institute of Technology</option>
          <option <?php if(isset($job_data[0]['pg_institution'])){if($job_data[0]['pg_institution']=='3'){echo 'selected=selected'; }else{ echo '';} }?> value="3">Stanford University</option>
        </select> -->
 </div>
		<div class="course-type-module">
		<label>(PG) Year of Passing</label> 
		<select  name="pg_year_pass">
  <option value="">--Select Passing Year--</option>
 <?php for($ye=1985;$ye<=date('Y');$ye++){?>
  <option <?php if(isset($job_data[0]['pg_year_pass'])){if($job_data[0]['pg_year_pass']==$ye){echo 'selected=selected'; }else{ echo '';} }?> value="<?php echo $ye?>"><?php echo $ye?></option>
	<?php }?>

</select></div>
        <div class="sub-course-type-module">
		<label>(PG) % of Marks</label> 
		<input type="number" name="pg_marks_per" class="input" value="<?php if(isset($job_data[0]['pg_marks_per'])){echo $job_data[0]['pg_marks_per']; }?>" size=""></div>
        <div class="course-type-module">
		<label>(PG) Achievements</label> 
		<input type="text" name="pg_achievements" class="input" value="<?php if(isset($job_data[0]['pg_achievements'])){echo $job_data[0]['pg_achievements']; }?>" size=""></div>
        <div class="sub-course-type-module">
		<label>CAT Score (If Applicable)</label> 
		<input type="number" name="cat_score" class="input" value="<?php if(isset($job_data[0]['cat_score'])){echo $job_data[0]['cat_score']; }?>"></div>
        <div class="course-type-module">
		<label>GMAT Score (If Applicable)</label> 
		<input type="number" name="gmat_score" class="input" value="<?php if(isset($job_data[0]['gmat_score'])){echo $job_data[0]['gmat_score']; }?>"></div>
        
        <div class="sub-course-type-module">
		<label>JEE Score (If Applicable)</label> 
		<input type="number" name="jee_core" class="input"  value="<?php if(isset($job_data[0]['jee_core'])){echo $job_data[0]['jee_core']; }?>"></div>
     
       
        </fieldset>
        <!-- End  Other -->
				
         <p> <input type="submit" class="dt-sc-button" value="Next"></p>
				  <p> <a href="<?php echo base_url().'caf-one'?>" class="dt-sc-button" value="Previous">Previous</a></p>
          
							</form>
            </div>
          </div>
        </div >
  </div>
  <!-- #post-4753 -->

  </section>
  <!-- ** Primary Section End ** -->
  <!-- Secondary Right -->

</div>
<!-- **Container - End** -->
</div>
<!-- **Main - End** -->
