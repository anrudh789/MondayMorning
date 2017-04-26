   <style>
.dt-sc-social-link-connect {
  background-color: #0077b5;
  border: 1px solid #0077b5;
}
.dt-sc-social-link-connect {
  background-color: #0077b5;
  border: 1px solid #0077b5;
  border-radius: 3px;
  clear: both;
  color: #fff;
  display: block;
  margin: 0 auto;
  padding: 5px 0;
  position: relative;
  text-align: center;
  width: 220px;
}
.dt-sc-social-link-connect:hover {
  background-color: #0077b5;
  border: 1px solid #0077b5;
}
</style>

   <?php  $base_url=base_url().'assets/';
		       $uri=$this->uri->segment(1);
					 if($uri=='contact-us')
					 {
						  $contact='current_page_ancestor';
					 }
					 if($uri=='testimonial')
					 {
						  $test='current_page_ancestor';
					 }
					 if($uri=='about-us')
					 {
						  $about='current_page_ancestor';
					 }
					 if($uri=='blog')
					 {
						  $blog='current_page_ancestor';
					 }
					  if($uri==''|| $uri==null)
					{
							$home	='current_page_ancestor';
					}
						
			
		    
		?>
	 <!-- **Navigation** -->
             
               <div class="header-register">                    	
	<ul class="dt-sc-default-login">
		<li><a href="<?php echo base_url()?>register" title="Login / Register Now"><i class="fa fa-user"></i>Login<span> | </span>Register</a></li></ul>                    </div>
              <nav id="main-menu">
                <div class="dt-menu-toggle" id="dt-menu-toggle">
                  Menu <span class="dt-menu-toggle-icon"></span>
                </div>
                <ul id="menu-top-menu" class="menu">
         <li id="" class="menu-item menu-item-type-post_type menu-item-object-page  
				  current-page-parent current_page_parent <?php  if(isset($home)){echo $home;} ?> menu-item-depth-0 menu-item-simple-parent ">
                    <a href="<?php echo base_url()?>"><i class="fa fa-home"></i>Home</a>

                    
                  </li>
                  <li id="" class="menu-item menu-item-type-post_type <?php if (isset($about)){echo $about;}  ?> menu-item-object-page   menu-item-simple-parent ">
                    <a href="<?php echo base_url()?>about-us"><i class="fa fa-book"></i>Monday Morning?</a> </li>
                    <li id="" class="menu-item menu-item-type-post_type menu-item-object-page <?php if(isset($how)){echo $how;}  ?>  menu-item-depth-0 menu-item-simple-parent ">
                    <a href="<?php echo base_url()?>how-it-works"><i class="fa fa-book"></i>How It Works</a> </li>
                      <li id="" class="menu-item menu-item-type-post_type menu-item-object-page <?php if(isset($test)){echo $test;} ?> menu-item-depth-0 menu-item-simple-parent ">
                    <a href="<?php echo base_url()?>testimonials"><i class="fa fa-book"></i>Testimonials</a> </li>
                   <li id="" class="menu-item menu-item-type-post_type menu-item-object-page <?php  if(isset($blog)){echo $blog;} ?> menu-item-depth-0 menu-item-simple-parent ">
                    <a href="<?php echo base_url()?>blog"><i class="fa fa-book"></i>blog</a> </li>
                
                  <li id="" class="menu-item menu-item-type-post_type menu-item-object-page <?php if(isset($contact)){echo $contact;} ?>  menu-item-depth-0 menu-item-simple-parent ">
                    <a href="<?php echo base_url()?>contact-us"><i class="fa fa-location-arrow"></i>Contact Us</a>
										
                  </li>
                </ul>
              </nav>
              <!-- **Navigation - End** -->

            </div>
          </header>
          <!-- **Header - End** -->
        </div>
      </div>