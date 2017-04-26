    
        <style>
          /*
/* Created by Filipe Pina
 * Specific styles of signin, register, component
 */
/*
 * General styles
 */
#playground-container {
    height: auto;
    overflow: hidden !important;
    -webkit-overflow-scrolling: touch;
}


h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}
.form-control {
    height: auto!important;
padding: 8px 12px !important;
}
.input-group {
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
#button {
    border: 1px solid #ccc;
    margin-top: 28px;
    padding: 6px 12px;
    color: #666;
    text-shadow: 0 1px #fff;
    cursor: pointer;
    -moz-border-radius: 3px 3px;
    -webkit-border-radius: 3px 3px;
    border-radius: 3px 3px;
    -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    box-shadow: 0 1px #fff inset, 0 1px #ddd;
    background: #f5f5f5;
    background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
    background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
}
.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 80%;
    padding: 0px;
	background:#0112B4E;
	    color: #FFF;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}
 form{
    padding: 23px 87px 93px 87px; }
            
            
        </style>
        


  
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
   
     <section class="content-header">
      <h1>
        Dashboard
        <small><?php
															if(isset($user_tbl[0]['mm_user_full_name']))
															 {
																if($user_tbl[0]['mm_user_full_name']!=null || $user_tbl[0]['mm_user_full_name']!='')
																{ echo $user_tbl[0]['mm_user_full_name']; }
																else{
																	 echo $this->session->userdata('name_user');
																}
															 }
															 else{echo $this->session->userdata('name_user');}
															
															 ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Assignment</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
   

                                    <div class="row">
                                         <div class="col-lg-12">
                                         	<div class="container">
			<div class="row main">
               
				<div class="main-login main-center" style="min-height: 600px">
				 <h2 style="background-color: #112B4E;padding: 8px 0;text-align: center;">Assignment 1</h2>
					 <div class="box-body pad">
						<div class="container">
							    <div class="col-sm-9" style="max-height: 300px;color: #000;overflow-y: scroll">
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
             
								
<div class="col-sm-9" >
             <br><br>
                 <button type="button" class="btn btn-primary btn-md"
												 data-toggle="modal" data-target="#myModal"
												 style="float: right;background-color: #112B4E;border-color: #112B4E; margin-left:9px;">Continue</button>
                   <a  	href="#"style="float: left;border-color: #112B4E;">Please Read above Instructions and download instruction</a>
                      
						  </div>
					
                    
                    
                 
                     </div>
						
					
				</div>
			</div>
		</div>


                                           </div><!-- end col -->

                                         </div>
																		</div>
		
		</section>
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
				  <a  href="<?php echo base_url()?>ass-3" style="background-color: #112b4e" class="btn btn-success  pull-right" data-dismiss="modal" >Accept</a>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>
 </div>
                                     
    <!-- Main content -->
  