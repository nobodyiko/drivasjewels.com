

<!DOCTYPE html>
<html lang="en">


<!-- molla/category.html  22 Nov 2019 10:02:48 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Driva's Jewels || Driva's Products</title>
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
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
</head>

<body>
    <div class="page-wrapper">

	<?php 
require('header.php');

if(!isset($_GET['id']) && $_GET['id']!=''){
	?>
	<script>
	window.location.href='index';
	</script>
	<?php
}

$cat_id=mysqli_real_escape_string($con,$_GET['id']);

$sub_categories='';
if(isset($_GET['sub_categories'])){
	$sub_categories=mysqli_real_escape_string($con,$_GET['sub_categories']);
}
$price_high_selected="";
$price_low_selected="";
$new_selected="";
$old_selected="";
$sort_order="";
if(isset($_GET['sort'])){
	$sort=mysqli_real_escape_string($con,$_GET['sort']);
	if($sort=="price_high"){
		$sort_order=" order by product.price desc ";
		$price_high_selected="selected";	
	}if($sort=="price_low"){
		$sort_order=" order by product.price asc ";
		$price_low_selected="selected";
	}if($sort=="new"){
		$sort_order=" order by product.id desc ";
		$new_selected="selected";
	}if($sort=="old"){
		$sort_order=" order by product.id asc ";
		$old_selected="selected";
	}

}

if($cat_id>0){
	$get_product=get_product($con,'',$cat_id,'','',$sort_order,'',$sub_categories);
}else{
	?>
	<script>
	window.location.href='index';
	</script>
	<?php
}	?>
        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Driva's Products<span>Shop</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
               
            </nav><!-- End .breadcrumb-nav -->
            <?php if(count($get_product)>0){?>
            <div class="page-content">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-9">
                			

                            <div class="products mb-3">
                                <div class="row justify-content-center">
                                <?php
										foreach($get_product as $list){
										    $product_id = $list['id'];
										    $review_count_query = mysqli_query($con, "SELECT COUNT(id) as total_reviews FROM product_review WHERE product_id = '$product_id' AND status = '1'");
    $review_count_data = mysqli_fetch_assoc($review_count_query);
    $total_reviews = $review_count_data['total_reviews'];
										?>
                                    <div class="col-6 col-md-4 col-lg-4">
                                        <div class="product product-7 text-center">
                                            <figure class="product-media">
                                               
                                                <a href="product?id=<?php echo $list['id']?>" target="_blank" style="background-image: url(<?php echo PRODUCT_IMAGE_SITE_PATH.$list['image']?>);height:275px;background-position:center;background-size:cover">
                                                    
                                                </a>

                                               <div class="product-action-vertical">
                                                    <a href="javascript:void(0)" onclick="wishlist_manage('<?php echo $list['id']?>','add')" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                                </div><!-- End .product-action-vertical -->

                                                <div class="product-action">
                                                    <a href="product.php?id=<?php echo $list['id']?>" class="btn-product btn-cart"><span>add to cart</span></a>
                                                </div><!-- End .product-action -->
                                            </figure><!-- End .product-media -->

                                            <div class="product-body">
                                                <div class="product-cat">
                                                    <a href="#"><?php echo $list['categories']?></a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="product?id=<?php echo $list['id']?>"><?php echo $list['name']?></a></h3><!-- End .product-title -->
                                                <div class="product-price">
                                                <?php echo $currencySymbol . number_format($list['price'] * $conversionRate); ?>
                                                </div><!-- End .product-price -->
                                                 <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: <?php echo ($total_reviews > 0) ? ($total_reviews / 5) * 100 : 0; ?>%;"></div>
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">(<?php echo $total_reviews; ?> review<?php echo ($total_reviews !== 1) ? 's' : ''; ?>)</span>
                                                </div><!-- End .rating-container -->


                                                
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product -->
                                    </div><!-- End .col-sm-6 col-lg-4 -->
                                    <?php } ?>
                                   
                                </div><!-- End .row -->
                            </div><!-- End .products -->
                		</div><!-- End .col-lg-9 -->
                		<aside class="col-lg-3 order-lg-first">
                			<div class="sidebar sidebar-shop">
                				<div class="widget widget-clean">
                					<label>Filters:</label>
                					<!-- <a href="#" class="sidebar-filter-clear">Clean All</a> -->
                				</div><!-- End .widget widget-clean -->

                				<select class="form-control" onchange="sort_product_drop('<?php echo $cat_id?>','<?php echo $sub_categories?>','<?php echo SITE_PATH?>')" id="sort_product_id">
                                        <option value="">Default softing</option>
                                        <option value="price_low" <?php echo $price_low_selected?>>Sort by Price Low To High</option>
                                        <option value="price_high" <?php echo $price_high_selected?>>Sort by Price High To Low</option>
                                        <option value="new" <?php echo $new_selected?>>Sort by New First</option>
										<option value="old" <?php echo $old_selected?>>Sort by Old First</option>
                                    </select>

        						
                			</div><!-- End .sidebar sidebar-shop -->
                		</aside><!-- End .col-lg-3 -->
                	</div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->
            <?php } else { 
						?>
						<center>
<img src="assets/images/coming-soon.jpg" style="height:600px;width:600px;">
</center>
						<?php
					} ?>
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

    <input type="hidden" id="qty" value="1"/>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wNumb.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    <script>
        function sort_product_drop(cat_id,sub_categories,site_path){
	var sort_product_id=jQuery('#sort_product_id').val();
	window.location.href=site_path+"categories?id="+cat_id+"&sub_categories="+sub_categories+"&sort="+sort_product_id;
}
    </script>
    <script>
function manage_cart(pid, type, is_checkout) {
    if (type == 'update') {
        var qty = jQuery("#" + pid + "qty").val();
    } else {
        var qty = jQuery("#qty").val();
    }
    jQuery.ajax({
        url: 'manage_cart.php',
        type: 'post',
        data: 'pid=' + pid + '&qty=' + qty + '&type=' + type,
        success: function (result) {
            result = result.trim();
                if (type == 'update' || type == 'remove') {
                    window.location.href = window.location.href;
                }
                if (result == 'not_available') {
                    alert('Qty not available');
                } else {
                    jQuery('.cart-count').html(result);
                    if (is_checkout == 'yes') {
                        window.location.href = 'checkout';
                    }
                
            }
        }
    });
}
</script>

    <script>
        function wishlist_manage(pid,type){
	jQuery.ajax({
		url:'wishlist_manage.php',
		type:'post',
		data:'pid='+pid+'&type='+type,
		success:function(result){
			result=result.trim();
			if(result=='not_login'){
				window.location.href='login';
			}else{
				jQuery('.wishlist-count').html(result);
			}
		}	
	});	
}
    </script>
</body>


<!-- molla/category.html  22 Nov 2019 10:02:52 GMT -->
</html>