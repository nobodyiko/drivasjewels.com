<?php
session_start();
$con=mysqli_connect("localhost","u463550308_drivas","Yash1508%","u463550308_drivas");
define('SERVER_PATH',$_SERVER['DOCUMENT_ROOT'].'');
define('SITE_PATH','https://drivasjewels.com/');


define('PRODUCT_IMAGE_SERVER_PATH',SERVER_PATH.'media/product/');
define('PRODUCT_IMAGE_SITE_PATH',SITE_PATH.'media/product/');

define('BANNER_SERVER_PATH',SERVER_PATH.'media/banner/');
define('BANNER_SITE_PATH',SITE_PATH.'media/banner/');
?>