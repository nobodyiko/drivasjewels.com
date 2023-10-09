<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- molla/about.html  22 Nov 2019 10:03:51 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Driva's Jewels || Shipping & Delivery Policy</title>
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
                       
                        <li class="breadcrumb-item active" aria-current="page">Shipping & Delivery Policy</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="container">
	        	<div class="page-header page-header-big text-center" style="background-image: url('assets/images/bracelet-banner-3-1024x513.png')">
        			<h1 class="page-title text-white">Shipping & Delivery Policy<span class="text-white">Driva's Jewels</span></h1>
	        	</div><!-- End .page-header -->
            </div><!-- End .container -->

            <div class="page-content pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb-3 mb-lg-0">
                            
                           <p>https://drivasjewels.com/ is committed to excellence, and the full satisfaction of our customers.
https://drivasjewels.com/ proudly offers shipping services. Be assured we are doing everything in our
power to get your order to you as soon as possible. Please consider any holidays that might impact
delivery times. https://drivasjewels.com/ also offers same day dispatch.

<br><br>
<h5>SHIPPING:</h5> All orders for our products are processed and shipped out in 4-10 business days. Orders are not
shipped or delivered on weekends or holidays. If we are experiencing a high volume of orders,
shipments may be delayed by a few days. Please allow additional days in transit for delivery. If there
will be a significant delay in the shipment of your order, we will contact you via email.

<br><br>
<h5>WRONG ADDRESS DISCLAIMER:</h5> It is the responsibility of the customers to make sure that the shipping address entered is correct.
We do our best to speed up processing and shipping time, so there is always a small window to
correct an incorrect shipping address. Please contact us immediately if you believe you have
provided an incorrect shipping address.


<br><br>
<h5> UNDELIVERABLE ORDERS:</h5> Orders that are returned to us as undeliverable because of incorrect shipping information are
subject to a restocking fee to be determined by us.



<br><br>
<h5>RETURN REQUEST DAYS:</h5> https://drivasjewels.com/ allows you to return its item (s) within a period of 15 days. Kindly be
advised that the item (s) should be returned unopened and unused.




<br><br>
<h5>ACCEPTANCE:</h5> By accessing our site and placing an order you have willingly accepted the terms of this Shipping
Policy.


<br><br>
<h5>Contact Us:</h5> If you have any questions or concerns regarding our Shipping & Delivery policy or the handling of your personal information, please contact us at <a href="mailto:info@drivasjewels.com">Info@drivasjewels.com</a> .

By using our website, you consent to the terms of this privacy policy and the collection, use, and storage of your personal information as described herein.

</p>
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