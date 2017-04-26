<style>
input[type="submit"], button, input[type="button"], .dt-sc-subscription-frm .dt-sc-button {
  border: medium none;
  border-radius: 3px;
  color: #ffffff;
  cursor: pointer;
  float: right;
  font-size: 14px;
  font-weight: bold;
  margin: 0px;
  padding: 11px 20px;
  text-transform: uppercase;
}
.danger{   background-color: #f2dede;
    border-color: #ebccd1;
    color: #a94442;
    margin-bottom: 15px;
  
    padding: 15px;
    width: 94%;}
		.success{
		 background-color: #dff0d8;
    border-color: #d6e9c6;
    color: #3c763d;
    margin-bottom: 15px;
   
    padding: 15px;
    width: 94%;
}
</style>
  <section class="main-title-section-wrapper">
    <div class="container">
      <div class="main-title-section">
        <h1>Login / Signup  </h1>      
      </div>
      
    </div>
  </section>
    <!-- ** Container ** -->
   	<div class="container">
   	
	<!-- ** Primary Section ** -->
	<section id="primary" class="content-full-width">
		<!-- Login Module -->
                
			
				<!-- Login Form -->
				<div class="column dt-sc-one-half first">

					<div class="dt-sc-border-title"> <h2><span>Login Form</span> </h2></div>
					
					<?php if($this->session->flashdata('email_exsist')!="" || $this->session->flashdata('email_exsist')!=null){?>
                <div class="alert danger">      
            <?php echo $this->session->flashdata('email_exsist');
           ?>
            </div>
                <?php }?>
                     <?php if($this->session->flashdata('error_email')!="" || $this->session->flashdata('error_email')!=null){?>
                <div class="alert danger">      
            <?php echo $this->session->flashdata('error_email');
           ?>
            </div>
                <?php }?>
                    <p> <strong>Already a Member? Log in here.</strong> </p>
                    
		<form name="loginform" id="loginform" action="<?php echo base_url()?>user" method="post" autocomplete="off">
			
			<p class="login-username">
				<label for="user_login"> Email</label>
				<input type="email" name="user_login" id="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="required" placeholder="e.g. john@mail.com" class="input" value="" maxlength="50" />
			</p>
			<p class="login-password">
				<label for="user_pass">Password</label>
				<input type="password" name="user_pwd" required="required" placeholder="***********" id="user_pass" class="input" value="" maxlength="20" />
			</p>
			
			<p class="login-remember"><label>
			<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label></p>
			<p class="login-submit">
				<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Log In" />
				
			</p>
			
		</form>                    <p class="tpl-forget-pwd"><a href="<?php echo base_url()?>forget">Lost your password ?</a></p>

				</div><!-- Login Form End -->

				<!-- Registration Form -->
				<div class="column dt-sc-one-half">
                    <div class="dt-sc-border-title"> <h2><span>Sign Up</span> </h2></div>
                        <div id="reg-success" class="displaynone alert alert-success"  >
			
		      <strong>Congratulation!</strong>  You have succesfully register in the Monday Morning For further details check your Email inbox or Spam Folder.
		    </div>
                 <div class="displaynone alert danger" id="email_exsist_error" >
		      <strong>Opps!</strong>  This email is already Registered.
		    </div>
		   <div class="displaynone alert success" id="email_exsist_success" >
		      <strong>Congratulation!</strong>  You Can use this email id.
		    </div>
					<p> <strong>Do not have an account? Sign Up</strong> </p>

					<form name="loginform" id="loginform" action="<?php echo base_url()?>sign-up" method="post" autocomplete="off">
						<p>	
							<label>Full Name<span class="required"> * </span> </label> 
							<input type="text" autocomplete="off" name="fullname"  placeholder="e.g. John doe" class="input" value="" maxlength="30" required="required" />
						</p>
						<p>
							<label>Email Id<span class="required"> * </span> </label> 
							<input type="email" autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="user_email" id="user_email" placeholder="e.g. john@mail.com" class="input" value="" maxlength="50" required="required" />
						</p>
						<p class="login-password">
				<label for="user_pass">Password <span class="required"> * </span></label>
				<input type="password" autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password (required)"  maxlength="20" name="user_password" id="user_password" required="required"  placeholder="***********"  class="input" value="" size="20" />
			</p>
			<div>
			<div class="g-recaptcha" data-sitekey="6LdBJx0UAAAAAPz3p4F753mLbIjeb3-I4amP36rJ"></div>
			</div>
						<p class="submit alignleft"><input type="submit" class="button-primary" value="Submit" /></p>
					</form>
				</div><!-- Registration Form End -->
				<div class="clear"></div>
				
        <div class="dt-sc-social-logins-container">
					<div class="dt-sc-hr-invisible"></div>
				<div class="dt-sc-social-logins-divider">Or</div>
				<div class="dt-sc-hr-invisible"></div>
			<!--	<a href="#" onclick="javascript:login();" class="dt-sc-social-facebook-connect"><i class="fa fa-facebook">
					
				</i>Connect With Facebook</a>-->
				<div class="dt-sc-hr-invisible">
					
				</div>
				<a onclick="javascript:liAuth()" href="#" class="dt-sc-social-link-connect">
					<i class="fa fa-linkedin"></i> Connect with linkedin </a>
				<div class="dt-sc-hr-invisible">
					
				</div>
				</div>		
		<!-- Login Module End-->

		<!-- #post-4706 -->
<div id="post-4706" class="post-4706 page type-page status-publish hentry">
<div class="social-bookmark"></div><div class="social-share"></div>	
</div><!-- #post-4706 -->

	</section><!-- ** Primary Section End ** -->    
                </div><!-- **Container - End** -->
            </div><!-- **Main - End** -->

