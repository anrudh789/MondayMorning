 
<div id="main">

  <section class="main-title-section-wrapper">
    <div class="container">
      <div class="main-title-section">
        <h1>Application Form</h1>
        <div class="breadcrumb">
         
        </div>
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
            <form name="" action="<?php echo base_url()?>step-four" method="post">
 
    <div class="content-full-width">
        <div class="row clearfix">	
		    <div class="content-full-width">
            <h4 class="border-title  ">Family Background<span></span></h4>
			    <table class="table table-bordered table-hover" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">&nbsp;
						
						</th>
						
						<th class="text-center">
							Age (in years)
						</th>
						<th class="text-center">
							Education
						</th>
						<th class="text-center">
							Occupation
						</th>
									
						
					</tr>
				</thead>
				<tbody>
                <tr >
						<td>Father</td>
						<td>
						<input type="text" name='father_age' value="<?php if(isset($job_data[0]['father_age'])){echo $job_data[0]['father_age']; }?>"  class="form-control"/>
						</td>
						<td>
						<input type="text" name='father_edu' value="<?php if(isset($job_data[0]['father_edu'])){echo $job_data[0]['father_edu']; }?>" class="form-control"/>
						</td>
						<td>
						<input type="text" name='father_occu'  value="<?php if(isset($job_data[0]['father_occu'])){echo $job_data[0]['father_occu']; }?>"  class="form-control"/>
						</td>
						
					</tr>
					<tr >
						<td>Mother</td>
						<td>
						<input type="text" name='mother_age' value="<?php if(isset($job_data[0]['mother_age'])){echo $job_data[0]['mother_age']; }?>" class="form-control"/>
						</td>
						<td>
						<input type="text" name='mother_edu' value="<?php if(isset($job_data[0]['mother_edu'])){echo $job_data[0]['mother_edu']; }?>" class="form-control"/>
						</td>
						<td>
						<input type="text" name='mother_occu' value="<?php if(isset($job_data[0]['mother_occu'])){echo $job_data[0]['mother_occu']; }?>" class="form-control"/>
						</td>
						
					</tr>
					<tr >
						<td>Spouse</td>
						<td>
						<input type="text" name='w_or_h_age' value="<?php if(isset($job_data[0]['w_or_h_age'])){echo $job_data[0]['w_or_h_age']; }?>" class="form-control"/>
						</td>
						<td>
						<input type="text" name='w_or_h_edu' value="<?php if(isset($job_data[0]['w_or_h_edu'])){echo $job_data[0]['w_or_h_edu']; }?>" class="form-control"/>
						</td>
						<td>
						<input type="text" name='w_or_h_occu' value="<?php if(isset($job_data[0]['w_or_h_occu'])){echo $job_data[0]['w_or_h_occu']; }?>" class="form-control"/>
						</td>
						
					</tr>
					
                   
                  
				</tbody>
			    </table>
		    </div>
	    </div>
	
    </div>


          </div>
          </div>
        </div >
      
  </div>
  <!-- #post-4753 -->
 
   <!-- Secondary Right -->
 <fieldset>
					 <div class="course-type-module">
        <label>Have you been involved personally in any legal / criminal processdings ?</label> 
  <input name="crime_involve" id="Nego1" value="1" <?php if(isset($job_data[0]['crime_involve']))if($job_data[0]['crime_involve']=='1'){{echo "checked=checked"; }}?> type="radio">
  <label for="Negotiable">Yes</label>
  <input name="crime_detail" id="Nego1" checked="checked" value="2"  <?php if(isset($job_data[0]['crime_detail']))if($job_data[0]['crime_detail']=='2'){{echo "checked=checked"; }}?> type="radio">
    <label for="Negotiable">No</label>
   </div>
</section>
   </fieldset>
    <p> <input type="submit" class="dt-sc-button" value="Next"></p>
				  <p> <a href="<?php echo base_url().'caf-three'?>" class="dt-sc-button" value="Previous">Previous</a></p>
</form>
</div>
<!-- **Container - End** -->
</div>
<!-- **Main - End** -->


