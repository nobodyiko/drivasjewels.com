<!DOCTYPE html>
<html lang="en">


<!-- molla/product.html  22 Nov 2019 09:54:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Driva's Jewels || Driva's Products Details</title>
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
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
</head>

<body>
    <div class="page-wrapper">
    <?php 
require('header.php');
if(isset($_GET['id'])){
	$product_id=mysqli_real_escape_string($con,$_GET['id']);
	if($product_id>0){
		$get_product=get_product($con,'','',$product_id);
	}else{
		?>
		<script>
		window.location.href='index';
		</script>
		<?php
	}
    $resAttr=mysqli_query($con,"select product_attributes.*,color_master.color,size_master.size from product_attributes 
	left join color_master on product_attributes.color_id=color_master.id and color_master.status=1 
	left join size_master on product_attributes.size_id=size_master.id and size_master.status=1
	where product_attributes.product_id='$product_id'");
	$productAttr=[];
	$colorArr=[];
	$sizeArr=[];
	if(mysqli_num_rows($resAttr)>0){
		while($rowAttr=mysqli_fetch_assoc($resAttr)){
		$productAttr[]=$rowAttr;
			$colorArr[$rowAttr['color_id']][]=$rowAttr['color'];
			$sizeArr[$rowAttr['size_id']][]=$rowAttr['size'];
			
			$colorArr1[]=$rowAttr['color'];
			$sizeArr1[]=$rowAttr['size'];
		}
	}
	
	$is_size=count(array_filter($sizeArr1));
	$is_color=count(array_filter($colorArr1));
	//$colorArr=array_unique($colorArr);
	$sizeArr=array_unique($sizeArr);
}else{
	?>
	<script>
	window.location.href='index';
	</script>
	<?php
}
if(isset($_POST['review_submit'])){
	$rating=get_safe_value($con,$_POST['rating']);
	$review=get_safe_value($con,$_POST['review']);
	
	$added_on=date('Y-m-d h:i:s');
	mysqli_query($con,"insert into product_review(product_id,user_id,rating,review,status,added_on) values('$product_id','".$_SESSION['USER_ID']."','$rating','$review','1','$added_on')");
	header('location:product?id='.$product_id);
	die();
}
$product_review_res=mysqli_query($con,"select users.name,product_review.id,product_review.rating,product_review.review,product_review.added_on from users,product_review where product_review.status=1 and product_review.user_id=users.id and product_review.product_id='$product_id' order by product_review.added_on desc");

// Count the number of reviews for the current product
$review_count_query = mysqli_query($con, "SELECT COUNT(id) as total_reviews FROM product_review WHERE product_id = '$product_id' AND status = '1'");
$review_count_data = mysqli_fetch_assoc($review_count_query);
$total_reviews = $review_count_data['total_reviews'];

$size_query = mysqli_query($con, "SELECT size_id, size_name, size_price FROM product_sizes WHERE product_id = '$product_id'");
$sizes = array();

while ($size_row = mysqli_fetch_assoc($size_query)) {
    $sizes[] = $size_row;
}
?>

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="categories.php?id=<?php echo $get_product['0']['categories_id']?>"><?php echo $get_product['0']['categories']?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $get_product['0']['name']?></li>
                    </ol>

                   
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="product-details-top">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-gallery product-gallery-vertical">
                                    <div class="row">
                                        <figure class="product-main-image">
                                            <img id="product-zoom" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" data-zoom-image="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" alt="product image">

                                            <!-- <a href="<?php echo PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']?>" id="btn-product-gallery" class="btn-product-gallery">
                                                <i class="icon-arrows"></i>
                                            </a> -->
                                        </figure><!-- End .product-main-image -->

                                       
                                    </div><!-- End .row -->
                                </div><!-- End .product-gallery -->
                            </div><!-- End .col-md-6 -->

                            <div class="col-md-6">
                                <div class="product-details">
                                    <h1 class="product-title"><?php echo $get_product['0']['name']?></h1><!-- End .product-title -->

                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                        </div><!-- End .ratings -->
                                        <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
                                    </div><!-- End .rating-container -->

                                    <div class="product-price">
                                   <?php echo $currencySymbol . number_format($get_product['0']['price'] * $conversionRate); ?>
                                    </div><!-- End .product-price -->

                                    <div class="product-content" >
                                        <p><?php echo $get_product['0']['short_desc']?></p>
                                    </div><!-- End .product-content -->
                                    <?php if($is_color>0){?>
                                     <div class="details-filter-row details-row-size">
                                        <label>Color:</label>

                                        <div class="product-nav product-nav-thumbs">
                                          <?php 
foreach($colorArr as $key=>$val){
    echo "<a href='javascript:void(0)' onclick=loadAttr('".$key."','".$get_product['0']['id']."','color')><img src='".PRODUCT_IMAGE_SITE_PATH.$get_product['0']['image']."'><br></a>";
}
?>

                                        </div>
                                    </div>
                                   <?php } ?>

                                   
                                        <?php if($is_size>0){?>
                                        <div class="details-filter-row details-row-size">
                                            <label for="size">Varient:</label>
                                            <div class="select-custom">
                                                <select class="form-control" id="size_attr" onchange="showQty()">
                                                    <option selected="selected" disabled>Select a Varient</option>
                                                   <?php 
											foreach($sizeArr as $key=>$val){
												echo "<option value='".$key."'>".$val[0]."</option>";
											}
											?>
                                                </select>
                                            </div><!-- End .select-custom -->
                                        </div><!-- End .details-filter-row -->
                                        <?php } ?>
<style>
    .hide{
        display:none;
    }
</style>
                                    <div class="details-filter-row details-row-size">
                                        <label for="qty">Qty:</label>
                                        <div class="product-details-quantity">
                                            <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                        </div><!-- End .product-details-quantity -->
                                    </div><!-- End .details-filter-row -->
<?php
									$isQtyHide="hide";
									if($is_color==0 && $is_size==0){
										$isQtyHide="";
									}
									?>

                                    <div class="product-details-action <?php echo $isQtyHide?>" id="cart_qty">
    <a href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['0']['id']?>','add')" class="btn-product btn-cart" style="margin-right:10px;"><span>Add to Cart</span></a>
    <a href="javascript:void(0)" onclick="manage_cart('<?php echo $get_product['0']['id']?>','add','yes')" class="btn-product btn-cart"><span>Buy Now</span></a>
</div>

<div id="cart_attr_msg"></div>
                                    <div class="product-details-footer">
                                        <div class="product-cat">
                                            <span>Category:</span>
                                            <a href="#"><?php echo $get_product['0']['categories']?></a>
                                           
                                        </div><!-- End .product-cat -->

                                        <div class="social-icons social-icons-sm">
                                            <span class="social-label">Share:</span>
                                            <a href="https://facebook.com/share.php?u=<?php echo $meta_url?>" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                            <a href="https://twitter.com/share?text=<?php echo $get_product['0']['name']?>&url=<?php echo $meta_url?>" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            <a href="https://api.whatsapp.com/send?text=<?php echo $get_product['0']['name']?> <?php echo $meta_url?>" class="social-icon" title="Whatsapp" target="_blank"><i class="icon-whatsapp"></i></a>
                                        </div>
                                    </div><!-- End .product-details-footer -->
                                </div><!-- End .product-details -->
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .product-details-top -->
<input type="hidden" id="cid"/>
		<input type="hidden" id="sid"/>
		<script>
		    let is_color='<?php echo $is_color?>';
    let is_size='<?php echo $is_size?>';
    let pid='<?php echo $product_id?>';
		</script>
	<script>
function loadAttr(c_s_id,pid,type){
    jQuery('#cid').val(c_s_id);
    
    if(is_size==0){
        jQuery('#cart_attr_msg').html('');
		jQuery('#cart_qty').removeClass('hide'); 
    }else {
        jQuery('#cart_attr_msg').html('');
	jQuery.ajax({
		url:'load_attr.php',
		type:'post',
		data:'c_s_id='+c_s_id+'&pid='+pid+'&type='+type,
		success:function(result){
			jQuery('#size_attr').html("<option value=''>Select a Varient</option>"+result);
		}
		
	});
    }
	
}
function showQty(){
	let cid=jQuery('#cid').val();
	if(cid=='' && is_color>0){
		jQuery('#cart_attr_msg').html('Please select color');
	}else{
		let sid=jQuery('#size_attr').val();
		
		
		
		jQuery('#sid').val(sid);
		getAttrDetails(pid);
		jQuery('#cart_attr_msg').html('');
		jQuery('#cart_qty').removeClass('hide');
	}
}

function getAttrDetails(pid){
    let color=jQuery('#cid').val();
	let size=jQuery('#sid').val();
    jQuery.ajax({
        url:'getAttrDetails.php',
		type:'post',
		data:'pid='+pid+'&color='+color+'&size='+size,
		success:function(result){
		    result=jQuery.parseJSON(result);
		    var currencySymbol = "<?php echo $currencySymbol; ?>";
    var conversionRate = <?php echo $conversionRate; ?>; // Assuming $conversionRate is a numeric value

    // Your existing jQuery code with the multiplication
    jQuery('.product-price').html(currencySymbol + Math.ceil(result.price * conversionRate));
		}
    });
}
	</script>
                   <div class="product-details-tab">
                        <ul class="nav nav-pills justify-content-center" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (<?php echo $total_reviews; ?>)</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                <div class="product-desc-content">
                                    <h3>Product Information</h3>
                                    <p><?php echo $get_product['0']['description']?></p>
                                </div><!-- End .product-desc-content -->
                            </div><!-- .End .tab-pane -->
                            
                            <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                                <div class="reviews">
                                    <h3>Reviews (<?php echo $total_reviews; ?>)</h3>
                                    <div class="review">
                                         <h3 class="review_heading">Enter your review</h3><br/>
									<?php
									if(isset($_SESSION['USER_LOGIN'])){
									?>
									<div class="row" id="post-review-box" style=>
									   <div class="col-md-12">
										  <form action="" method="post">
											 <select class="form-control" name="rating" required>
												  <option value="">Select Rating</option>
												  <option>Worst</option>
												  <option>Bad</option>
												  <option>Good</option>
												  <option>Very Good</option>
												  <option>Fantastic</option>
											 </select>	<br/>
											 <textarea class="form-control" cols="50" id="new-review" name="review" placeholder="Enter your review here..." rows="5"></textarea>
											 <div class="text-right mt10">
												<button class="btn btn-success btn-lg" type="submit" name="review_submit">Submit</button>
											 </div>
										  </form>
									   </div>
									</div>
									<?php } else {
										echo "<span class='submit_review_hint'>Please <a href='login'>login</a> to submit your review</span>";
									}
									?>
									 <?php 
									if(mysqli_num_rows($product_review_res)>0){
									
									while($product_review_row=mysqli_fetch_assoc($product_review_res)){
									?>
                                        <div class="row no-gutters">
                                           
                                            <div class="col-auto">
                                                <h4><a href="#"><?php echo $product_review_row['name']?></a></h4>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <span class="review-date"><?php
$added_on=strtotime($product_review_row['added_on']);
echo date('d M Y',$added_on);
?></span>
                                            </div><!-- End .col -->
                                            <div class="col">
                                                <h4><?php echo $product_review_row['rating']?></h4>

                                                <div class="review-content">
                                                    <p><?php echo $product_review_row['review']?></p>
                                                </div><!-- End .review-content -->

                                                
                                            </div><!-- End .col-auto -->
                                        </div><!-- End .row -->
                                         <?php } }else { 
										echo "<h3 class='submit_review_hint'>No review added</h3><br/>";
									}
									?>
                                    </div><!-- End .review -->

                                    
                                </div><!-- End .reviews -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .product-details-tab -->
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
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.elevateZoom.min.js"></script>
    <script src="assets/js/bootstrap-input-spinner.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="custom.js"></script>
    <script>
       function manage_cart(pid,type,is_checkout){
	var is_error='';
	if(type=='update'){
		var qty=jQuery("#"+pid+"qty").val();
	}else{
		var qty=jQuery("#qty").val();
	}
	
	let cid=jQuery('#cid').val();
	let sid=jQuery('#sid').val();
	
	if(is_color!=0 && cid==''){
		jQuery('#cart_attr_msg').html('Please select color');
		is_error='yes';
	}
	if(is_size!=0 && sid=='' && is_error==''){
		jQuery('#cart_attr_msg').html('Please select size');
		is_error='yes';
	}
	
	if(is_error==''){
	
		jQuery.ajax({
			url:'manage_cart.php',
			type:'post',
			data:'pid='+pid+'&qty='+qty+'&type='+type+'&cid='+cid+'&sid='+sid,
			success:function(result){
				result=result.trim();
				if(type=='update' || type=='remove'){
					window.location.href=window.location.href;
				}
				if(result=='not_avaliable'){
					alert('Qty not avaliable');	
				}else{
					jQuery('.cart-count').html(result);
					if(is_checkout=='yes'){
						window.location.href='checkout.php';
					}
				}
			}	
		});	
	}
}
    </script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/product.html  22 Nov 2019 09:55:05 GMT -->
</html>