<!DOCTYPE html>
<html lang="en">


<!-- molla/contact.html  22 Nov 2019 10:04:01 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Driva's Jewels || Contact Us</title>
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
    <?php require('header.php') ?>
    <?php $resSub_Banner_01=mysqli_query($con,"select * from all_banner where status='1' order by id asc"); ?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        
                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <?php while($rowSub_Banner=mysqli_fetch_assoc($resSub_Banner_01)){?>
            <div class="container">
	        	<div class="page-header page-header-big text-center" style="background-image: url('<?php echo BANNER_SITE_PATH.$rowSub_Banner['image']?>')">
        			<h1 class="page-title text-black">Contact us<span class="text-black">keep in touch with us</span></h1>
	        	</div><!-- End .page-header -->
            </div><!-- End .container -->
<?php } ?>
            <div class="page-content pb-0">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-6 mb-2 mb-lg-0">
                			<h2 class="title mb-1">Contact Information</h2><!-- End .title mb-2 -->
                			<p class="mb-3" style="text-align:justify">Have a question or need assistance? We're here to help. Feel free to reach out to our dedicated customer support team for any inquiries you may have. We value your feedback and are committed to providing a seamless and enjoyable shopping experience. Don't hesitate to get in touch with us. Your satisfaction is our first priority.</p>
                			<div class="row">
                				<div class="col-sm-7">
                					<div class="contact-info">
                						<h3>Our Office</h3>

                						<ul class="contact-list">
                							<li>
                								<i class="icon-map-marker"></i>
	                							FLAT NO 304, AMARDEEP APARTMENT,
	VARCHHA ROAD,SURAT,GUJARAT-395006

	                						</li>
                							<li>
                								<i class="icon-phone"></i>
                								<a href="tel:919898253928">+91 98982 53928</a>
                							</li>
                							<li>
                								<i class="icon-envelope"></i>
                								<a href="mailto:info@drivasjewels.com">info@drivasjewels.com</a>
                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-7 -->

                				<div class="col-sm-5">
                					<div class="contact-info">
                						<h3>The Office</h3>

                						<ul class="contact-list">
                							<li>
                								<i class="icon-clock-o"></i>
	                							<span class="text-dark">Monday-Saturday</span> <br>10am-6pm IST
	                						</li>
                							
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-5 -->
                			</div><!-- End .row -->
                		</div><!-- End .col-lg-6 -->
                		<div class="col-lg-6">
                			<h2 class="title mb-1">Got Any Questions?</h2><!-- End .title mb-2 -->
                			<p class="mb-2">Use the form below to get in touch with the sales team</p>

                			<form action="#" method="post"  class="contact-form mb-3">
                				<div class="row">
                					<div class="col-sm-6">
                                        <label for="name" class="sr-only">Name</label>
                						<input type="text" class="form-control" id="name" name="name" placeholder="Name *" required>
                					</div><!-- End .col-sm-6 -->

                					<div class="col-sm-6">
                                        <label for="email" class="sr-only">Email</label>
                						<input type="email" class="form-control" id="email" name="email" placeholder="Email *" required>
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                				<div class="row">
                					<div class="col-sm-6">
                                        <label for="mobile" class="sr-only">Phone</label>
                						<input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Phone *" required>
                					</div><!-- End .col-sm-6 -->

                					<div class="col-sm-6">
                                        <label for="message" class="sr-only">Subject</label>
                						
                                        <textarea name="message" id="message" class="form-control" placeholder="Your Subject *" required></textarea>
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                               

                				<button type="button" onclick="send_message()" class="btn btn-outline-primary-2 btn-minwidth-sm">
                					<span>SUBMIT</span>
            						<i class="icon-long-arrow-right"></i>
                				</button>
                			</form><!-- End .contact-form -->
                            <div class="form-output">
                                <p class="form-messege"></p>
                            </div>
                		</div><!-- End .col-lg-6 -->
                	</div><!-- End .row -->

                	<hr class="mt-4 mb-5">

                	
                </div><!-- End .container -->
            	
            </div><!-- End .page-content -->
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


    <!-- Google Map -->
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="custom.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        function send_message(){
	var name=jQuery("#name").val();
	var email=jQuery("#email").val();
	var mobile=jQuery("#mobile").val();
	var message=jQuery("#message").val();
	
	if(name==""){
		alert('Please enter name');
	}else if(email==""){
		alert('Please enter email');
	}else if(mobile==""){
		alert('Please enter mobile');
	}else if(message==""){
		alert('Please enter message');
	}else{
		jQuery.ajax({
			url:'send_message.php',
			type:'post',
			data:'name='+name+'&email='+email+'&mobile='+mobile+'&message='+message,
			success:function(result){
				location.reload(result);
			}	
		});
	}
}
    </script>
</body>


<!-- molla/contact.html  22 Nov 2019 10:04:03 GMT -->
</html>