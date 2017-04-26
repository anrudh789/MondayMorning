<?php include_once( 'header.php'); include_once(
'side_bar.php'); ?>
        
        <style>
			.th .tbody .thead .tr .td{style="border: 1px solid #543131;"}
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
               
				<div class="main-login main-center" style="min-height:600px">
				 <h2 style="background-color: #112B4E;padding: 8px 0;text-align: center;font-size: 30px">My Assignment </h2>
					 <div class="box-body pad">
						<div class="container">
							    <div class="col-sm-9" style="color: #000;">
	    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
     
      <!-- /.row -->
     
    
     <!-- Main End content -->
   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" >Assignment</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover" style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">
                <thead>
                <tr>
                  <th style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">S.no</th>
                  <th style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">Assignment Name</th>
                  <th style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">Assignment Description</th>
                
                  <th style="border: 1px solid #543131;">Action</th>
                  
                </tr>
                </thead>
                <tbody >
                <tr >
                  <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">1</td>
                  <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">Assignment 1</td>
                  <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">Assignment Description</td>
                 
                  <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">
                     <div class="btn-group-vertical">
                       <button id="myBtn"  class="btn btn-warning" style="background-color: #112B4E;
    border-color: #112b4e;">Start</button></td>
    
                    </div>
                  </td>
                </td>
                </tr>
                
                
                 <tr>
                  <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">2</td>
                  <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">Assignment 2</td>
                    <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">Assignment Description</td>
                
                   <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">
                     <div class="btn-group-vertical">
                       <button type="button" class="btn btn-warning btn-default disabled"style="background-color: #112B4E;
    border-color: #112b4e; color: #fff;">Start</button>
                    </div>
                   </td>
                </tr>
                 <tr>
                  <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">3</td>
                  <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">Assignment 3</td>
                    <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">Assignment Description</td>
                  
                    <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">
                     <div class="btn-group-vertical">
                        <button type="button" class="btn btn-warning btn-default disabled" style="background-color: #112B4E;
    border-color: #112b4e; color: #fff;">Start</button>
                    </div>
                    </td>
                </tr>
                 <tr>
                  <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">4</td>
                  <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">Assignment 4</td>
                    <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">Assignment Description</td>
                
                   <td style=" border-bottom-color: #112B4E;border-bottom: #112B4E;border: 1px solid #000;">
                     <div class="btn-group-vertical">
                        <button type="button" class="btn btn-warning btn-default disabled" style="background-color: #112B4E;
    border-color: #112b4e; color: #fff;">Start</button>
                    </div>
                   </td>
                </tr>
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
                 </div>
             
								
<!--<div class="col-sm-9" >
             <br><br>
                 <button type="button" class="btn btn-primary btn-md"
												 data-toggle="modal" data-target="#myModal"
												 style="float: right;background-color: #112B4E;border-color: #112B4E; margin-left:9px;">Continue</button>
                   <a  	href="#"style="float: left;border-color: #112B4E;">Please Read above Instructions and download instruction</a>
                      
						  </div>-->
					
                    
                    
                 
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
				  <button type="button" class="btn btn-success green pull-right" data-dismiss="modal" >Accept</button>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>
 </div>
                                     
    <!-- Main content -->
  