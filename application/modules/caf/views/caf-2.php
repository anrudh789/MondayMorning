<!-- **Main** -->
<div id="main">

  <!-- Slider Section -->

  <!-- Sub Title Section -->
  <!-- ** Breadcrumb Section ** -->
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
		<label>(X) Board<span class="required"> * </span> </label>
		<select name="ssc_institution" required>
			<option value="">--Select Ssc Board--</option>
			<?php foreach($board as $boa){?>
			<option value="<?php echo $boa['bid']?>" <?php if(isset($job_data[0]['ssc_institution'])){if($job_data[0]['ssc_institution']==$boa['bid']){echo 'selected=selected'; }else{ echo '';} }?> ><?php echo $boa['board_name']?></option>
			<?php }?>
		</select>
	</div>
		<div class="sub-course-type-module">
		<label>(X) Year of Passing <span class="required"> * </span></label> 
		<select required="required" name="ssc_year_pass">
   <option value="">--Select Passing Year--</option>
 <?php for($ye=1980;$ye<=date('Y');$ye++){?>
  <option <?php if(isset($job_data[0]['ssc_year_pass'])){if($job_data[0]['ssc_year_pass']==$ye){echo 'selected=selected'; }else{ echo '';} }?> value="<?php echo $ye?>"><?php echo $ye?></option>
	<?php }?>

</select></div>
		
		<div class="course-type-module">
		<label>(X) % of Marks<span class="required"> * </span> </label> 
		<input maxlength="5" pattern="[0-9]+(\.[0-9]{0,2})?" placeholder="Type Your Marks (e.g. 84.67)"
       title="This must be a number with up to 2 decimal places" type="text"  min="0" step="any" name="ssc_marks_per"
					 class="input" value="<?php if(isset($job_data[0]['ssc_marks_per'])){echo $job_data[0]['ssc_marks_per']; }?>" required="required"></div>
		
		<div class="sub-course-type-module">
		<label>(X) Achievements</label> 
		<input type="text"  placeholder="Type Your Achievements" name="ssc_achievements" maxlength="100" class="input" value="<?php if(isset($job_data[0]['ssc_achievements'])){echo $job_data[0]['ssc_achievements']; }?>" size="" ></div>
		
         </fieldset>
        <!-- End SSC (Class X) Examination Details -->
        
         <!-- Start HSC (Class XII) Examination Details -->
        <fieldset>
        <h4 class="border-title  ">HSC (Class XII) Examination Details<span></span></h4> 
		<div class="course-type-module">
		<label>(XII) Board<span class="required"> * </span> </label>
		<select  name="hsc_institution" required>
		<option value="">--Select Hsc Board--</option>
			<?php foreach($board as $boa){?>
			<option value="<?php echo $boa['bid']?>" <?php if(isset($job_data[0]['hsc_institution'])){if($job_data[0]['hsc_institution']==$boa['bid']){echo 'selected=selected'; }else{ echo '';} }?> ><?php echo $boa['board_name']?></option>
			<?php }?>
			</select>
	 </div>
		<div class="sub-course-type-module">
		<label>(XII) Year of Passing <span class="required"> * </span></label> 
		<select required="required" name="hsc_year_pass">
  <option value="">--Select Passing Year--</option>
 <?php for($ye=1980;$ye<=date('Y');$ye++){?>
  <option <?php if(isset($job_data[0]['hsc_year_pass'])){if($job_data[0]['hsc_year_pass']==$ye){echo 'selected=selected'; }else{ echo '';} }?> value="<?php echo $ye?>"><?php echo $ye?></option>
	<?php }?>

</select></div>
		<div class="course-type-module">
		<label>(XII) % of Marks<span class="required"> * </span> </label>
		<input maxlength="5" pattern="[0-9]+(\.[0-9]{0,2})?" placeholder="Type your Marks (e.g. 84.67)" type="text" min="0" step="any" name="hsc_marks_per" class="input"
					 value="<?php if(isset($job_data[0]['hsc_marks_per'])){echo $job_data[0]['hsc_marks_per']; }?>"  required="required" />
		</div>
        <div class="sub-course-type-module">
		<label>(XII) Achievements</label>
		<input type="text" maxlength="100" placeholder="Type Your Achievements" name="hsc_achievements" class="input" value="<?php if(isset($job_data[0]['hsc_achievements'])){echo $job_data[0]['hsc_achievements']; }?>" size=""  />
		</div>
       </fieldset>
          <!-- End HSC (Class XII) Examination Details -->
          
           <!-- Start Contact Phone Nos:  -->	
             <fieldset>
              <h4 class="border-title  ">Graduation Examination Details<span></span></h4> 
		<div class="course-type-module">
		<label>Degree <span class="required"> * </span></label>
		<select name="grad_degree" required="required">
			<option value="">--Select UG Degree--</option>
			<?php foreach($ug as $graduate){?>
			<option <?php if(isset($job_data[0]['grad_degree'])){if($job_data[0]['grad_degree']==$graduate['md_id']){echo 'selected=selected'; }else{ echo '';} }?>  value="<?php echo $graduate['md_id']?>"><?php echo $graduate['degree_name']?></option>
			<?php }?>
          
        </select>
		</div>
		<div class="sub-course-type-module">
		<label>Institution <span class="required"> * </span> </label>
		<select name="grad_institution" required="required">
			<option value="">--Select Institution--</option>
			<?php foreach($uni as $univer){?>
			<option <?php if(isset($job_data[0]['grad_institution'])){if($job_data[0]['grad_institution']==$univer['mu_id']){echo 'selected=selected'; }else{ echo '';} }?>  value="<?php echo $univer['mu_id']?>"><?php echo $univer['un_name']?></option>
			<?php }?>
          
        </select>


</select></div>
		<div class="course-type-module">
		<label>Year of Passing<span class="required"> * </span></label> 
		<select required="required" name="grad_year_pass">
			 <option value="">--Select Passing Year--</option>
 <?php for($ye=1980;$ye<=date('Y');$ye++){?>
  <option <?php if(isset($job_data[0]['grad_year_pass'])){if($job_data[0]['grad_year_pass']==$ye){echo 'selected=selected'; }else{ echo '';} }?> value="<?php echo $ye?>"><?php echo $ye?></option>
	<?php }?>
  </select>
		</div>
        <div class="sub-course-type-module">
		<label>% of Marks<span class="required"> * </span> </label> 
		<input maxlength="5" placeholder="Type Your Marks (e.g. 84.67)" pattern="[0-9]+(\.[0-9]{0,2})?" type="text"  name="grad_marks_per" class="input" value="<?php if(isset($job_data[0]['grad_marks_per'])){echo $job_data[0]['grad_marks_per']; }?>" size="20" required="required"></div>
        <div class="course-type-module">
		<label>Achievements</label> 
		<input type="text" maxlength="100" placeholder="Type Your Achievements" name="grad_achievements" class="input" value="<?php if(isset($job_data[0]['grad_achievements'])){echo $job_data[0]['grad_achievements']; }?>" size="20"></div>
       </fieldset>
        <!-- End  Contact Phone Nos: -->
          
         <!-- Start Other  -->	
              <fieldset>
                 <h4 class="border-title">Post Graduation Examination Details<span></span></h4> 
		<div class="course-type-module">
		<label>PG Degree <span class="required" </span></label>
		<select name="pg_degree" id="pg_deg">
			<option value="">--Select PG Degree--</option>
			<?php foreach($pg as $pgraduate){?>
			<option <?php if(isset($job_data[0]['pg_degree'])){if($job_data[0]['pg_degree']==$pgraduate['md_id']){echo 'selected=selected'; }else{ echo '';} }?>
			value="<?php echo $pgraduate['md_id']?>"><?php echo $pgraduate['degree_name']?></option>
			<?php }?>
      </select>     
	
		</div>
		<div class="sub-course-type-module">
		<label>(PG)Institution </label>
		<select name="pg_institution" id="pgi">
			<option value="">--Select Institution--</option>
			<?php foreach($uni as $univer){?>
			<option <?php if(isset($job_data[0]['pg_institution'])){if($job_data[0]['pg_institution']==$univer['mu_id']){echo 'selected=selected'; }else{ echo '';} }?>  value="<?php echo $univer['mu_id']?>"><?php echo $univer['un_name']?></option>
			<?php }?>
          
        </select>
		
 </div>
		<div class="course-type-module">
		<label>(PG) Year of Passing</label> 
		<select  name="pg_year_pass" id="pgy">
  <option value="">--Select Passing Year--</option>
 <?php for($ye=1980;$ye<=date('Y');$ye++){?>
  <option <?php if(isset($job_data[0]['pg_year_pass'])){if($job_data[0]['pg_year_pass']==$ye){echo 'selected=selected'; }else{ echo '';} }?> value="<?php echo $ye?>"><?php echo $ye?></option>
	<?php }?>

</select></div>
        <div class="sub-course-type-module">
		<label>(PG) % of Marks</label> 
		<input id="pgm" maxlength="5" pattern="[0-9]+(\.[0-9]{0,2})?" type="text" placeholder="Type your Marks (e.g. 84.67)" name="pg_marks_per" class="input"
					 value="<?php
					 if(isset($job_data[0]['pg_marks_per'])){echo $job_data[0]['pg_marks_per']; }
					 ?>" size=""></div>
        <div class="course-type-module">
		<label>(PG) Achievements</label> 
		<input type="text" maxlength="100" placeholder="Type Your Achievements" name="pg_achievements" class="input"
					 value="<?php if(isset($job_data[0]['pg_achievements'])){echo $job_data[0]['pg_achievements']; }?>" size=""></div>
        <div class="sub-course-type-module">
		<label>CAT Score (If Applicable)</label> 
		<input type="text" pattern="[a-zA-Z0-9_ ]+.*\S.*" maxlength="5" placeholder="Type Your Score (e.g. 84.67)" name="cat_score" class="input"
					 value="<?php
					 if(isset($job_data[0]['cat_score']))
					 {
								if($job_data[0]['cat_score']!=0)
							 {
								echo $job_data[0]['cat_score'];
							 }
							 else{echo 'NA';}
					 }
					
					 ?>">
				</div>
        <div class="course-type-module">
		<label>GMAT Score (If Applicable)</label> 
		<input type="text" pattern="[a-zA-Z0-9_ ]+.*\S.*" maxlength="5" placeholder="Type Your Score (e.g. 84.67)" name="gmat_score" class="input"
					 value="<?php
					 if(isset($job_data[0]['gmat_score']))
					 {
								if($job_data[0]['gmat_score']!=0)
							 {
								echo $job_data[0]['gmat_score'];
							 }
							 else{echo 'NA';}
					 }
					
					 ?>"></div>
        
        <div class="sub-course-type-module">
		<label>JEE Score (If Applicable)</label> 
		<input type="text" pattern="[a-zA-Z0-9_ ]+.*\S.*" maxlength="5" placeholder="Type Your Score (e.g. 84.67)" name="jee_core" class="input"
					 value="<?php
					 if(isset($job_data[0]['jee_core']))
					 {
								if($job_data[0]['jee_core']!=0)
							 {
								echo $job_data[0]['jee_core'];
							 }
							 else{echo 'NA';}
					 }
					
					 ?>"></div>
     
       
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
 