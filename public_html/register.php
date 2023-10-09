<!DOCTYPE html>
<html lang="en">


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Driva's Jewels || Register Now</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="logo12.png">
    <link rel="icon" type="image/png" sizes="32x32" href="logo12.png">
    <link rel="icon" type="image/png" sizes="16x16" href="logo12.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="logo12.png">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="page-wrapper">
    <?php require('header.php') 
	

	?>
<style>
    .error-border{
        border-color:red;
    }
    .field_error{
        color:red;
    }
</style>
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        
                        <li class="breadcrumb-item active" aria-current="page">Register</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17" style="background-image: url('assets/images/register.webp')">
            	<div class="container">
            		<div class="form-box">
            			<div class="form-tab">
	            			<ul class="nav nav-pills nav-fill" role="tablist">
							    
							    <li class="nav-item">
							        <a class="nav-link active" id="register-tab-2" data-toggle="tab" href="#register-2" role="tab" aria-controls="register-2" aria-selected="true">Register</a>
							    </li>
							</ul>
							<div class="tab-content">
							    <style>
							        .email_verify_otp{
							            display:none;
							        }
							    </style>
							    <div class="tab-pane fade show active" id="register-2" role="tabpanel" aria-labelledby="register-tab-2">
							    	<form id="register-form" method="post">
							    		<div class="form-group">
							    			<label for="name">Your Full Name *</label>
							    			<input type="text" class="form-control" name="name" id="name" required>
							    			<span class="field_error" id="name_error"></span>
							    		</div><!-- End .form-group -->
							    		<div class="form-group">
							    			<label for="register-email-2">Your email address *</label>
							    			<div class="row">
							    			<input type="email" class="form-control" name="email" style="width:70%;" id="email" required>
							    			<button type="button" class="btn btn-outline-primary-2 email_sent_otp" style="width:30%;" onclick="email_sent_otp()">
			                					Send OTP
			                				</button></div>
			                				<br>
							    			<div class="row">
							    			<input type="text" class="email_verify_otp form-control" style="width:70%;" id="email_otp" required>
							    			<button type="button" class="btn btn-outline-primary-2 email_verify_otp" style="width:30%;" onclick="email_verify_otp()">
			                					Verify OTP
			                				</button></div>
			                				<span id="email_otp_result"></span>
			                					<span class="field_error" id="email_error"></span>
							    		</div><!-- End .form-group -->
							    	
                                        <div class="form-group">
							    			<label for="name">Your Mobile Number *</label>
							    			<input type="text" class="form-control" name="mobile" id="mobile" required>
                                            <span class="field_error" id="mobile_error"></span>
							    		</div><!-- End .form-group -->
							    		<div class="form-group">
							    			<label for="register-password-2">Your Password *</label>
							    			<input type="password" class="form-control" name="password" id="password" required>
                                            <span class="field_error" id="password_error"></span>
							    		</div><!-- End .form-group -->
							    		<div class="form-group">
    <label for="confirm-password">Confirm Password *</label>
    <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
    <span class="field_error" id="confirm_password_error"></span>
</div><!-- End .form-group -->
                                        
							    		<div class="form-footer">
							    			<button type="button" class="btn btn-outline-primary-2" onclick="user_register()" id="btn_register" >
			                					<span>SIGN UP</span>
			            						<i class="icon-long-arrow-right"></i>
			                				</button>
                                            <div class="form-output register_msg">
									<p class="form-messege field_error"></p>
								</div>

			                				
											
							    		</div><!-- End .form-footer -->
										
							    	</form>
									<p class="text-center">Already Have An Account ? <a href="login">Login Now</a></p>
									<br>
                                    
							    	
							    </div><!-- .End .tab-pane -->
							</div><!-- End .tab-content -->
						</div><!-- End .form-tab -->
            		</div><!-- End .form-box -->
            	</div><!-- End .container -->
            </div><!-- End .login-page section-bg -->
            <script>
               	function email_sent_otp(){
			jQuery('#email_error').html('');
			var email=jQuery('#email').val();
			if(email==''){
				jQuery('#email_error').html('Please enter email id');
			}else{
				jQuery('.email_sent_otp').html('Please wait..');
				jQuery('.email_sent_otp').attr('disabled',true);
				jQuery.ajax({
					url:'send_otp.php',
					type:'post',
					data:'email='+email+'&type=email',
					success:function(result){
						if(result=='done'){
							jQuery('#email').attr('disabled',true);
							jQuery('.email_verify_otp').show();
							jQuery('.email_sent_otp').hide();
							
						}else if(result=='email_present'){
							jQuery('.email_sent_otp').html('Send OTP');
							jQuery('.email_sent_otp').attr('disabled',false);
							jQuery('#email_error').html('Email id already exists');
						}else{
							jQuery('.email_sent_otp').html('Send OTP');
							jQuery('.email_sent_otp').attr('disabled',false);
							jQuery('#email_error').html('Please try after sometime');
						}
					}
				});
			}
		}
		function email_verify_otp(){
			jQuery('#email_error').html('');
			var email_otp=jQuery('#email_otp').val();
			if(email_otp==''){
				jQuery('#email_error').html('Please enter OTP');
			}else{
				jQuery.ajax({
					url:'check_otp.php',
					type:'post',
					data:'otp='+email_otp+'&type=email',
					success:function(result){
						if(result=='done'){
							jQuery('.email_verify_otp').hide();
							jQuery('#email_otp_result').html('Email id verified');
						    jQuery("#is_email_verified").val("1");
						}else{
							jQuery('#email_error').html('Please enter valid OTP');
						}
					}
					
				});
			}
		}
            </script>
        </main><!-- End .main -->

              <?php require('footer.php') ?>
    </div><!-- End .page-wrapper -->
      <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            
                            <form action="search" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="str" id="q" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>
            
            
          <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="index">Home</a>
                    </li>
                   
                         <?php
										foreach($cat_arr as $list){
											?>
                         <li><a href="categories?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a>
                        	<?php
											$cat_id=$list['id'];
											$sub_cat_res=mysqli_query($con,"select * from sub_categories where status='1' and categories_id='$cat_id'");
											if(mysqli_num_rows($sub_cat_res)>0){
											?>
											
                        <ul>
                            <?php
													while($sub_cat_rows=mysqli_fetch_assoc($sub_cat_res)){
                            echo '<li><a href="categories?id='.$list['id'].'&sub_categories='.$sub_cat_rows['id'].'">'.$sub_cat_rows['sub_categories'].'</a></li>';
													}
													?>
                        </ul>
                        	<?php } ?>
                    </li>
                    	<?php
										}
										?>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="https://m.facebook.com/people/Drivas-Jewels/61550599555800/" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="https://www.instagram.com/drivasjewels/" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->
  <input type="hidden" id="is_email_verified" value="0"/>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="custom.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        function user_register(){
	jQuery('.field_error').html('');
	jQuery('.error-border').removeClass("error-border");
	var name=jQuery("#name").val();
	var email=jQuery("#email").val();
	var mobile=jQuery("#mobile").val();
	var password=jQuery("#password").val();
	var confirm_password = jQuery("#confirm_password").val();
	var is_email_verified = jQuery("#is_email_verified").val();
	var is_error='';
	if(name==""){
		jQuery('#name_error').html('Please enter name');
		jQuery("#name").addClass("error-border");
		is_error='yes';
	}if(email==""){
		jQuery('#email_error').html('Please enter email');
		jQuery("#email").addClass("error-border");
		is_error='yes';
	}if(mobile==""){
		jQuery('#mobile_error').html('Please enter mobile');
		jQuery("#mobile").addClass("error-border");
		is_error='yes';
	}if(password==""){
		jQuery('#password_error').html('Please enter password');
		jQuery("#password").addClass("error-border");
		is_error='yes';
	}
	if (confirm_password == "") {
            jQuery('#confirm_password_error').html('Please confirm password');
            jQuery("#confirm_password").addClass("error-border");
            is_error = 'yes';
        }

        if (password != confirm_password) {
            jQuery('#confirm_password_error').html('Passwords do not match');
            jQuery("#confirm_password").addClass("error-border");
            is_error = 'yes';
        }
         if (is_email_verified === '0') {
        // Check if the email is not verified
        jQuery('#email_error').html('Email is not verified');
        jQuery("#email").addClass("error-border");
        is_error = 'yes';
    }
	if(is_error==''){
		jQuery.ajax({
			url:'register_submit.php',
			type:'post',
			data:'name='+name+'&email='+email+'&mobile='+mobile+'&password='+password,
			success:function(result){
				if(result=='email_present'){
					jQuery('#email_error').html('Email id already present');
				}
				if(result=='valid'){
					window.location.href='login';
				}
			}	
		});
	}
	
}
    </script>

</body>


<!-- molla/login.html  22 Nov 2019 10:04:03 GMT -->
</html>