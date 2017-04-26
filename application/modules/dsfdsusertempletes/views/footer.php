  <?php  $base_url=base_url().'admin_assets/';?>
	<?php 
	//  $rt=str_replace('}','',str_replace('{','',str_replace(']','',str_replace('[','',json_encode($all_degree)))));

?>
  <style>

.success-toast {
  background-color: #3c763d;
    border-color: #d6e9c6;
    border-radius: 2px;
    bottom: 10px;
    box-shadow: 0 0 24px -1px rgb(56, 56, 56);
    color: #dff0d8;
    font-family: Calibri;
    font-size: 15px;
    height: auto;
    left: 90%;
    margin-bottom: 1163px;
    margin-left: -148px;
   
    padding: 10px;
    position: absolute;
    text-align: center;
    
    width: 295px;
}
.error-toast{
	 background-color: #C4051C;
    border-color: #d6e9c6;
    border-radius: 2px;
    bottom: 10px;
    box-shadow: 0 0 24px -1px rgb(56, 56, 56);
    color: #dff0d8;
    font-family: Calibri;
    font-size: 15px;
    height: auto;
    left: 90%;
    margin-bottom: 1163px;
    margin-left: -148px;
   
    padding: 10px;
    position: absolute;
    text-align: center;
    
    width: 295px;
}
  </style>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2017 <a href="http://mondaymorning.co.in">Monday Moning</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo $base_url?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo $base_url?>bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!--<script src="<?php echo $base_url?>https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>-->
<script src="<?php echo $base_url?>plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $base_url?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo $base_url?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo $base_url?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo $base_url?>plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo $base_url?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo $base_url?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo $base_url?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo $base_url?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo $base_url?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $base_url?>dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
 <script type="text/javascript" src="http://platform.linkedin.com/in.js">
    api_key: 815zsyymhd45xe
    authorize: true
   
</script>

<script type="text/javascript">
	 function lilogout(){
       IN.User.logout();
    }
</script>

<script>
    $('#father_name').editable({
    type: 'text',
    pk: 1,
    url: '<?php echo base_url()?>edit-ajax-user',
    title: 'Edit Father Name',
	
});
  
    $('#dob').editable({
        format: 'yyyy-mm-dd',    
        viewformat: 'dd/mm/yyyy',
        datetimepicker: {
           todayBtn: 'linked',
           weekStart: 1
        },
			url: '<?php echo base_url()?>edit-ajax-user',
       title: 'Date of birth',
    });  
 $('#permanent_addr').editable({
    type: 'text',
    pk: 2,
    url: '<?php echo base_url()?>edit-ajax-user',
    title: 'Edit Permanent Address',
	
});
  $('#present_addr').editable({
    type: 'text',
    pk: 2,
    url: '<?php echo base_url()?>edit-ajax-user',
    title: 'Edit Present Address',
	
});
  $('#contact_number').editable({
    type: 'text',
    pk: 3,
    url: '<?php echo base_url()?>edit-ajax-user',
    title: 'Edit Contact Number',
	
});
	 $('#current_org_name').editable({
    type: 'text',
    pk: 3,
    url: '<?php echo base_url()?>edit-ajax-user',
    title: 'Edit Current Organisation Name',
	
});
	  $('#time_period').editable({
    type: 'text',
    pk: 3,
    url: '<?php echo base_url()?>edit-ajax-user',
    title: 'Edit Time Period',
	
});
	 $('#location').editable({
    type: 'text',
    pk: 3,
    url: '<?php echo base_url()?>edit-ajax-user',
    title: 'Edit Location',
	
});
	  $('#curr_designation').editable({
    type: 'text',
    pk: 3,
    url: '<?php echo base_url()?>edit-ajax-user',
    title: 'Edit Location',
	
});
	 
	 


//    var degree = [];
//    $.each({<?php echo $rt?>}, function(k, v) {
//        degree.push({id: k, text: v});
//    }); 
//    $('#high_q').editable({
//			  type:'select',
//        source: degree,
//        
//    });
// 
       
     
      jQuery("#s_img").change(function() {

    var val = jQuery(this).val();

    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
        case 'jpg': case 'png':
           
               

        var reader = new FileReader();
                    reader.onload = function (e) {
                        jQuery("#img_pre").attr("src", e.target.result);
                    }
                    reader.readAsDataURL(jQuery(this)[0].files[0]);

        reader.readAsDataURL(input.files[0]);
            break;
        default:
            jQuery(this).val('');
            // error message here
             alert('Use can use only jpg,png');
            break;
    }
});
          jQuery("#s_img_caf").change(function() {

    var val = jQuery(this).val();

    switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
        case 'jpg': case 'png':
           
               

        var reader = new FileReader();
                    reader.onload = function (e) {
                        jQuery("#img_pre_caf").attr("src", e.target.result);
                    }
                    reader.readAsDataURL(jQuery(this)[0].files[0]);

        reader.readAsDataURL(input.files[0]);
            break;
        default:
            jQuery(this).val('');
            // error message here
             alert('Use can use only jpg,png');
            break;
    }
});  
     </script>
      <script>
		      $("#country").change(function() {
                                      var counid= $('#country').val();
									  datastr={Country_id:counid};
								 	$.ajax({
												   url: '<?php echo base_url()?>fill-state-dd',
												   type: 'post',
												   data: datastr,
												   success: function(response)
												   {
													 
													$("#state").html(response);
												
												   }
											   });

   
								});
			    $("#state").change(function() {
                                      var stateid= $('#state').val();
									  datastr={State_id:stateid};
								 	$.ajax({
												   url: '<?php echo base_url()?>fill-city-dd',
												   type: 'post',
												   data: datastr,
												   success: function(response)
												   {
													 
													$("#city").html(response);
												
												   }
											   });

   
								});
		  $("#country_caf").change(function() {
                                      var counid= $('#country_caf').val();
									  datastr={Country_id:counid};
								 	$.ajax({
												   url: '<?php echo base_url()?>fill-state-dd',
												   type: 'post',
												   data: datastr,
												   success: function(response)
												   {
													 
													$("#state").html(response);
												
												   }
											   });

   
								});
			    $("#state_caf").change(function() {
                    var stateid= $('#state_caf').val();
										datastr={State_id:stateid};
								 	$.ajax({
												   url: '<?php echo base_url()?>fill-city-dd',
												   type: 'post',
												   data: datastr,
												   success: function(response)
												   {
													 
													$("#city_caf").html(response);
												
												   }
											   });

   
								});
    $("#contactnumber").keypress(function (event) {
		
        // Allow: backspace, delete, tab, escape, enter and .
      
        // Ensure that it is a number and stop the keypress
         var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
		alert('Write only the numbers');
        return false;
    } else {
        return true;
    }
    });
		$("#contactnumber_caf").keypress(function (event) {
		
        // Allow: backspace, delete, tab, escape, enter and .
      
        // Ensure that it is a number and stop the keypress
         var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
		alert('Write only the numbers');
        return false;
    } else {
        return true;
    }
    });
		$("#contactnumber_caf_eme").keypress(function (event) {
		
        // Allow: backspace, delete, tab, escape, enter and .
      
        // Ensure that it is a number and stop the keypress
         var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
		alert('Write only the numbers');
        return false;
    } else {
        return true;
    }
    });
	$('#pg_deg').on('change', function() {
		
			   var pd=$('#pg_deg').val();
			   if(pd!=="" || pd!=="")
			   {
					 $("#pgi").prop('required',true);
					 $("#pgy").prop('required',true);
					 $("#pgm").prop('required',true);
				
			   }
			   else
			   {
				     $("#pgi").prop('required',false);
					 $("#pgy").prop('required',false);
					 $("#pgm").prop('required',false);
			   }

          });
		$('#org1').keypress(function (event) {
		
			   var org1=$('#org1').val();
			   if(org1!=="" || org1!=="")
			   {
					 $("#desig1").prop('required',true);
					 $("#emp1from").prop('required',true);
					 $("#emp1to").prop('required',true);
					 $("#ctcj1").prop('required',true);
					 $("#ctcl1").prop('required',true);
					 $("#rea1").prop('required',true);

					 
					 
				
			   }
			   else
			   {
				    $("#desig1").prop('required',false);
					 $("#emp1from").prop('required',false);
					 $("#emp1to").prop('required',false);
					 $("#ctcj1").prop('required',false);
					 $("#ctcl1").prop('required',false);
					 $("#rea1").prop('required',false);
			   }

          });
		$('#org2').keypress(function (event) {
		
			   var org2=$('#org2').val();
			   if(org2!=="" || org2!=="")
			   {
					 $("#desig2").prop('required',true);
					 $("#emp2from").prop('required',true);
					 $("#emp2to").prop('required',true);
					 $("#ctcj2").prop('required',true);
					 $("#ctcl2").prop('required',true);
					 $("#rea2").prop('required',true);

					 
					 
				
			   }
			   else
			   {
				    $("#desig2").prop('required',false);
					 $("#emp2from").prop('required',false);
					 $("#emp2to").prop('required',false);
					 $("#ctcj2").prop('required',false);
					 $("#ctcl2").prop('required',false);
					 $("#rea2").prop('required',false);
			   }

          });
		$('#org3').keypress(function (event) {
		
			   var org3=$('#org3').val();
			   if(org3!=="" || org3!=="")
			   {
					 $("#desig3").prop('required',true);
					 $("#emp3from").prop('required',true);
					 $("#emp3to").prop('required',true);
					 $("#ctcj3").prop('required',true);
					 $("#ctcl3").prop('required',true);
					 $("#rea3").prop('required',true);
			   }
			   else
			   {
				    $("#desig3").prop('required',false);
					 $("#emp3from").prop('required',false);
					 $("#emp3to").prop('required',false);
					 $("#ctcj3").prop('required',false);
					 $("#ctcl3").prop('required',false);
					 $("#rea3").prop('required',false);
			   }

          });
		$('#ref1').keypress(function (event) {
		
			   var ref1=$('#ref1').val();
			   if(ref1!=="" || ref1!=="")
			   {
					 $("#ref1_add").prop('required',true);
					 $("#ref1_occu").prop('required',true);
					 $("#ref1_tel").prop('required',true);
					
			   }
			   else
			   {
				    $("#ref1_add").prop('required',false);
					 $("#ref1_occu").prop('required',false);
					 $("#ref1_tel").prop('required',false);
					 
			   }

          });
		$('#ref2').keypress(function (event) {
		
			   var ref2=$('#ref2').val();
			   if(ref2!=="" || ref2!=="")
			   {
					 $("#ref2_add").prop('required',true);
					 $("#ref2_occu").prop('required',true);
					 $("#ref2_tel").prop('required',true);
					
			   }
			   else
			   {
				    $("#ref2_add").prop('required',false);
					 $("#ref2_occu").prop('required',false);
					 $("#ref2_tel").prop('required',false);
					 
			   }

          });
				$("#ref1_tel").keypress(function (event) {
		
        // Allow: backspace, delete, tab, escape, enter and .
      
        // Ensure that it is a number and stop the keypress
         var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
		alert('Write only the numbers');
        return false;
    } else {
        return true;
    }
    });
				$("#ref2_tel").keypress(function (event) {
		
        // Allow: backspace, delete, tab, escape, enter and .
      
        // Ensure that it is a number and stop the keypress
         var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
		alert('Write only the numbers');
        return false;
    } else {
        return true;
    }
    });
				$("#faage").keypress(function (event) {
		
        // Allow: backspace, delete, tab, escape, enter and .
      
        // Ensure that it is a number and stop the keypress
         var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
		alert('Write only the numbers');
        return false;
    } else {
        return true;
    }
    });
				$("#moage").keypress(function (event) {
		     
        // Allow: backspace, delete, tab, escape, enter and .
      
        // Ensure that it is a number and stop the keypress
         var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
		alert('Write only the numbers');
        return false;
    } else {
        return true;
    }
    });
				$("#spage").keypress(function (event) {
		var spage=$('#spage').val();
			   if(spage!=="" || spage!=="")
			   {
					 $("#spname").prop('required',true);
					 $("#spoc").prop('required',true);
					
					
			   }
			   else
			   {
				    $("#spname").prop('required',false);
					 $("#spoc").prop('required',false);
					
					 
			   }
        // Allow: backspace, delete, tab, escape, enter and .
      
        // Ensure that it is a number and stop the keypress
         var key = window.event ? event.keyCode : event.which;
    if (event.keyCode === 8 || event.keyCode === 46) {
        return true;
    } else if ( key < 48 || key > 57 ) {
		alert('Write only the numbers');
        return false;
    } else {
        return true;
    }
    });
	  </script>

	 <?php if($this->session->flashdata('sucess')!="" || $this->session->flashdata('sucess')!=null) { ?>
	               <div class='success-toast' style='display:none'>
					<span style="float: left"> Success !</span>
					<br>
				  <p style="float: left"> <?php echo $this->session->flashdata('sucess')?></p>
				   </div>
                        <script>
							
                           $('.success-toast').stop().fadeIn(400).delay(3000).fadeOut(400); //fade out after 3 seconds
                        </script>
        
        
                <?php }?>
								 <?php if($this->session->flashdata('error')!="" || $this->session->flashdata('error')!=null) { ?>
	               <div class='error-toast' style='display:none'>
					<span style="float: left"> Error !</span>
					<br>
				  <p style="float: left"> <?php echo $this->session->flashdata('error')?></p>
				   </div>
                        <script>
							
                           $('.error-toast').stop().fadeIn(400).delay(3000).fadeOut(400); //fade out after 3 seconds
                        </script>
        
        
                <?php }?>
								
	

</body>
</html>
