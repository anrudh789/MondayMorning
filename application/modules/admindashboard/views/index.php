 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $totaluser?> Users</h3>

              <p>1500 CAF User</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
           <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Assignment<br> Complete</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Top 3</h3>

              <p>High Score</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
     
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">New Regitered User</h3>
				  
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Registration Date</th>
                  <th>Email Verification Status</th>
                </tr>
					 <?php $sr=0; foreach($reg_user_data as $reg){ $sr++;
					 
					 if($reg['eamil_auth_status']==1){$em= 'Email Verified'; $co='#00a65a';}else{$em='Not Verifiled';$co='#dd4b39';}
					 ?>
                <tr style="color:<?php echo $co?>">
                  <td><?php echo $sr++?></td>
                  <td><?php echo $reg['mm_user_full_name']?></td>
                  <td><?php echo $reg['mm_user_email']?></td>
                  <td><?php echo date('F j, Y',strtotime($reg['reg_date']));?></td>
                  <td ><?php echo  $em ?></td>
                </tr>
					 <?php }?>
               
               
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Assignment Done</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Name / Email</th>
                  <th>Assignment</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Monday Morning</td>
                  <td>mm@gmail.com</td>
                  
                </tr>
               
                
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
     </section>
    <!-- /.content -->
     <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Recent Uploaded Assignment</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- /.box2-header -->
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
   <div class="row">
      <div class="col-sm-6">
         <div class="dataTables_length" id="example1_length">
            <label>Show
               <select name="example1_length"
               aria-controls="example1" class="form-control input-sm">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
               </select> entries</label>
         </div>
      </div>
      <div class="col-sm-6">
         <div id="example1_filter" class="dataTables_filter">
            <label>Search:
               <input type="search" class="form-control input-sm"
               placeholder="" aria-controls="example1">
            </label>
         </div>
      </div>
   </div>
   <!-- /.box2-header -->
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Assignment</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Avg Score</th>
                </tr>
                </thead>
                <tbody>
              
                <tr>
                  <td>Gecko</td>
                  <td>Netscape Navigator 9</td>
                  <td>Win 98+ / OSX.2+</td>
                  <td>1.8</td>
                  <td>A</td>
                </tr>
             
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div><div class="row">
   <div class="col-sm-8" style="margin-top: 14px;
    padding-left: 31px;">
      <div class="dataTables_info" id="example2_info"
      role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
   </div>
   <div class="col-sm-4">
      <div class="dataTables_paginate paging_simple_numbers"
      id="example2_paginate">
         <ul class="pagination">
            <li class="paginate_button previous disabled"
            id="example2_previous"><a href="#" aria-controls="example2"
               data-dt-idx="0" tabindex="0">Previous</a>
            </li>
            <li class="paginate_button active"><a href="#" aria-controls="example2"
               data-dt-idx="1" tabindex="0">1</a>
            </li>
            <li class="paginate_button "><a href="#" aria-controls="example2"
               data-dt-idx="2" tabindex="0">2</a>
            </li>
            <li class="paginate_button "><a href="#" aria-controls="example2"
               data-dt-idx="3" tabindex="0">3</a>
            </li>
            <li class="paginate_button "><a href="#" aria-controls="example2"
               data-dt-idx="4" tabindex="0">4</a>
            </li>
            <li class="paginate_button "><a href="#" aria-controls="example2"
               data-dt-idx="5" tabindex="0">5</a>
            </li>
            <li class="paginate_button "><a href="#" aria-controls="example2"
               data-dt-idx="6" tabindex="0">6</a>
            </li>
            <li class="paginate_button next"
            id="example2_next"><a href="#" aria-controls="example2"
               data-dt-idx="7" tabindex="0">Next</a>
            </li>
         </ul>
      </div>
   </div>
</div>
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
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">View CAF</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Age</th>
                  <th>High Qualification</th>
                </tr>
                <tr>
                  <td>1.</td>
                  <td>Monday Morning</td>
                  <td>mm@gmail.com</td>
                  <td>25</td>
                  <td>MBA</td>
                </tr>
               
               
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Score Window</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Name</th>
                  <th>Assignment</th>
                  <th>Score</th>
                </tr>
                <tr>
                  <td>Monday Morning</td>
                  <td>First</td>
                  <td>50</td>
                </tr>
               
                
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
     </section>
    <!-- /.content -->
     <!-- Main content -->
 
        </section>
        <!-- right col -->
   
      </div>
      <!-- /.row (main row) -->

    </section>
    