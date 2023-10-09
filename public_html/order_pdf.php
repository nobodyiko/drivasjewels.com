<?php 
    include('vendor/autoload.php');
    require('connection.inc.php');
require('functions.inc.php');

if(!$_SESSION['ADMIN_LOGIN']){
	if(!isset($_SESSION['USER_ID'])){
		die();
	}
}

$order_id=get_safe_value($con,$_GET['id']);
    $css=file_get_contents('order.css');
    $html='
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
	</head>
	<body style="margin:25px;">
		<header style="margin:25px;margin-top:25px;">
			<h1>Invoice</h1>
			<address contenteditable>
				<p>Drivas Jewels</p>
				<p>FLAT NO 304, AMARDEEP APARTMENT,<br> VARCHHA ROAD,SURAT,<br>GUJARAT-395006</p>
				<p>+91 98982 53928</p>
			</address>
			
		</header>';
				if(isset($_SESSION['ADMIN_LOGIN'])){
			$res=mysqli_query($con,"select distinct(order_detail.id) ,order_detail.*,product.name,product.image from order_detail,product ,`order` where order_detail.order_id='$order_id' and order_detail.product_id=product.id");
		}else{
			$uid=$_SESSION['USER_ID'];
			$res=mysqli_query($con,"select distinct(order_detail.id) ,order_detail.*,product.name,product.image from order_detail,product ,`order` where order_detail.order_id='$order_id' and `order`.user_id='$uid' and order_detail.product_id=product.id");
		}
		$html.='<article style="margin:25px;">
			<h1>Recipient</h1>
			<table class="inventory">
				<thead>
					<tr>
						<th><span>Item</span></th>
						<th><span>Product Image</span></th>
						<th><span>Rate</span></th>
						<th><span>Quantity</span></th>
						<th><span>Price</span></th>
					</tr>
				</thead>
				<tbody>';
				if(isset($_SESSION['ADMIN_LOGIN'])){
			$res=mysqli_query($con,"select distinct(order_detail.id) ,order_detail.*,product.name,product.image from order_detail,product ,`order` where order_detail.order_id='$order_id' and order_detail.product_id=product.id");
		}else{
			$uid=$_SESSION['USER_ID'];
			$res=mysqli_query($con,"select distinct(order_detail.id) ,order_detail.*,product.name,product.image from order_detail,product ,`order` where order_detail.order_id='$order_id' and `order`.user_id='$uid' and order_detail.product_id=product.id");
		}
		$total_price=0;
		if(mysqli_num_rows($res)==0){
			die();
		}
		while($row=mysqli_fetch_assoc($res)){
		$total_price=$total_price+($row['qty']*$row['price']);
		 $pp=$row['qty']*$row['price'];
				
				$html.='<tr>
						<td><span>'.$row['name'].'</span></td>
						<td><span><img src="'.PRODUCT_IMAGE_SITE_PATH.$row['image'].'" style="height:100px;width:100px;"></span></td>
						<td><span>₹</span><span>'.$row['price'].'</span></td>
						<td><span>'.$row['qty'].'</span></td>
						<td><span>₹</span><span>'.$pp.'</span></td>
					</tr>';
		 }
		 $html.='</tbody>
			</table>
			<table class="meta">
				<tr>
					<th><span>Total Price</span></th>
					<td><span>₹</span><span>'.$total_price.'</span></td>
				</tr>
			</table>
		</article>
	</body>
</html>';
    $mpdf=new \Mpdf\Mpdf();
    $mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html,2);
    $file=time().'.pdf';
$mpdf->Output($file,'D');
    
    
?>
