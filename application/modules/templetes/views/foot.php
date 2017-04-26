    <?php  $base_url=base_url().'assets/';?>

    <script type="text/javascript" src="<?php echo $base_url?>js/core.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/datepicker.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/jsscplugins.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/shortcodes.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/jquery_013.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/jquery_003.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/jquery_010.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/dt.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/widget.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/mouse.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/resizable.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/draggable.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/button.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/position.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/dialog.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/wpdialog.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/jquery_011.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/scripts.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/jquery_007.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/jquery_009.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/cart-fragments.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/comment-reply.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/postratings-js.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/jquery_014.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/jquery_012.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/jquery_005.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/jquery_006.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/jsplugins.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/jquery_008.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/picker.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/ajax-courses.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/ajax-classes.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/dashboard.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/custom.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/s2member-o.js"></script>
    <script type="text/javascript" src="<?php echo $base_url?>/js/wp-embed.js"></script>
	<script>
		jQuery('#user_email').focusout(function(){
			var email=jQuery('#user_email').val();
			var u_email=email.trim();
		//	alert(u_email);
             var datastr={USEREMAIL:u_email};
				jQuery.ajax({
							url: '<?php echo base_url()?>email-ajax-check',
							type: 'post',
							data: datastr,
							success: function(data)
							{
								if(data==='email-exsist')
								{
									  
									jQuery('#email_exsist_error').slideDown();
									jQuery('#email_exsist_success').slideUp();
									jQuery('#user_email').val(' ');
									jQuery('#user_email').attr("placeholder",email);
								}
								else
								{
								    if(u_email.length>7)
									{
										
										jQuery('#email_exsist_error').slideUp();
										jQuery('#email_exsist_success').slideDown();
								    }
									else
									{
										
										jQuery('#email_exsist_error').slideUp();
										jQuery('#email_exsist_success').slideUp();
									}
								}
							}
						});
					});
			jQuery('#user_email_pass').focusout(function(){
			var email=jQuery('#user_email_pass').val();
			var u_email=email.trim();
		//	alert(u_email);
             var datastr={USEREMAIL:u_email};
				jQuery.ajax({
							url: '<?php echo base_url()?>email-ajax-check',
							type: 'post',
							data: datastr,
							success: function(data)
							{
								if(data==='email-exsist')
								{
									  
									
									jQuery('#email_exsist_success').slideDown();
									jQuery('#email_exsist_error').slideUp();
									
									
								}
								else
								{
									jQuery('#email_exsist_error').slideDown();
									jQuery('#email_exsist_success').slideUp();
									jQuery('#user_email_pass').val('');
								}
								
							}
						});
					});
		
	</script>
	 <script>
//window.fbAsyncInit = function() {
//    FB.init({
//      appId      : '898401970282000',
//      xfbml      : true,
//      version    : 'v2.8'
//    });
//    FB.AppEvents.logPageView();
//  };
//
//  (function(d, s, id){
//     var js, fjs = d.getElementsByTagName(s)[0];
//     if (d.getElementById(id)) {return;}
//     js = d.createElement(s); js.id = id;
//     js.src = "//connect.facebook.net/en_US/sdk.js";
//     fjs.parentNode.insertBefore(js, fjs);
//   }(document, 'script', 'facebook-jssdk'));
//  
//      function login() {
//            FB.login(function(response) {
//    if (response.authResponse) {
//		            
//     
//     FB.api('/me?fields=name,email',function(responseFromFB) {
//		              var name = responseFromFB.name; 
//                      var email = responseFromFB.email;
//	  var datastr_fb={Name:name,Email:email};
//	  
//	  var datastr={USEREMAIL:email};
//	  jQuery.ajax({
//							url: '<?php echo base_url()?>email-ajax-check',
//							type: 'post',
//							data: datastr,
//							success: function(data)
//							{
//								if(data==='email-exsist')
//								{
//									   
//									    var fb_dash={user_login:email,Type:'fb'};
//												jQuery.ajax({
//												   url: '<?php echo base_url()?>user',
//												   type: 'post',
//												   data: fb_dash,
//												   success: function(data)
//												   {
//													    
//													   if(data===true || data!==0)
//													   {
//															 window.location.href='<?php echo base_url()?>user-dashboard';
//														   
//													   }
//													   else
//													   {
//														     window.location.href='<?php echo base_url()?>register';
//													   }
//												   }
//											   });
//								}
//								else
//								{
//										jQuery.ajax({
//										url: '<?php echo base_url()?>signup-fb',
//										type: 'post',
//										data: datastr_fb,
//										success: function(data)
//										{
//							jQuery.ajax({
//							url: '<?php echo base_url()?>email-ajax-check',
//							type: 'post',
//							data: datastr,
//							success: function(data)
//							{
//								if(data==='email-exsist')
//								{
//									   
//									    var fb_dash={user_login:email,Type:'fb'};
//												jQuery.ajax({
//												   url: '<?php echo base_url()?>user',
//												   type: 'post',
//												   data: fb_dash,
//												   success: function(data)
//												   {
//													    
//													   if(data===true || data!==0)
//													   {
//															 window.location.href='<?php echo base_url()?>user-dashboard';
//														   
//													   }
//													   else
//													   {
//														     window.location.href='<?php echo base_url()?>register';
//													   }
//												   }
//											   });
//								}
//						
//							}
//						});
//										}
//						          });
//								}
//							}
//						});
//				
//      
//     });
//    } else {
//              alert('User cancelled login or did not fully authorize.');
//           }
//});          
//        }
//
//        function logout() {
//            FB.logout(function(response) {
//              
//            });
//        }
		jQuery('#pg_deg').on('change', function() {
			   var pd=jQuery('#pg_deg').val();
			   if(pd!=="" || pd!=="")
			   {
					 jQuery("#pgi").prop('required',true);
					 jQuery("#pgy").prop('required',true);
					 jQuery("#pgm").prop('required',true);
				
			   }
			   else
			   {
				     jQuery("#pgi").prop('required',false);
					 jQuery("#pgy").prop('required',false);
					 jQuery("#pgm").prop('required',false);
			   }

          })
</script>
         
 <script type="text/javascript" src="http://platform.linkedin.com/in.js">
    api_key: 815zsyymhd45xe
    authorize: true
   
</script>

<script type="text/javascript">
     function liAuth(){
        IN.User.authorize(function(){
			getProfileData();
        });
    }
    // Setup an event listener to make an API call once auth is complete
    //function onLinkedInLoad() {
    //
    //    IN.Event.on(IN, "auth", getProfileData);
    //}

    // Handle the successful return from the API call
    function onSuccess(data) {
		//alert(data);
       
    }

    // Handle an error response from the API call
    function onError(error) {
       // alert(data);
    }

    // Use the API call wrapper to request the member's basic profile data
     function getProfileData(){
        IN.API.Profile("me").fields(["firstName","lastName", "email-address", "positions"]).result(function(data) {
            var profileData = data.values[0];
            var profileFName = profileData.firstName;
            var profileLName = profileData.lastName;
          //  alert(profileData.emailAddress);
          //  if(profileData.emailAddress !="" || profileData.emailAddress != undefined) {
				profileEName = profileData.emailAddress;
				      var datastr_linkendin={Name:profileData.firstName+' '+profileData.lastName,Email:profileData.emailAddress};
					  var datastr={USEREMAIL:profileEName};
	            jQuery.ajax({
							url: '<?php echo base_url()?>email-ajax-check',
							type: 'post',
							data: datastr,
							success: function(data)
							{
								if(data==='email-exsist')
								{
									    //alert(profileEName);
									   var link_dash={user_login:profileEName,Type:'linke'};
									 
												jQuery.ajax({
												   url: '<?php echo base_url()?>user',
												   type: 'post',
												   data: link_dash,
												   success: function(response)
												   {
													 
													 
													   if(response===true || response!==0)
													   {
															 window.location.href='<?php echo base_url()?>user-dashboard';
														   
													   }
													   else
													   {
														     window.location.href='<?php echo base_url()?>register';
													   }
												   }
											   });
								}
								else
								{
						jQuery.ajax({
						url: '<?php echo base_url()?>signup-linkendin',
						type: 'post',
						data: datastr_linkendin,
						success: function(data)
						{
							 var datastr_li={USEREMAIL:profileEName};
							jQuery.ajax({
							url: '<?php echo base_url()?>email-ajax-check',
							type: 'post',
							data: datastr_li,
							success: function(data)
							{
								if(data==='email-exsist')
								{
									    //alert(profileEName);
									   var link_dash={user_login:profileEName,Type:'linke'};
									 
												jQuery.ajax({
												   url: '<?php echo base_url()?>user',
												   type: 'post',
												   data: link_dash,
												   success: function(response)
												   {
													 
													 
													   if(response===true || response!==0)
													   {
															 window.location.href='<?php echo base_url()?>user-dashboard';
														   
													   }
													   else
													   {
														     window.location.href='<?php echo base_url()?>register';
													   }
												   }
											   });
								}
								
							}
						});
										}
						          });
								}
							}
						});
                
          //  }
          //  else {
              //  alert('Some Error Occured please try again!');
          //  }
         });
    }

</script>     

	  <?php if($this->session->flashdata('reg-sucess')!="" || $this->session->flashdata('reg-sucess')!=null){?>
                        <script>
                         
                           jQuery("#reg-success").fadeIn();
						   jQuery("#reg-success").fadeOut(7000);
                        </script>
        
        
                <?php }?>
 
	</div><a href="#" id="toTop" style="display:none;">
	<span id="toTopHover"></span>To Top</a>
</body>

</html>