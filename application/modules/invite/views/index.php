   

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
		border: 1px solid #ecf0f5;
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
		border: 1px solid #ecf0f5;
	}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
        Invite
        <small></small>
      </h1>
		<ol class="breadcrumb">
			<li><a href="<?php base_url()?>user-dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
			
			<li class="active">Invoice</li>
		</ol>
	</section>
	<div class="row main">
		<div class="col-md-12">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<section class="invoice show">
					<!-- title row -->
					<div class="row" style="background-color: #112B4E">
						<div class="col-md-12">
							<h2 class="lel">Invite</h2> </div>
					</div>
					<div class="clearfix" style="margin-top: 20px;"></div>
					
					<!-- /.box-header -->
					<div class="clearfix"></div>
					
<div class="container">
    <div class="row">
        <div class="col-md-12">
			<div class="col-md-1">
			</div>
			<div class="col-md-8">
    	<form action="<?php echo base_url()?>invite-send" method="post">
			<div class="form-group multiple-form-group" data-max=3>
				
				<div class="form-group input-group">
					   <div class="col-md-3">
					<input type="text" name="multipleemail[]" class="form-control" required placeholder="Enter your email id" style="width: 200px;">
					   </div>
					<div class="col-md-3">
					<input type="text" name="multiplefirstname[]" class="form-control" placeholder="Enter your first name" style="width: 200px; margin-left:20px; ">
					   </div>
					<div class="col-md-3">
					<input type="text" name="multiplelastname[]" class="form-control" placeholder="Enter your last name" style="width: 200px; margin-left:40px;">
					   </div>
					<div class="col-md-1">
						<span class="input-group-btn"><button type="button"  class="btn btn-default btn-add" style="margin-left:60px;">+
						</button></span>
					</div>
					<br>
					<br>
					
			</div>
			 <div class="col-md-12">
						<button id="activate-step-2" class="btn btn-primary btn-md " style="background: #112B4E;border-color: #112B4E; ">Send</button></div>
				</div>
		</form>
			</div>
			<div class="col-md-2">
			</div>
    	</div>        
	</div>
</div>
		    	
	</div>
	<!-- <a id="add_row" class="btn btn-success pull-left">Add Row</a><a id='delete_row' class="btn btn-danger pull-right">Delete Row</a> -->
				</div>
					
				</section>
			</div>
			
		</div>
	
	<!-- /.content -->
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
// Add , Dlelete row dynamically

(function ($) {
    $(function () {

        var addFormGroup = function (event) {
            event.preventDefault();
		
            var $formGroup = $(this).closest('.form-group');
            var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
            var $formGroupClone = $formGroup.clone();

            $(this)
                .toggleClass('btn-default btn-add btn-danger btn-remove')
                .html('–');

            $formGroupClone.find('input').val('');
            $formGroupClone.insertAfter($formGroup);

            var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
            if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
                $lastFormGroupLast.find('.btn-add').attr('disabled', true);
            }
        };

        var removeFormGroup = function (event) {
            event.preventDefault();

            var $formGroup = $(this).closest('.form-group');
            var $multipleFormGroup = $formGroup.closest('.multiple-form-group');

            var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
            if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
                $lastFormGroupLast.find('.btn-add').attr('disabled', false);
            }

            $formGroup.remove();
        };

        var countFormGroup = function ($form) {
            return $form.find('.form-group').length;
        };

        $(document).on('click', '.btn-add', addFormGroup);
        $(document).on('click', '.btn-remove', removeFormGroup);

    });
})(jQuery);
</script>