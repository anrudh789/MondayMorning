
<style>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> <meta name="viewport" content="width=device-width, initial-scale=1.0">
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Website CSS style -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Website Font style -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<!-- Google Fonts -->
<link href='https://fonts.googleapis.com/css?family=Passion+One'
rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oxygen'
rel='stylesheet' type='text/css'>
<style>
	/*
/* Created by Filipe Pina
 * Specific styles of signin, register, component
 */
	/*
 * General styles
 */
	.table > thead > tr > th > td {
    border-bottom: 2px solid #000;}
	.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td
	{ border-bottom: 1px solid #000;}
	
	.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th,
	.table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td{ border: 1px solid #000;}
	#playground-container {
		height: auto;
		overflow: hidden !important;
		-webkit-overflow-scrolling: touch;
	}

	.main {
		margin: 50px 15px;
	}
	h1.title {
		font-size: 50px;
		font-family: 'Passion One', cursive;
		font-weight: 400;
	}
	hr {
		width: 10%;
		color: #fff;
	}
	.form-group {
		margin-bottom: 15px;
	}
	label {
		margin-bottom: 15px;
	}
	input,
	input::-webkit-input-placeholder {
		font-size: 11px;
		padding-top: 3px;
	}
	.main-login {
		
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
		-webkit-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.21)!important;
		-moz-box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.21)!important;
		box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.21)!important;
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
		filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
	}
	.main-center {
		margin-top: 30px;
		margin: 0 auto;
		max-width: 80%;
		padding: 0px;
		background: #0112B4E;
		
		text-shadow: none;
		-webkit-box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.31);
		-moz-box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.31);
		box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.31);
	}
	span.input-group-addon i {
		color: #009edf;
		font-size: 17px;
	}
	.login-button {
		margin-top: 5px;
	}
	.login-register {
		font-size: 11px;
		text-align: center;
	}
	form {
		padding: 23px 87px 93px 87px;
	}
</style>
<style>
	.modal-dialog {
		width: 800px;
		margin: 30px auto;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<br>
	<section class="content-header">
		<h1>
        Dashboard
        <small>Control panel</small>
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>				</li>
			<li class="active">Dashboard</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-lg-12">
				<div class="container">
					<div class="row main">
						<div class="main-login main-center"
						style="min-height: 637px; font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">
							<h2 style="background-color: #112B4E;padding: 8px 0;text-align: center;size: 30px; color: #fff">Country Comparison</h2>
							<h3 style="background-color: #3C8DBC;text-align: center;size: 30px;    margin-left: 25px;
    margin-right: 25px;">Level 1 out of 4</h3>
							<br>
							<div class="container">
								<div class="col-lg-12"> <b><p style="color:#000; font-size: 14px;">Question 1 : Select two countries and represent the following:<br><br>
1.	Conduct a synthesis of the top 500 companies of Country 1 and represent on the basis of sectors their revenue, profit and assets<br>
2.	Compare the same with Country 2
</p></b>
									<br>
									<h4 style="color: #000;font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">Please select countries for comparision.</h4>
									<br>
									<div class="col-lg-6">
										<div class="btn-group">
											<button type="button" class="btn btn-default"
											style="width: 200px;font-family: 'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif;">Select Country 1</button>
											<button
											type="button" class="btn btn-default dropdown-toggle"
											data-toggle="dropdown"> <span class="caret"></span>
												<span
												class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu"
													style="width: 223px;">
														<li><a href="#">India </a> </li>
														<li><a href="#">China</a> </li>
														<li><a href="#">Japan</a> </li>
														<li><a href="#">USA</a> </li>
													</ul>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="btn-group">
											<button type="button" class="btn btn-default"
											style="width: 200px;">Select Country 2</button>
											<button
											type="button" class="btn btn-default dropdown-toggle"
											data-toggle="dropdown"> <span class="caret"></span>
												<span
												class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu" style="width:223px;" >
                    <li><a href=" # ">Germany</a></li>
                    <li><a href="# ">Australia</a></li>
                    <li><a href="# ">UK</a></li>
					 <li><a href="# ">France</a></li>
					  <li><a href="# ">Spain</a></li>
                    <li><a href="# ">Italy</a></li>
                    <li><a href="# ">Nether Lands</a></li>
					 <li><a href="# ">South Africa</a></li>
					  <li><a href="# ">South Korea</a></li>
                    <li><a href="# ">Canada</a></li>
					 <li><a href="# ">Brazil</a></li>
					  <li><a href="# ">Singapore</a></li>
                  </ul>
											   </div>
										</div>
							
							 <div class="col-sm-10">
																			<div class="col-sm-1">
																				




																			</div>
																				<div class="col-sm-8" style="float: right;padding: 0px 73px;">
																					<br><br>
											   <table class="table table-bordered" style="border: 1px solid #000">
  <thead>
    <tr>
      <th>SN</th>
      <th>Output Expected</th>
      
      <th style="width: 112px;">Exhibit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Raw Data Flat file on Country 2</td>
        <td><label for="file-upload" class="custom-file-upload">
    <i class="fa fa-cloud-upload"></i> 
</label>

</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Synthesis of data for Country 2</td>
     
     <td><label for="file-upload" class="custom-file-upload">
    <i class="fa fa-cloud-upload"></i> 
</label>

	</td>
    </tr>
	 <tr>
      <th scope="row">3</th>
      <td>Comparitive Analysis of Countries</td>
     
 <td><label for="file-upload" class="custom-file-upload">
    <i class="fa fa-cloud-upload"></i> 
</label>

 </td>
    </tr>
   
  </tbody>
</table> </div>
				</div>
										
										<br>
									
										<br>
										<div class="col-sm-9
													" style=" margin-top:10px; ">
											
											<button data-toggle="modal" data-target="#myModal" type="button "
											class="btn btn-primary btn-md "
											style="float: right;background-color:
													#112B4E; border-color: #112B4E;
													margin-left: 3px;  margin-right: -15px; ">Continue</button>
											<div id="myModal" class="modal fade" role="dialog" style=" margin-right: -389px;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="width: 415px; ">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" style="margin-top: -2px">&times;</button>
        <h4 class="modal-title" style="color: #000">Combination which has been selected could not be used in next level.</h4>
      </div>
       <div class="modal-body" style="padding: 13px 27px 51px 22px; color: #000">
       
				
				  <a href="<?php echo base_url()?>ass-4" class="btn btn-primary btn-md pull-right" style="background-color: #112B4E;
    border-color: #112B4E;" data-dismiss="modal" >Continue</a>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div>

  </div>
</div>
											
											
										</div>
								
									</div>
								</div>
							</div>
						
					</div>
					
				</div>
				<!-- end col -->
			</div>
			<!-- Main content --></div>
	</section></div>
			