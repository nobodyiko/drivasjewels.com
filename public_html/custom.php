<!DOCTYPE html>
<html lang="en">


<!-- molla/elements-product-category.html  22 Nov 2019 10:05:07 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Driva's Jewels || Custom Product</title>
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
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="page-wrapper">
        <?php 
        require('header.php');
        $res=mysqli_query($con,"select name,link,image from custom");
        $res1=mysqli_query($con,"select name,link,image from custom1");
        ?>

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Custom Product<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Custom Product</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                

                	<h2 class="title text-center mb-3">Men's Custom Product</h2><!-- End .title mb-2 -->

                	<div class="row justify-content-center">
                	       <?php
										while($row=mysqli_fetch_assoc($res)){
										?>
                		<div class="col-md-6 col-lg-4">
                			<div class="banner banner-cat">
	                			<a href="https://wa.me/919898253928/?text=<?php echo $row['link']?>" target="_blank">
	                				<img src="media/product/<?php echo $row['image']?>" alt="Banner" style=height:375px;>
	                			</a>

	                			<div class="banner-content banner-content-overlay text-center">
	                				<h3 class="banner-title"><?php echo $row['name']?></h3><!-- End .banner-title -->
	                				<a href="https://wa.me/919898253928/?text=<?php echo $row['link']?>" target="_blank" class="banner-link">Send Message</a>
	                			</div><!-- End .banner-content -->
                			</div><!-- End .banner -->
                		</div><!-- End .col-md-6 -->
                		 <?php } ?>
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
            <div class="page-content">
                <div class="container">
                

                	<h2 class="title text-center mb-3">Women's Custom Product</h2><!-- End .title mb-2 -->

                	<div class="row justify-content-center">
                	       <?php
										while($row=mysqli_fetch_assoc($res1)){
										?>
                		<div class="col-md-6 col-lg-4">
                			<div class="banner banner-cat">
	                			<a href="https://wa.me/919898253928/?text=<?php echo $row['link']?>" target="_blank">
	                				<img src="media/product/<?php echo $row['image']?>" alt="Banner" style=height:375px;>
	                			</a>

	                			<div class="banner-content banner-content-overlay text-center">
	                				<h3 class="banner-title"><?php echo $row['name']?></h3><!-- End .banner-title -->
	                				<a href="https://wa.me/919898253928/?text=<?php echo $row['link']?>" target="_blank" class="banner-link">Send Message</a>
	                			</div><!-- End .banner-content -->
                			</div><!-- End .banner -->
                		</div><!-- End .col-md-6 -->
                		 <?php } ?>
                	</div><!-- End .row -->
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


<!-- molla/elements-product-category.html  22 Nov 2019 10:05:14 GMT -->
</html>