<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- molla/about.html  22 Nov 2019 10:03:51 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Driva's Jewels || Privacy Policy</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/logo12.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/logo12.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/logo12.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/logo12.png">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="page-wrapper">
    <?php require('header.php') ?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                       
                        <li class="breadcrumb-item active" aria-current="page">Privacy Policy</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="container">
	        	<div class="page-header page-header-big text-center" style="background-image: url('assets/images/bracelet-banner-3-1024x513.png')">
        			<h1 class="page-title text-white">Privacy Policy<span class="text-white">Driva's Jewels</span></h1>
	        	</div><!-- End .page-header -->
            </div><!-- End .container -->

            <div class="page-content pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb-3 mb-lg-0">
                            
                          <p style="text-align:justify;">
                              <p>At Drivas Jewels, we value your privacy and are committed to protecting your personal information. This privacy policy outlines how we collect, use, and safeguard your data when you visit our diamond jewelry ecommerce website.

<br><br>
Information Collection: We collect personal information such as your name, contact details, and payment information solely for the purpose of processing your orders and providing you with a seamless shopping experience. We may also collect non-personal information such as website usage data to enhance our services.

<br><br>
Data Usage: Your personal information is used to fulfill your orders, process payments, and communicate with you regarding your purchases. We may also use your data to improve our website, personalize your experience, and send you promotional offers if you have opted to receive them. Rest assured, we do not share your information with third parties for marketing purposes without your consent.

<br><br>
Data Security: We employ industry-standard security measures to protect your data from unauthorized access, alteration, or disclosure. Your payment information is encrypted using secure socket layer technology (SSL) during transmission, and we store it in a secure environment with restricted access.

<br><br>
Cookies and Tracking: Our website uses cookies and similar tracking technologies to enhance your browsing experience and gather information about your preferences. These technologies help us analyze website traffic, customize content, and deliver targeted advertisements. You have the option to disable cookies through your browser settings, but please note that it may affect certain functionalities of our website.

<br><br>
Third-Party Links: Our website may contain links to third-party websites. Please note that we are not responsible for the privacy practices or content of these websites. We encourage you to review their privacy policies before providing any personal information.

<br><br>
Data Retention: We retain your personal information for as long as necessary to fulfill the purposes outlined in this privacy policy, unless a longer retention period is required by law.

<br><br>
Your Rights: You have the right to access, update, and delete your personal information. If you wish to exercise these rights or have any concerns about your privacy, please contact us using the information provided below.

<br><br>
Updates to the Policy: We may update this privacy policy from time to time to reflect changes in our practices or legal requirements. We encourage you to review this policy periodically for any updates.




                          </p>
                            <br><p style="text-align:justify;">If you have any questions about these Refund Policy, please contact us at <i class="icon-envelope"></i>
                								<a href="mailto:info@drivasjewels.com">info@drivasjewels.com</a></p>
                        </div><!-- End .col-lg-6 -->
                        
                        
                    </div><!-- End .row -->

                    <div class="mb-5"></div><!-- End .mb-4 -->
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



    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/about.html  22 Nov 2019 10:03:54 GMT -->
</html>