<?php  $img_path=base_url().'upload/';
 $base_url=base_url().'admin_assets/';
	 $uri=$this->uri->segment(1);
	
	if($uri=='mm-profile')
	{ $mm='active';}
	elseif($uri=='caf-profile')
	{ $caf='active';}
		elseif($uri=='user-dashboard')
	{ $ud='active';}
	else{$class="";}
	
	?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
									 <?php if($user_data_tbl[0]['image']!="" || $user_data_tbl[0]['image']!=""){$img=$user_data_tbl[0]['image'];}else{$img="user.jpg";}?>
          <img src="<?php echo $img_path.$img?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('name_user')?></p>
          <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
        </div>
      </div>
   
      <!-- sidebar menu: : style can be found in sidebar.less -->
       <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
		  <li class="<?php echo $ud ?> treeview">
          <a href="<?php echo base_url()?>user-dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
           
          </a>
        </li>
        <li class="<?php echo $mm ?> treeview">
          <a href="<?php echo base_url()?>mm-profile">
            <i class="fa fa-user"></i> <span>MM Profile</span>
           
          </a>
        </li>
								  <li class="<?php echo $caf ?> treeview">
          <a href="<?php echo base_url()?>caf-profile">
            <i class="fa fa-user"></i> <span>Caf Profile</span>
           
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-tasks"></i>
            <span>My Assignment</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>My Score</span>
          </a>
        </li>
          <li class="treeview">
          <a href="#">
             <i class="fa fa-dashboard"></i> 
            <span>Apply Job/CAF</span>
          </a>
        </li>
           <li class="treeview">
          <a href="#">
             <i class="fa fa-dashboard"></i> 
            <span>Timeline</span>
          </a>
        </li>
            <li class="treeview">
          <a href="#">
             <i class="fa fa-user-plus"></i>
            <span>Invite</span>
          </a>
        </li>
       
        <li class="treeview">
         
          <ul class="treeview-menu">
            
            <li>
              
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                <li>
                 
                  
                </li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  