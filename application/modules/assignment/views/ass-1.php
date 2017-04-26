<?php include_once( 'header.php'); include_once(
'side_bar.php'); ?>
<style>
	.invoice {
		position: relative;
		background: #fff;
		border: 1px solid #f4f4f4;
		padding: 0px 16px;
		margin: 114px 25px;
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
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
        Dashboard
        <small>#007612</small>
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>				</li>
			<li><a href="#">Examples</a> </li>
			<li class="active">Invoice</li>
		</ol>
	</section>
	<div class="row main">
		<div class="col-md-12">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<section class="invoice show">
					<!-- title row -->
					<div class="row" style="background-color: #112B4E">
						<div class="col-md-12">
							<h2 class="lel">My Assignment</h2> </div>
					</div>
					<div class="clearfix" style="margin-top: 20px;"></div>
					<div class="">
						<div class="col-md-12">
							<h3 style="text-align: center">Assignment</h3>
							<hr> </div>
					</div>
					<!-- /.box-header -->
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12">
							<table class="table table-striped table-responsive">
								<thead>
									<tr>
										<th class="text-center">S.no</th>
										<th class="text-center">Assignment Name</th>
										<th class="text-center">Assignment Description</th>
										<th
										class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr class="text-center">
										<td>1</td>
										<td>Assignment 1</td>
										<td>Assignment Description</td>
										<td
										class="text-center">
											<button type="button" class="btn btn-warning btn-default"
											style="background-color: #112B4E; border-color: #112b4e; color: #fff;">Start</button>
											</td>
									</tr>
									<tr class="text-center">
										<td>2</td>
										<td>Assignment 2</td>
										<td>Assignment Description</td>
										<td
										class="text-center">
											<button type="button" class="btn btn-warning btn-default disabled"
											style="background-color: #112B4E;
    border-color: #112b4e; color: #fff;">Start</button>
											</td>
									</tr>
									<tr class="text-center">
										<td>3</td>
										<td>Assignment 3</td>
										<td>Assignment Description</td>
										<td
										class="text-center">
											<button type="button" class="btn btn-warning btn-default disabled"
											style="background-color: #112B4E;
    border-color: #112b4e; color: #fff;">Start</button>
											</td>
									</tr>
									<tr class="text-center">
										<td>4</td>
										<td>Assignment 4</td>
										<td>Assignment Description</td>
										<td
										class="text-center">
											<button type="button" class="btn btn-warning btn-default disabled"
											style="background-color: #112B4E;
    border-color: #112b4e; color: #fff;">Start</button>
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
	<!-- /.content -->
	<div class="clearfix"></div>
</div>
<?php include 'foote.php' ?>