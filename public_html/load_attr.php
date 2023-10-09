<?php
require('connection.inc.php');
require('functions.inc.php');

$c_s_id = get_safe_value($con, $_POST['c_s_id']);
$pid = get_safe_value($con, $_POST['pid']);
$type = get_safe_value($con, $_POST['type']);
if ($type == 'color') {
    $query = "SELECT product_attributes.size_id, size_master.size FROM product_attributes, size_master WHERE product_attributes.product_id='$pid' AND product_attributes.color_id='$c_s_id' AND size_master.id=product_attributes.size_id AND size_master.status=1";
$resAttr = mysqli_query($con, $query);

    $html='';
	if(mysqli_num_rows($resAttr)>0){
		while($rowAttr=mysqli_fetch_assoc($resAttr)){
			$html.="<option value='".$rowAttr['size_id']."'>".$rowAttr['size']."</option>";
			
		}
	}
	echo $html;
	
}
?>
