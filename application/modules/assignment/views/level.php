<?php
 //  error_reporting(0);
   /*$page= $user_assign_done_page_tbl[0]['last_screen'];

if($page!=null || $page!="")
{*/
	?>
<!--	<script>
		sessionStorage.gn='<?php echo $user_assign_done_page_tbl[0]['ms_assign_id'].'-'.$user_assign_done_page_tbl[0]['level_name']?>';
		
	</script>-->
<?php
//}
?>
<style>
.shape{    
    border-style: solid; border-width: 0 40px 40px 0; float:right; height: 0px; width: 0px;
    -webkit-transform: rotate(360deg);  
    -moz-transform: rotate(360deg);  
    -o-transform: rotate(360deg);  
    transform: rotate(360deg); 
}
.shape-text{
    color:#fff; font-size:12px; font-weight:bold; position:relative; right:-22px; top:-3px; white-space: nowrap;
	-ms-transform:rotate(30deg); /* IE 9 */
	-o-transform: rotate(360deg);  /* Opera 10.5 */
	-webkit-transform:rotate(46deg); /* Safari and Chrome */
	transform:rotate(46deg);
}
.offer{
	background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
}
.shape {
	border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
}
.offer-radius{
	border-radius:7px;
}
.offer-danger {	border-color: #d9534f; }
.offer-danger .shape{
	border-color: transparent #d9534f transparent transparent;
}
.offer-success {	border-color: #5cb85c; }
.offer-success .shape{
	border-color: transparent #5cb85c transparent transparent;
}
.offer-default {	border-color: #999999; }
.offer-default .shape{
	border-color: transparent #999999 transparent transparent;
}
.offer-primary {	border-color: #428bca; }
.offer-primary .shape{
	border-color: transparent #428bca transparent transparent;
}
.offer-info {	border-color: #5bc0de; }
.offer-info .shape{
	border-color: transparent #5bc0de transparent transparent;
}
.offer-warning {	border-color: #f0ad4e; }
.offer-warning .shape{
	border-color: transparent #f0ad4e transparent transparent;
}

.offer-content{
	padding:0 20px 10px;
}
@media (min-width: 487px) {
  .container {
    max-width: 750px;
  }
  .col-sm-6 {
    width: 50%;
  }
}
@media (min-width: 900px) {
  .container {
    max-width: 970px;
  }
  .col-md-4 {
    width: 33.33333333333333%;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1170px;
  }
  .col-lg-3 {
    width: 25%;
  }
  }
}
#clockdiv {
    color: #112b4e;
    display: inline-block;
    font-family: sans-serif;
    font-size: 55px;
    font-weight: 100;
    margin-top: 15px;
    text-align: center;
    width: 217px;
}

#clockdiv > div{
	padding: 10px;
	border-radius: 3px;
/*	background: #00BF96;*/
	display: inline-block;
}

#clockdiv div > span{
	padding: 0px;
	border-radius: 3px;
	/*background: #00816A;*/
	display: inline-block;
}
    .invoice {
        position: relative;
        background: #fff;
        border: 1px solid #f4f4f4;
         padding: 0px 14px 23px;
        margin: 25px 25px;
        padding-bottom: 20px;
    }
    table>thead>tr>th {
        border-bottom: 1px solid #000;
    }
    .show {
        -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
    .table>thead>tr>th,
    .table>tbody>tr>th,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>tbody>tr>td,
    .table>tfoot>tr>td {
        border: 1px solid #000;
    }
	
	hr {
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
    border-top: 2px solid #112B4E;
}
    .lel {
        color: #fff;
        text-align: center;
        margin-bottom: 7px;
        margin-top: 7px;
    }
    .table > caption + thead > tr:first-child > td,
    .table > caption + thead > tr:first-child > th,
    .table > colgroup + thead > tr:first-child > td,
    .table > colgroup + thead > tr:first-child > th,
    .table > thead:first-child > tr:first-child > td,
    .table > thead:first-child > tr:first-child > th {
        border: 1px solid #000;
    }
	table>thead>tr>th{
    border-bottom: 1px solid #000;
}
.table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td{
    border: 1px solid #000;
	
}
.lel {color: #fff;text-align: center;margin-bottom: 7px;margin-top: 7px;}

.table > caption + thead > tr:first-child > td, .table > caption + thead > tr:first-child > th, .table > colgroup + thead > tr:first-child > td, .table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > td, .table > thead:first-child > tr:first-child > th {
 border: 1px solid #000;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <!--   <section class="content-header">
        <h1>
        Dashboard
        <small>#007612</small>
      </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
            </li>
            <li><a href="#">Examples</a>
            </li>
            <li class="active">Invoice</li>
        </ol>
    </section>
-->

    <div class="row main">
        <div class="col-md-12" id="screen-1">
            <div class="col-md-2"></div>
            <div class="col-md-8">

                <section class="invoice show">
                    <!-- title row -->
                         <div class="row" style="background-color: #112B4E">
                            <div class="col-md-12">
                             <h2 class="lel">My Assignment</h2>
                             </div> </div>
						 
                     <div class="clearfix" style="margin-top: 20px;"></div>
                    <div class="">
						<div class="col-md-12">
                            <h3 style="text-align: center">Assignment one</h3>
                            <hr>
                        </div>
                    </div>
                    <!-- /.box-header -->
					 <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12">
							
                         <table class="table table-striped table-responsive">
                            <thead >
                                <tr >
                                    <th class="text-center">S.no</th>
                                    <th class="text-center">Level Name</th>
                                    <th class="text-center">Assignment Description</th>

                                    <th class="text-center">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>1</td>
                                    <td>Level 1</td>
                                    <td>CCL1</td>

                                    <td class="text-center">
										<?php $uid=$this->session->userdata('mm_uid');
						$where_user="`uid`='$uid' and `level_name`='lvl1' and `ms_assign_id`='214563'";
					
						$user_ass_done=$this->Crud_modal->all_data_select('*','assignment_done',$where_user,'uid asc');
						if($user_ass_done[0]['status']==1){ $lvl2="";?>
							<button type="button" disabled="disabled" class="btn btn-warning btn-default"  
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Level Completed</button>
						<?php } else{  $lvl2="disabled";
						if(!empty($user_ass_done[0]['start_time']))
						   { if($user_ass_done[0]['start_time']!='0000-00-00 00:00:00'){?>
							
								<?php if($user_ass_done[0]['cn_one']!=0)
								{
									
									$cnone=$user_ass_done[0]['cn_one'];
									$cntwo=$user_ass_done[0]['cn_two'];
								  ?>
								<button type="button"  class="btn btn-warning btn-default"  id="gotoscreen4" value="214563-lvl1"
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Ongoing</button>
								<?php } else{
								?>
								<!--<input type="hidden" value="assign2" id="np">-->
								<button type="button"  class="btn btn-warning btn-default"  id="gotoscreen3" value="214563-lvl1"
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Ongoing</button>
						              <?php } }} else{ ?>
										<button type="button"  class="btn btn-warning btn-default"  id="assign1" value="214563-lvl1"
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Start</button>
										<?php } }?>
                                        
                                    </td>

                                </tr>

                                <tr class="text-center">
                                    <td>2</td>
                                    <td>Level 2</td>
                                    <td>CCL2</td>

                                    <td class="text-center">
                                       		<?php $uid=$this->session->userdata('mm_uid');
						$where_user="`uid`='$uid' and `level_name`='lvl2' and `ms_assign_id`='214563'";
					
						$user_ass_done=$this->Crud_modal->all_data_select('*','assignment_done',$where_user,'uid asc');
						if($user_ass_done[0]['status']==1){ $lvl3="";?>
							<button type="button" disabled="disabled" class="btn btn-warning btn-default"  
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Level Completed</button>
						<?php } else{ $lvl3="disabled";
						
						if(!empty($user_ass_done[0]['start_time']))
						   { if($user_ass_done[0]['start_time']!='0000-00-00 00:00:00'){?>
							
								<?php if($user_ass_done[0]['cn_one']!=0)
								{
									
									$cnone=$user_ass_done[0]['cn_one'];
									$cntwo=$user_ass_done[0]['cn_two'];
								  ?>
                                     <button type="button"  class="btn btn-warning btn-default"  id="gotoscreen4" value="214563-lvl2"
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Ongoing</button>    
								<?php }else{ ?>
								<button type="button"  class="btn btn-warning btn-default"  id="gotoscreen3" value="214563-lvl2"
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Ongoing</button>
								
								
						              <?php } }} else{ ?>
										<button type="button"  class="btn  <?php echo $lvl2; ?>"  id="assign1" value="214563-lvl2"
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Start</button>
										<?php } }?>
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>3</td>
                                    <td>Level 3</td>
                                    <td>CCL3</td>

                                    <td class="text-center">
                                        		<?php $uid=$this->session->userdata('mm_uid');
						$where_user="`uid`='$uid' and `level_name`='lvl3' and `ms_assign_id`='214563'";
					
						$user_ass_done=$this->Crud_modal->all_data_select('*','assignment_done',$where_user,'uid asc');
						if($user_ass_done[0]['status']==1){  $lvl4=""; ?>
							<button type="button" disabled="disabled" class="btn btn-warning btn-default"  
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Level Completed</button>
						<?php } else{ $lvl4="disabled";
                                           if(!empty($user_ass_done[0]['start_time']))
						   { if($user_ass_done[0]['start_time']!='0000-00-00 00:00:00'){?>
							
								<?php if($user_ass_done[0]['cn_one']!=0)
								{
									
									$cnone=$user_ass_done[0]['cn_one'];
									$cntwo=$user_ass_done[0]['cn_two'];
								  ?>
                                        <button type="button"  class="btn btn-warning btn-default"  id="gotoscreen4" value="214563-lvl3"
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Ongoing</button>     
								<?php }else{
								?>
								  <button type="button"  class="btn btn-warning btn-default"  id="gotoscreen3" value="214563-lvl3"
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Ongoing</button>  
						              <?php } }} else{ ?>
										<button type="button"  class="btn btn-warning btn-default <?php echo $lvl3;?>"  id="assign1" value="214563-lvl3"
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Start</button>
										<?php } }?>
                                      
                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td>4</td>
                                    <td>Level 4</td>
                                    <td>CCL4</td>

                                    <td class="text-center">
                                        		<?php $uid=$this->session->userdata('mm_uid');
						$where_user="`uid`='$uid' and `level_name`='lvl4' and `ms_assign_id`='214563'";
					
						$user_ass_done=$this->Crud_modal->all_data_select('*','assignment_done',$where_user,'uid asc');
						if($user_ass_done[0]['status']==1){?>
							<button type="button" disabled="disabled" class="btn btn-warning btn-default"  
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Level Completed</button>
						<?php } else{if(!empty($user_ass_done[0]['start_time']))
						   { if($user_ass_done[0]['start_time']!='0000-00-00 00:00:00'){?>
							
								<?php if($user_ass_done[0]['cn_one']!=0)
								{
									$btnid='assign3';
									$cnone=$user_ass_done[0]['cn_one'];
									$cntwo=$user_ass_done[0]['cn_two'];
								  ?>
                                         <button type="button"  class="btn btn-warning btn-default"  id="gotoscreen4" value="214563-lvl4"
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Ongoing</button> 
								<?php }else{ ?>
								
								<button type="button"  class="btn btn-warning btn-default"  id="gotoscreen3" value="214563-lvl4"
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Ongoing</button> 
						              <?php }}} else{ ?>
										<button type="button"  class="btn btn-warning btn-default <?php echo $lvl4; ?>"  id="assign1" value="214563-lvl4"
												style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Start</button>
										<?php } }?>
                                        
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                        
                        </div>
                  </div>
						   
                
			</section>
            </div>

       
   

            <div class="col-md-2"></div>
			</div>
			</div>

   <div class="col-md-12" id="screen-2" style="display: none">
	<div class="col-md-2"></div>
	<div class="col-md-8 show" style="height:600px; background: #fff; margin-top: 25px; padding: 1px 15px 10px 15px;">
		
   
     <div class="row" style="background-color: #112B4E">
        <div class="col-md-12" >
          <h2 class="lel">
            My Assignment
            
          </h2>
        </div>
        <!-- /.col -->
      </div>
	   <div class="col-sm-12" style="max-height: 400px;color: #000;overflow-y: scroll">
										<h3 class="text-center" style="font-size: 25px;text-decoration: underline">
											Instructions
										</h3>
	<p><strong>Please read these instructions carefully.</strong>&nbsp;A&nbsp;candidate who breaches any of the Examination Regulations will be liable to disciplinary action&nbsp;including (but not limited to) suspension or expulsion from the University.</p>
<p>&nbsp;</p>
<p><strong>Timings</strong></p>
<ul>
<li>Examinations will be conducted during the allocated times shown in the examination timetable.</li>
<li>The examination hall will be open for admission&nbsp;<strong>10 minutes&nbsp;</strong>before the time scheduled for the commencement of the examination. You are to find your allocated seat but&nbsp;do<strong>NOT&nbsp;</strong>turn over the question paper until instructed at the time of commencement of the examination.</li>
<li>You will not be admitted for the examination after<strong>one hour</strong><strong>&nbsp;</strong>of the commencement of the examination.</li>
</ul>
<p><strong>Personal Belongings</strong></p>
<ul>
<li>All your personal belongings (such as bags, pouches, ear/headphones, laptops etc.) must be placed at the designated area outside the examination hall. Please do not bring any valuable belongings except the essential materials required for the examinations.</li>
<li>Any unauthorised materials, such as books, paper, documents, pictures and electronic devices with communication and/or storage capabilities such as tablet PC, laptop, smart watch, portable audio/video/gaming devices etc. are not to be brought into the examination hall.</li>
<li><strong>Handphones brought into the examination hall must be switched off at ALL times.</strong>If your handphone is found to be switched on in the examination hall, the handphone will be confiscated and retained for investigation of possible violation of regulations.</li>
<li>Photography is&nbsp;<strong>NOT</strong>allowed in the examination hall at&nbsp;<strong>ALL&nbsp;</strong>times.</li>
<li>All materials and/or devices which are found in violation of any examination regulations will be confiscated.</li>
<li>The University will not be responsible for the loss or damage of any belongings in or outside the examination hall.</li>
</ul>
<p><strong>At the Start of the Examination</strong></p>
<ul>
<li><strong>Do&nbsp;NOT&nbsp;</strong>turn over the question paper placed on your desk until instructed to do so at the time of commencement of the examination.</li>
<li>Please place your identification documents (such as matric card, identity card, passport, driving licence or EZ-Link concession card) at the top right corner of your examination desk for the marking of attendance and verification of identity during the examination.</li>
<li>Please check that you have the correct question paper and read the instructions printed on your examination question paper carefully.</li>
<li>All examinations are anonymous. Therefore, do not write your name on the answer book. You should write only your matriculation number, correctly and legibly, in the space provided on the cover of each answer book. Providing incorrect/illegible matriculation number could risk your answer book being considered void.</li>
</ul>
<p><strong>During Examination</strong></p>
<ul>
<li>You are not allowed to communicate by word of mouth or otherwise with other candidates (this includes the time when answer scripts are being collected).</li>
<li>Please raise your hand if you wish to communicate with an invigilator.</li>
<li>Unless granted permission by an invigilator, you are not allowed to leave your seat.</li>
<li>&nbsp;&middot;&nbsp;&nbsp;&nbsp;&nbsp;Once you have entered the examination hall, you will not be allowed to leave the hall&nbsp;until<strong>&nbsp;one hour</strong><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; after the examination has commenced.&nbsp;</li>
<li>&middot;If, for any reason, you are given permission to leave the hall temporarily, you must be accompanied<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;by an invigilator throughout your absence from the examination hall.&nbsp;<strong>You are required to leave&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; your&nbsp;</strong><strong>handphone on your desk when you leave the hall temporarily.</strong></li>
<li>All answers, with the exception of graphs, sketches, diagrams, etc. should be written in black or blue pen, unless otherwise specified. Answers written in pencil will not be marked. The blank pages in the answer book are to be used only for candidates' rough work. Solutions or any other materials written on these blank pages will not be marked.</li>
<li>Do not write on, mark, highlight or deface any reference materials provided for the examination. If found doing so, the reference materials will be removed from your use for the rest of the examination and you will be made to pay for the cost of the materials that have to be replaced.</li>
</ul> 	
</div>
	  
   <div class="col-sm-12" >
	<hr>
             <br><br>
                 <button type="button" class="btn btn-primary btn-md"
												 data-toggle="modal" data-target="#myModal"
												 style="float: right;background-color: #112B4E;border-color: #112B4E; margin-right: 6px;">Continue</button>
                   <a  	href="#"style="float: left;border-color: #112B4E;">Please Read above Instructions and download instruction</a>
                      
						  </div>
	</div>
   
	<div class="col-md-2"></div>
   </div>
		<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width: 415px;">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" style="margin-top: -2px">&times;</button>
        <h4 class="modal-title">Your time starts Now - Kindly Accept to continue</h4>
      </div>
       <div class="modal-body" style="padding: 13px 27px 51px 22px;">
        
				 <button type="button" class="btn btn-danger red pull-right" data-dismiss="modal" style="margin-left: 5px">Deny</button>
				  <button id="assign2" style="background-color: #112b4e" class="btn btn-success  pull-right" data-dismiss="modal" >Accept</button>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>
   <div class="col-md-12" id="screen-3" style="display: none">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		
    <section class="invoice show ">
      <!-- title row -->
      <div class="row" style="background-color: #112B4E">
        <div class="col-md-12">
          <h2 class="lel">Country Comparison</h2>
        </div>
        <!-- /.col -->
      </div>
      
	    <div class="row">
        <div class="col-md-12">
          <h2 class="bg-primary text-white" id="hlvl" style="text-align: center;">Level 1 out of 4 </h2>
        </div>
        <!-- /.col -->
      </div>
	  
	   <div class="row">
        <div class="col-md-12">
         <div style="padding: 0px 20px;">
			<b><p class="p">Question 1 : Select two countries and represent the following:<br><br>
1.	Conduct a synthesis of the top 500 companies of Country 1 and represent on the basis of sectors their revenue, profit and assets<br>
2.	Compare the same with Country 2
</p></b>
		 </div>
        </div>
        <!-- /.col -->
      </div>
	   <div class="clearfix"></div>
	    <div class="row">
        <div class="col-md-12 text-left">
			
       
			<h4 style="padding: 0px 10px 20px 10px;"><strong>Please select countries for comparision.</strong></h4>
			
			<div class="col-sm-3">
			 <div class="btn-group">		
			  <div class="form-group no-margin-form-group">
                <select name="country" class="form-control" required="" id="cn1">
				<option value="0">Select Country 1</option>
                    <?php foreach($cc_1_tbl as $cc1tbl){
						$cc11=$cc1tbl['cc1_id'];
						$where="`uid`='$uid' and  `cn_one`='$cc11'";
					    $user_ass_done=$this->Crud_modal->fetch_update_data($where,'assignment_done');
						$ccd1=$user_ass_done['cn_one'];
						if(!empty($ccd1)){$dis='disabled'; $sty="font-style:italic;color:#ff0000"; }else{$dis='';$sty="";}
						?>
                    <option style="<?php echo $sty ; ?>"
						   <?php echo $dis.' '; if(isset($cnone)){
							if($cc1tbl['cc1_id']==$cnone){echo 'selected=selected';}
							else{echo ''; }
							
							}?>
						   
						   value="<?php echo $cc1tbl['cc1_id']?>"><?php echo $cc1tbl['cc1_name']?></option>
                   
					<?php }?>
					</select>  
		</div>
		 </div>
       </div>
			
       <div class="col-sm-3">
		<div class="btn-group">		
			  <div class="form-group no-margin-form-group">
			
                <select name="country" class="form-control" required="" id="cn2">
				<option value="0" >Select Country 1</option>
				
				<?php foreach($cc_2_tbl as $cc2tbl){
					  $cc12=$cc2tbl['cc2_id'];
						$where="`uid`='$uid' and  `cn_two`='$cc12'";
					    $user_ass_done=$this->Crud_modal->fetch_update_data($where,'assignment_done');
						$ccd2=$user_ass_done['cn_two'];
						if(!empty($ccd2)){$dis='disabled'; $sty="font-style:italic;color:#ff0000"; }else{$dis='';$sty="";}
					
					?>
                    <option  style="<?php echo $sty ; ?>"
						    <?php echo $dis.' '; if(isset($cntwo)){
							if($cc2tbl['cc2_id']==$cntwo){echo 'selected=selected';}
							else{echo ''; }
							}?>
						   value="<?php echo $cc2tbl['cc2_id']?>"><?php echo $cc2tbl['cc2_name']?></option>
                   
					<?php }?>
                </select>
            </div>
		
        </div></div>
	   <div class="col-sm-6"></div>
        <!-- /.col -->
      </div>
		</div>
	   
      <div class="row">
          <div class="col-sm-6 ">
         </div>
        
        <div class="col-sm-6 ">
         
          <table class="table table-striped table-responsive">
            <thead>
            <tr class="text-center">
              <th>S.N.</th>
              <th>Output Expected</th>
              <th>Exhibit</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-center">
              <td>1</td>
              <td>Raw Data Flat file on Country 2</td>
              <td class="text-center"><a href="<?php echo base_url()?>upload/comp.xlsx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
              
            </tr>
            <tr class="text-center">
              <td>2</td>
              <td>Comparitive Analysis of Countries</td>
              <td class="text-center"><a href="<?php echo base_url()?>upload/analysis.pptx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
             
            </tr>
            <tr class="text-center">
              <td>3</td>
              <td>Comparitive Analysis of Countries</td>
              <td class="text-center"> <a href="<?php echo base_url()?>upload/summary.docx"><i class="fa fa-download" aria-hidden="true"></i></a></td>
             
            </tr>
         
            </tbody>
          </table>
       
        </div>
	 
	 <div class="">
		<div class="col-sm-12">
			<h4 class="bg-primary text-white text-center"  style="padding: 10px 20px;"><b>Due Date Of Completion - 25-04-2017</b></h4>
		</div>
	 </div>
	 <div class="">
        <div class="col-md-12">
        
        <hr>
          <button type="button" id="assign3" class="btn btn-primary pull-right" style="margin-right: 20px; background: #112B4E">Continue</button>
        </div>
      </div>
			
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
	</div>
	<div class="col-md-2"></div>
   </div>

  <div class="col-md-12" style="display: none" id="screen-4">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		
    <section class="invoice show">
      <!-- title row -->
      <div class="row" style="background-color: #112B4E">
        <div class="col-md-12">
          <h2 class="lel">
            Country Comparison
            <div id="timer" style="float: right"></div>
          </h2>
        </div>
        <!-- /.col -->
      </div>

	   <div class="clearfix"></div>
	    <div class="row">
        <div class="col-md-12 ">
			
       
			<h3 style="padding: 0px 10px 20px 10px; text-align: center"><strong>Countries Selected</strong></h3>
			
			<div class="col-sm-6">
		
			<div class="offer offer-success" >
				<!--<div class="shape">
					<div class="shape-text">
						top								
					</div>
				</div>-->
				<div class="offer-content" >
					<h3 class="lead text-center"  id="txtcnn1">
						First Country 
					</h3>						
				<!--	<p>
						And a little description.
						<br> and so one
					</p>-->
				</div>
			</div>
		      
			<!-- <div class="btn-group" style="margin-left: 50px;">		
			    <button class="btn btn-default btn-block" style="width: 300px" type="button" disabled="disabled">India</button>
		     </div>-->
       </div>
			
       <div class="col-sm-6">
		
			<div class="offer offer-success" >
				
				<div class="offer-content" >
					<h3 class="lead text-center" id="txtcnn2">
						Second Country 
					</h3>						
			
				</div>
			</div>
		 
			 <!--<div class="btn-group pull-right"  style="margin-right: 80px;">		
			   <button class="btn btn-default btn-block" style="width: 300px" type="button" disabled="disabled">U.S.A</button>
		
        </div>-->
	   </div>
	  
        <!-- /.col -->
      </div>
		</div>
	   <div class="clearfix" style="margin-top: 65px;"></div>
      <div class="row">
          <div class="col-sm-6" style="text-align: center">
    
	<div class="row">
	
	</div></div>
        
        <div class="col-md-12">
         
          <table class="table table-striped table-responsive">
            <thead>
            <tr>
              <th class="text-center">S.N.</th>
              <th class="text-center">Output Expected</th>
			   <th class="text-center">Files</th>
			    
              <th class="text-center">Exhibit</th>
			   <th class="text-center">Uploaded File Name</th>
            </tr>
            </thead>
            <tbody>
				<form action="#" method="post" enctype="multipart/form-data">
            <tr class="text-center">
              <td>1</td>
              <td>Raw Data Flat file on Country 2</td>
			
				<td class="text-center">
			
 <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-default">
                        Browse&hellip; <input  id="upxls" type="file" name="up_xls"  style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>

	</td>
		
          
			  
              <td class="text-center">
		
	 <button type="button" class="btn btn-primary btn-md" id="xlsbtn" style="background-color: #112B4E; border-color: #112B4E;">save</button>
			  </td>
			    
              <td class="text-center">
		
	<p id="xlxp" >No file Uploaded</p>
			  </td>
		
            
            </tr>
            <tr class="text-center">
              <td>2</td>
              <td>Comparitive Analysis of Countries</td>
			  
				<td class="text-center">
			
 <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-default">
                        Browse&hellip; <input  id="updoc" type="file" name="up_doc"  style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>

	</td>
		
          
			  
              <td class="text-center">
		
	 <button type="button" class="btn btn-primary btn-md" id="docbtn" style="background-color: #112B4E; border-color: #112B4E;">save</button>
			  </td>
			    <td class="text-center">
		
	<p id="docp">No file Uploaded</p>
			  </td>
             <!-- <td class="text-center"> <label for="file-upload" class="custom-file-upload">
   <!-- <i class="fa fa-cloud-upload"></i> 
</label>
			  
<input />
	 <button type="button" class="btn btn-primary btn-md" id="docbtn" style="background-color: #112B4E; border-color: #112B4E;" >save</button></td>-->
             
            </tr>
            <tr class="text-center">
              <td>3</td>
              <td>Comparitive Analysis of Countries</td>	<td class="text-center">
			
 <div class="input-group">
                <label class="input-group-btn">
                    <span class="btn btn-default">
                        Browse&hellip; <input id="upppt" type="file" name="up_ppt" style="display: none;" multiple>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>

	</td>
		
          
			  
              <td class="text-center">
		
	 <button type="button" class="btn btn-primary btn-md" id="pptbtn" style="background-color: #112B4E; border-color: #112B4E;">save</button>
			  </td>
			   <td class="text-center">
		
	<p id="pptp">No file Uploaded</p>
			  </td>
            <!--  <td class="text-center"> <label for="file-upload" class="custom-file-upload">
    <i class="fa fa-cloud-upload"></i> 
</label>
<input id="upppt" type="file" name="up_ppt"/>
	 <button type="button" class="btn btn-primary btn-md" style="background-color: #112B4E; border-color: #112B4E;" id="pptbtn">save</button></td>-->
			  <input type="hidden" id="assignlvl" name="assignlvl" >
               </form>
            </tr>
         
            </tbody>
          </table>
       
        </div>
	 
	 <div class="row">
		<div class="col-md-12">
		
		</div>
	 </div>
	 <br><br><br>
	 <div class="">
        <div class="col-sm-12">
        <br> <br> 
        <hr>
		<br>
          <button type="button" class="btn btn-primary pull-right" style="margin-right: 20px; background: #112B4E" id="ght">
         Continue
          </button>
        </div>
      </div>
	  <div class="clearfix" style="margin-top: 20px;"></div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
	</div>
	
	<div class="col-md-2"></div>
   </div>

<div class="clearfix"></div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
	$("#gotoscreen3").click(function(){
		sessionStorage.gn=$("#gotoscreen3").val();
		$("#assign2").click();
		});
	$("#gotoscreen4").click(function(){
		sessionStorage.gn=$("#gotoscreen4").val();
		$("#assign3").click();
		});
$("#assign1").click(function(e){
	
    if ($(this).hasClass('disabled')) {
		//alert();
		e.preventDefault(); 
        return false;
    } else {
        
   

	var btn=$("#assign1").val();
	$( "#screen-1" ).fadeOut( );
	$("#screen-2").fadeIn();
	sessionStorage.gn=btn;
	var ar= btn.split('-');
	//alert(ar[1]);
	if(ar[1]!=='lvl1')
	{
		// $('#ght').prop('disabled', true);
		//$("#screen-3").fadeIn();
		$("#assign2").click();
		//var lastChar = ar[1].substr(ar[1].length - 1);
		
		//document.getElementById("hlvl").textContent =' Level '+ lastChar +' out of 4'; 
		
		
	}
	}
	

});
$("#assign2").click(function(){
	//var btn=$("#assign2").val();
	//alert(btn);
	//var er=$("#np").val();
	//if(er==="" || er===null)
	//{
	//	sessionStorage.gn=btn;
	//}
	////alert(sessionStorage.gn);
	var gb=sessionStorage.gn;
	var ar= gb.split('-');
	//alert(gb);
	if(ar[1]!=='lvl1')
	{
		 $("#screen-1").fadeOut();
		 $("#screen-2").css('display', 'none');
		$("#screen-3").fadeIn();
		
		
	}
	else{
		$("#screen-1").fadeOut();
		$("#screen-2").fadeOut();
	    $("#screen-3").fadeIn();
		}
	
	   var st='step-3';
		datastr={Assign_lvl:sessionStorage.gn,Step:st};
		$.ajax({
				url: '<?php echo base_url()?>start-assignment',
				type: 'post',
				data: datastr,
				success: function(response)
				{
					// alert(response);
					if(response==10)
					{
						//alert('Please complete the level first');
						sessionStorage.step2='step-2';
						return false;
					}
				  if(response==1)
				  {
					sessionStorage.step2='step-2';
				  }
				  else
				  {
					 alert('Opps! Some Error Occured pleas try again');
					 sessionStorage.clear();
		             window.location.href="<?php echo base_url()?>assignment";
				  }
				  
			 
				}
		});


});
$("#assign3").click(function(){
	
var r = confirm("Have you downloaded all the sample files if yes then click ok else cancel thank you!");
if (r !== true) {
	
  return false;
  
} else {
 

	var cnone=$('#cn1').val();
	var cntwo=$('#cn2').val();
	

 	var cnn1=$("#cn1 option:selected").text();
    var cnn2=$("#cn2 option:selected").text();
	
	if(cnone==='0' && cntwo==='0')
	{
		
		alert('Select Country from both list');
	}
   if(cnone!=='0' && cntwo==='0')
	{
		alert('Select Country from second list');
		
	}
	if(cnone==='0' && cntwo!=='0')
	{
		alert('Select Country from first list');
		
	}
	
	if(cnone!=='0' && cntwo!=='0')
	{
		$( "#screen-1" ).fadeOut( );
		$( "#screen-2" ).fadeOut( );
		$( "#screen-3" ).fadeOut( );
		$("#screen-4").fadeIn();
		sessionStorage.step3='step-3';
		localStorage.cn_1 = cnn1;
		localStorage.cn_2 = cnn2;
//	   var hj= $("#ui").val();
//	   
//   //  alert(hj);
//     if(hj!==''|| hj!==null )
//		{
//			//  alert('f');
//			sessionStorage.gn=hj;
//			sessionStorage.step2='step-2';
//			sessionStorage.step3='step-3';
//		}
//		else{ var btn=$("#assign2").val();
//	 sessionStorage.gn=btn;}
    
	// alert( sessionStorage.gn);
  document.getElementById("txtcnn1").textContent = cnn1;
  document.getElementById("txtcnn2").textContent = cnn2;
		datastr={Assign_lvl:sessionStorage.gn,Con_one:cnone,Con_two:cntwo};
		$.ajax({
				url: '<?php echo base_url()?>start-timer',
				type: 'post',
				data: datastr,
				success: function(response)
				{
				  
				 $("#timer").html(response);
			 
				}
			});
       }
		}

});
	
	$( document ).ready(function() {
	
   
    if(sessionStorage.gn!=="" || sessionStorage.gn!==null )
	{
		
		    
			document.getElementById("txtcnn1").textContent = localStorage.cn_1;
			document.getElementById("txtcnn2").textContent = localStorage.cn_2;
		    datastr={Assign_lvl:sessionStorage.gn};
			
		
		$.ajax({
				url: '<?php echo base_url()?>start-timer',
				type: 'post',
				data: datastr,
				success: function(response)
				{
				 
				 $("#timer").html(response);
			 
				}
			});
			$.ajax({
				url: '<?php echo base_url()?>count-file',
				type: 'post',
				data: datastr,
				success: function(response)
				{
				 if(response!=3)
				 {
					$('#ght').prop('disabled', true);
					//$("#ght").css("display", "none");
				 }
				
			 
				}
			});
			
		 if(typeof(sessionStorage.gn)!=="undefined")
		 {
							 
			  if(sessionStorage.step2==='step-2')
			  {
				 if(sessionStorage.step3==='step-3')
				 {	
		          
					$('#assign1').prop('disabled', true);
					$("#screen-1").fadeOut();
					$("#screen-2").fadeOut();
					$("#screen-3").fadeOut();
					$("#screen-4").fadeIn();
					return false;      
			    }
				    $('#assign1').prop('disabled', true);
					$("#screen-1").fadeOut();
					$("#screen-2").fadeOut();
					$("#screen-3").fadeIn();
					$("#screen-4").fadeOut();
					return false;      
		      }
			   $('#assign1').prop('disabled', true);
					$("#screen-1").fadeOut();
					$("#screen-2").fadeIn();
					$("#screen-3").fadeOut();
					$("#screen-4").fadeOut();
					return false;   
		 }
		 else
		 {
		   $('#assign1').prop('disabled', false);
		
		 }
	}
	else{
		$('#assign1').prop('disabled', false);
		
	}
});
	$("#ght").click(function(){
			$.ajax({
				url: '<?php echo base_url()?>update-done-status',
				type: 'post',
				data: datastr,
				success: function(response)
				{
					if(response==1)
					{
					   sessionStorage.clear();
					   window.location.href="<?php echo base_url()?>assignment";
					}
				   else
					{
					   alert('Some error occured please try again');
					}
				}
			});
		
		
});
	
	
      $("#upxls").change(function() {
  
    var val = $(this).val();

    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
        case 'xlsx':
             
            break;
        default:
            $(this).val('');
            // error message here
              alert('You can uplaod only the xlxs format file');
            break;
    }
});
	        $("#updoc").change(function() {
 
    var val = $(this).val();

    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
        case 'docx':
             
            break;
        default:
            $(this).val('');
            // error message here
              alert('You can uplaod only the docx format file');
            break;
    }
});
			      $("#upppt").change(function() {
 
    var val = $(this).val();

    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
        case 'pptx':
             
            break;
        default:
            $(this).val('');
            // error message here
              alert('You can uplaod only the ppt format file');
            break;
    }
});


$("#xlsbtn").click(function(){

var formData = new FormData();
formData.append('up_xls', $("#upxls")[0].files[0]);
formData.append('assignlvl',sessionStorage.gn);

 //datastr={Assign_lvl:sessionStorage.gn,formData};
 $.ajax({
        url: '<?php echo base_url()?>xls-upload',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
			//alert(data);
            if(data=='1')
			{
				 
				alert('your file uploaded successfully');
				//alert($('#upxls').val());
				 document.getElementById("xlxp").textContent = $('#upxls').val() ;
				 $('#upxls').val('');
			}
			else{
				
				alert('some error occured! Please try again');
				 $('#upxls').val('');
			
			}
        },
        cache: false,
        contentType: false,
        processData: false
    });
    
    return false;
		
});
$("#docbtn").click(function(){

var formData = new FormData();
formData.append('up_doc', $("#updoc")[0].files[0]);
formData.append('assignlvl',sessionStorage.gn);
 $.ajax({
        url: '<?php echo base_url()?>doc-upload',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
			
            if(data=='1')
			{
				alert('your file uploaded successfully');
				document.getElementById("docp").textContent = $('#updoc').val() ;
				 $('#updoc').val('');
			}
			else{
				
				alert('some error occured! Please try again');
				 $('#updoc').val('');
			
			}
        },
        cache: false,
        contentType: false,
        processData: false
    });
    
    return false;
		
});
$("#pptbtn").click(function(){

var formData = new FormData();
//alert(formData);
formData.append('up_ppt',  $("#upppt")[0].files[0]);
formData.append('assignlvl',sessionStorage.gn);
 $.ajax({
        url: '<?php echo base_url()?>ppt-upload',
        type: 'POST',
        data: formData,
        async: false,
        success: function (data) {
			
            if(data=='1')
			{
				alert('your file uploaded successfully');
				document.getElementById("pptp").textContent = $('#upppt').val() ;
				 $('#upppt').val('');
			}
			else{
				
				alert('some error occured! Please try again');
				 $('#upppt').val('');
			
			}
        },
        cache: false,
        contentType: false,
        processData: false
    });
    
    return false;
		
});
	$(function() {
		

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
});
$(document).ready(function()
{

     setInterval(function() {
		
		var btn=sessionStorage.gn;
	var ar= btn.split('-');
	
		var lastChar = ar[1].substr(ar[1].length - 1);
		
		document.getElementById("hlvl").textContent =' Level '+ lastChar +' out of 4'; 
		//alert();
		// document.getElementById("hlvl").textContent =' Level 4 out of 4'; 
		   datastr={Assign_lvl:sessionStorage.gn};
			$.ajax({
				url: '<?php echo base_url()?>update-count-file',
				type: 'post',
				data: datastr,
				success: function(response)
				{
					 // alert(response);
					  //var obj =json.parse(response);
					  var obj = JSON.parse(response);
					  //alert(obj[0].shown_file_name);
					   document.getElementById("xlxp").textContent = obj[0].shown_file_name ;
					    document.getElementById("docp").textContent = obj[1].shown_file_name ;
					  document.getElementById("pptp").textContent =obj[2].shown_file_name ;
					 
					 
				 if(obj.length!=3)
				 {
					$('#ght').prop('disabled', true);
					//$("#ght").css("display", "none");
				 }
				 else
				 {
					
					$('#ght').prop('disabled', false);
				 }
				
			 
				}
			});
        
     }, 1000);
});
</script>
<?php  $uri=$this->uri->segment(1);

if($uri=='assignment'){?>
<script type="text/javascript">
  window.onbeforeunload = confirmExit;
  function confirmExit()
  {
    return "1";

  }
</script>
<?php }
?>
