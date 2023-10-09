<?php 
require('connection.inc.php'); 
require('functions.inc.php');
require('add_to_cart.inc.php');
$wishlist_count=0;
$cat_res=mysqli_query($con,"select * from categories where status=1 order by id asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}
$obj=new add_to_cart();
$totalProduct=$obj->totalProduct();

if(isset($_SESSION['USER_LOGIN'])){
    $uid=$_SESSION['USER_ID'];
    if(isset($_GET['wishlist_id'])){
        $wid=get_safe_value($con,$_GET['wishlist_id']);
        mysqli_query($con,"delete from wishlist where id='$wid' and user_id='$uid'");
	}
	$wishlist_count=mysqli_num_rows(mysqli_query($con,"select product.name,product.image,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'"));
}

$script_name=$_SERVER['SCRIPT_NAME'];
$script_name_arr=explode('/',$script_name);
$mypage=$script_name_arr[count($script_name_arr)-1];


$meta_url=SITE_PATH;
$meta_image="";
if($mypage=='product.php'){
	$product_id=get_safe_value($con,$_GET['id']);
	$product_meta=mysqli_fetch_assoc(mysqli_query($con,"select * from product where id='$product_id'"));
	$meta_title=$product_meta['meta_title'];
	$meta_desc=$product_meta['meta_desc'];
	$meta_keyword=$product_meta['meta_keyword'];
	$meta_url=SITE_PATH."product.php?id=".$product_id;
	$meta_image=PRODUCT_IMAGE_SITE_PATH.$product_meta['image'];
}if($mypage=='contact.php'){
	$meta_title='Contact Us';
}
?>
<?php 
$inrToUsdRate = 0.012; // 1 INR = 0.014 USD
$inrToPoundRate = 0.0097; // 1 INR = 0.014 USD
$inrToEuroRate = 0.011; // 1 INR = 0.014 USD

if (isset($_POST['currency'])) {
    $selectedCurrency = $_POST['currency'];
    if ($selectedCurrency === 'inr') {
        $currencySymbol = '₹';
        $conversionRate = 1;
    } elseif ($selectedCurrency === 'usd') {
        $currencySymbol = '$';
        $conversionRate = $inrToUsdRate;
    } elseif ($selectedCurrency === 'pound') {
        $currencySymbol = '£';
        $conversionRate = $inrToPoundRate;
    } elseif ($selectedCurrency === 'euro') {
        $currencySymbol = '€';
        $conversionRate = $inrToEuroRate;
    }

    // Store currency and conversion rate in session
    $_SESSION['selectedCurrency'] = $selectedCurrency;
    $_SESSION['currencySymbol'] = $currencySymbol;
    $_SESSION['conversionRate'] = $conversionRate;
} else {
    // If currency is not set, use session values or default to INR
    $selectedCurrency = $_SESSION['selectedCurrency'] ?? 'inr';
    $currencySymbol = $_SESSION['currencySymbol'] ?? '₹';
    $conversionRate = $_SESSION['conversionRate'] ?? 1;
}


?>
    <header class="header">
        <div class="sticky-header" >
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <div class="row">
                   <form method="post" id="currencyForm">
    <select name="currency" style="border:none;padding:10px;" id="currencySelect">
        <option value="inr" style="border:none;"<?php if ($selectedCurrency === 'inr') echo 'selected'; ?>>INR</option>
        <option value="usd" style="border:none;"<?php if ($selectedCurrency === 'usd') echo 'selected'; ?>>USD</option>
        <option value="pound" style="border:none;"<?php if ($selectedCurrency === 'pound') echo 'selected'; ?>>POUND</option>
        <option value="euro" style="border:none;"<?php if ($selectedCurrency === 'euro') echo 'selected'; ?>>EURO</option>
    </select>
</form>

<script>
    // Get a reference to the select element
    const currencySelect = document.getElementById('currencySelect');
    
    // Listen for changes to the select element
    currencySelect.addEventListener('change', function() {
        // Automatically submit the form when a different currency is selected
        document.getElementById('currencyForm').submit();
    });
</script>
</div>
                        
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <?php
										if(isset($_SESSION['USER_ID'])){
										?>
                                    <li><a href="wishlist"><i class="icon-heart-o"></i>Wishlist <span class="wishlist-count">(<?php echo $wishlist_count?>)</span></a></li>
                                    <?php } ?>
                                    <li><a href="about">About Us</a></li>
                                    <li><a href="contact">Contact Us</a></li>
                                   &nbsp;&nbsp;&nbsp;
                                        
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                        <?php if(isset($_SESSION['USER_LOGIN'])){
											?>
                        <div class="header-dropdown">
                            <a href="#"> Hi <?php echo $_SESSION['USER_NAME']?></a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="order">My Orders</a></li>
                                    <li><a href="profile">Profile</a></li>
                                    <div class="dropdown-divider"></div>
                                    <li><a href="logout">Logout</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->
                        <?php
										}else{
											echo '<li style="list-style:none;"><a href="login" ><span>LOGIN NOW</span></a></li>';
										}
										?>
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle ">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index" class="logo">
                            <img src="assets/images/Asset 17.png" alt="Molla Logo" width="75" height="10">
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="active">
                                    <a href="index" class="sf-with">Home</a>

                                    
                                </li>
                               
                                         <?php
										foreach($cat_arr as $list){
											?>
											<li class="drop"><a href="categories?id=<?php echo $list['id']?>" class="sf-with-ul"><?php echo $list['categories']?></a>
											<?php
											$cat_id=$list['id'];
											$sub_cat_res=mysqli_query($con,"select * from sub_categories where status='1' and categories_id='$cat_id'");
											if(mysqli_num_rows($sub_cat_res)>0){
											?>
											
											   <ul class="dropdown">
													<?php
													while($sub_cat_rows=mysqli_fetch_assoc($sub_cat_res)){
														echo '<li><a href="categories?id='.$list['id'].'&sub_categories='.$sub_cat_rows['id'].'">'.$sub_cat_rows['sub_categories'].'</a></li>
													';
													}
													?>
												</ul>
												<?php } ?>
											</li>
											<?php
										}
										?>
<li>
                                    <a href="custom" class="sf-with">Custom</a>

                                    
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="search" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="str" id="q" placeholder="Search in..." required>
                                    <button type="submit" style="display:none"></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                        
                        <div class="dropdown cart-dropdown">
                            <a href="cart" class="dropdown-toggle" role="button"  aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count"><?php echo $totalProduct?></span>
                            </a>

                           
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </div>
        </header><!-- End .header -->