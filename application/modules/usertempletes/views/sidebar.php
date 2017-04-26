<?php  $img_path=base_url().'upload/';
 $base_url=base_url().'admin_assets/';
	 $uri=$this->uri->segment(1);
	
	if($uri=='mm-profile')
	{
		$mm='active';
  	$img_ico_mp='user1_blue.png';}
	else{
		$img_ico_mp='user1.png';
	}
	if($uri=='caf-profile')
	{ $caf='active';
		$img_ico='job_blue.png';}
		else{
			$img_ico='job.png';
		}
if($uri=='user-dashboard')
	{ $ud='active';
	$img_ico_das='timeline_blue.png';}
	else{
			$img_ico_das='timeline.png';
		}
	if($uri=='user-dashboard')
	{ $ud='active';
	$img_ico_das='dashboard_blue.png';}
	else{
			$img_ico_das='dashboard.png';
		}
		if($uri=='ass-1' || $uri=='ass-2' || $uri=='ass-3' || $uri=='ass-4')
		{
			 $ass="active";
				$img_ass='assignment1_blue.png';
		}
		else{$ass="";$img_ass='assignment1.png';}
		
	?>
	    
<aside class="main-sidebar" style="background-color: #162f51">
    <!-- sidebar: style can be found in sidebar.less -->
				<br>
    <section class="sidebar" style="    border-top: 1px solid #ccc;
    border-top-style: dashed;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image text-center">
	<?php if($user_data_tbl[0]['image']!="" || $user_data_tbl[0]['image']!=""){$img=$user_data_tbl[0]['image'];}else{$img="user.jpg";}?>
          <img src="<?php echo $img_path.$img?>" class="img-circle" alt="User Image">
        </div>
     <!--   <div class="pull-left info">
          <p><?php echo $this->session->userdata('name_user')?></p>
          <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>-->
      </div>
   
      <!-- sidebar menu: : style can be found in sidebar.less -->
  
       <ul class="sidebar-menu">
        <li class="header text-center"><?php echo $this->session->userdata('name_user')?></li>
		  <li class="<?php echo $ud ?> treeview">
          <a href="<?php echo base_url()?>user-dashboard">
										<img src="<?php echo $img_path.$img_ico_das?>">
										<br>
             <span>Dashboard</span>
           
          </a>
        </li>
        <li class="<?php echo $mm ?> treeview">
          <a href="<?php echo base_url()?>mm-profile">
            	<img src="<?php echo $img_path.$img_ico_mp?>"> <br><span>MM Profile</span>
           
          </a>
        </li>
								  <li class="<?php echo $caf ?> treeview">
          <a href="<?php echo base_url()?>caf-profile">
          	<img src="<?php echo $img_path.$img_ico?>"><br>
										<!--	<span>CAF Profile</span>-->
											<span>Apply Job/CAF</span>
           
          </a>
        </li>
        <li class="<?php echo $ass ?> treeview">
          <a href="<?php echo base_url()?>assignment">
            	<img src="<?php echo $img_path.$img_ass?>">
												<br>
            <span>My Assignment</span>
          </a>
        </li>
     <li class="treeview">
          <a href="#">
           	<img src="<?php echo $img_path?>score.png">
											<br>
            <span>My Score</span>
          </a>
        </li>
       <!--  <li class="treeview">
          <a href="#">
           	<img src="<?php echo $img_path.$img_ico?>">
												<br>
            <span>Apply Job/CAF</span>
          </a>
        </li>-->
       <li class="treeview">
          <a href="#">
          	<img src="<?php echo $img_path?>score.png">
											<br>
            <span>Timeline</span>
          </a>
        </li>
       <li class="treeview">
          <a href="#">
            	<img src="<?php echo $img_path?>invitation.png">
												<br>
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

  