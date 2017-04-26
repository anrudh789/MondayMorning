
<style>
	input[type="file"] {
    display: none;
}



#clockdiv {
    color: #112b4e;
    display: inline-block;
    font-family: sans-serif;
    font-size: 55px;
    font-weight: 100;
    margin-top: 120px;
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

.smalltext{
	padding-top: 5px;
	font-size: 16px;
}

.custom-file-upload {

    
    padding: 6px 12px;
    cursor: pointer;
}

	
	.main-center {
		margin-top: 30px;
		margin: 0 auto;
		max-width: 80%;
		padding: 0px;
	background-color: #FFF;
		
		text-shadow: none;
		-webkit-box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.31);
		-moz-box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.31);
		box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.31);
	}

	.table > thead > tr > th > td {
    border-bottom: 2px solid #000;}
	.table > thead > tr > th, .table > tbody > tr > th, .table > tfoot > tr > th, .table > thead > tr > td, .table > tbody > tr > td, .table > tfoot > tr > td
	{ border-bottom: 1px solid #000;}
	
	.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th,
	.table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td{ border: 1px solid #000;}
</style>

<style>
	.modal-dialog {
		width: 800px;
		margin: 30px auto;
	}
</style>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<br>
	<section class="content-header">
		<h1>
        Dashboard
        <small>Control panel</small>
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Dashboard</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-lg-12">
				<div class="container">
					<div class="row main">
						<div class="main-login main-center" style="min-height: 600px;">
							<h2 style="background-color: #112B4E;padding: 8px 0;text-align: center;  color: #fff">Assignment 1</h2>
							<div class="box-body pad">
								<div class="container">
									<div class="col-lg-12">
										<div class="col-md-9"><br>
										<h2 style="color: #000; text-align: center">Countries Selected</h2>
										<br></div>
										
										<div class="col-lg-6">
										
											<div class="btn-group">
                               <button class="btn btn-default btn-block" style="width: 300px" type="button" disabled="disabled">U.S.A</button>
                 
                </div>
										</div>
										<div class="col-lg-6">
											   <div class="btn-group">
                 <button class="btn btn-default btn-block" type="button" style="width: 300px" disabled="disabled">India</button>
                 
                 
                </div>
											  
											
											
										</div>
																			 <div class="col-sm-10">
																			<div class="col-sm-2">
																				

<div id="clockdiv">
 <div style="display: none">
    <span class="days"></span>
    <div class="smalltext">Days</div>
  </div>
  <div>
    <span class="hours"></span>
    <div class="smalltext"></div>
  </div>
	<span> : </span>
  <div>
    <span class="minutes"></span>
    <div class="smalltext"></div>
  </div>
  <div style="display: none">
    <span class="seconds"></span>
    <div class="smalltext">Seconds</div>
  </div>
</div>



																			</div>
																				<div class="col-sm-8" style="float: right;padding: 36px;">
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
<input id="file-upload" type="file"/>
	<button type="button" class="btn btn-primary btn-md" style="background-color: #112B4E; border-color: #112B4E;">save</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Synthesis of data for Country 2</td>
     
     <td><label for="file-upload" class="custom-file-upload">
    <i class="fa fa-cloud-upload"></i> 
</label>
<input id="file-upload" type="file"/>
	 <button type="button" class="btn btn-primary btn-md" style="background-color: #112B4E; border-color: #112B4E;" disabled="disabled">save</button></td>
    </tr>
	 <tr>
      <th scope="row">3</th>
      <td>Comparitive Analysis of Countries</td>
     
 <td><label for="file-upload" class="custom-file-upload">
    <i class="fa fa-cloud-upload"></i> 
</label>
<input id="file-upload" type="file"/>
 <button type="button" class="btn btn-primary btn-md" style="background-color: #112B4E; border-color: #112B4E;" disabled="disabled">save</button></td>
    </tr>
   
  </tbody>
</table> </div>
				</div>
							
										<div class="col-sm-9" >
											<button type="button" class="btn btn-primary btn-md"
											style="float: right;background-color: #112B4E;border-color: #112B4E; margin-left:9px;">Continue</button>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
				
				</div>
				<!-- end col -->
			</div>
		</div>
	</section>
</div>
		
		<!-- Main content -->