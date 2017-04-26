  <?php  $base_url=base_url().'admin_assets/';?>
	 <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
  
<div class="wrapper">
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Users
        <small>List of registered users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url()?>admin-dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
        
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        

          <div class="box">
            <div class="box-header">
              <!--<h3 class="box-title">Registered User</h3>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
									<td> Sr.no </td>
									<td>Name</td>
                  <th>Fathe Name</th>
                  <th>Dob</th>
                  <th>Present Address</th>
                  <th>Contact Number</th>
                  <th>Highest Qualification</th>
									 <th>State & City</th>
                </tr>
                </thead>
                <tbody>
									<?php $sr=0;foreach($mm_pro as $mmprofile){ $sr++;
									     $uid=$mmprofile['uid'];
										   $where="`mm_uid`='$uid'";
									    $name=$this->Crud_modal->all_data_select('*','user',$where,'mm_uid asc');
								      $all_state=$this->Userdashboard_modal->state_name_withid($mmprofile['state']);
									     $all_city=$this->Userdashboard_modal->cityname_with_cityid($mmprofile['city']);  ?>
									
                <tr>
									<td><?php echo $sr++?></td>
									<td><?php echo $name[0]['mm_user_full_name']?></td>
                  <td><?php echo ucfirst($mmprofile['father_name'])?></td>
                  <td><?php echo date('F j,Y',strtotime($mmprofile['dob']))?></td>
                  <td><?php echo $mmprofile['present_addr']?></td>
                  <td><?php echo $mmprofile['contact_number']?></td>
                  <td><?php echo $mmprofile['high_q']?></td>
									
									 <td><?php echo $all_state['name']?> & <?php echo $all_city['name']?></td>
                </tr>
								<?php }?>
               
                </tfoot>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script>
  $(function () {
    $("#example1").DataTable();
  
  });
</script>
