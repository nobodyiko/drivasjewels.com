<?php 
require('connection.inc.php'); 
require('functions.inc.php');
$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
    $cat_arr[]=$row;
}
?>
<header class="header header-25">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <div class="d-flex align-items-center d-md-block text-secondary font-weight-light">
                            <a href="tel:#"><i class="icon-phone h6 text-secondary" style="margin-right: 8px;"></i>Call: +0123 456 789</a>
                        </div><!-- End .top-menu -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="social-icons social-icons-color d-sm-flex d-none">
                            <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                            <a href="#" class="social-icon social-pinterest" title="Instagram" target="_blank"><i class="icon-pinterest-p"></i></a>
                            <a href="#" class="social-icon social-instagram" title="Pinterest" target="_blank"><i class="icon-instagram"></i></a>
                        </div><!-- End .soial-icons -->
                        <ul class="top-menu text-secondary">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li class="account-links font-weight-normal"><a href="login.php" data-toggle="modal"><i class="icon-user d-none d-lg-block"></i>Login / Register</a></li>
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">USD</a>
                                            <div class="header-menu">
                                                <ul class="d-block">
                                                    <li><a href="#">Eur</a></li>
                                                    <li class="m-0"><a href="#">Usd</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div><!-- End .header-dropdown -->
                                    </li>
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">Eng</a>
                                            <div class="header-menu">
                                                <ul class="d-block">
                                                    <li><a href="#">English</a></li>
                                                    <li class="m-0"><a href="#">French</a></li>
                                                    <li class="m-0"><a href="#">Spanish</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div><!-- End .header-dropdown -->
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="header-left d-lg-block d-none">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <button class="btn font-size-normal letter-spacing-large btn-primary" type="submit"><i class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>
                    <div class="header-center d-block">
                        <a href="index.php" class="logo align-items-center d-flex flex-column bg-white">
                            <img src="assets/images/demos/demo-25/logo.png" alt="Molla Logo" width="82" height="20">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <a href="wishlist.html" class="wishlist-link d-flex">
                            <i class="icon-heart-o"></i>
                            <span class="wishlist-count">3</span>
                            <!-- <span class="wishlist-txt">My Wishlist</span> -->
                        </a>

                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">0</span>
                                <!-- <span class="cart-txt">$164,00</span> -->
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product shadow-none">
                                        <div class="product-cart-details">
                                            <h4 class="product-title font-size-normal">
                                                <a href="product.html">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product shadow-none">
                                        <div class="product-cart-details">
                                            <h4 class="product-title font-size-normal">
                                                <a href="product.html">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.html" class="product-image">
                                                <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.html" class="btn font-size-normal letter-spacing-large btn-primary">View Cart</a>
                                    <a href="checkout.html" class="btn font-size-normal letter-spacing-large btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container">
                                    <a href="index.html" class="sf-with">Home</a>
</li>
<?php  foreach($cat_arr as $list){?>
                                <li class="megamenu-container">
                                    <a href="categories.php?id=<?php echo $list['id'] ?>" class="sf-with"><?php echo $list['categories'] ?></a>
</li><?php } ?>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->

                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                    </div><!-- End .header-left -->

                   
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header>