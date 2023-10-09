<?php
require('top.inc.php');
$name='';
$link='';
$image='';

$msg='';
$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from custom1 where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$name=$row['name'];
		$link=$row['link'];
	}else{
		header('location:womans_custom.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$name=get_safe_value($con,$_POST['name']);
	$link=get_safe_value($con,$_POST['link']);
	
	$res=mysqli_query($con,"select * from custom1 where name='$name'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="Category already exist";
			}
		}else{
			$msg="Category already exist";
		}
	}
	
	if(isset($_GET['id']) && $_GET['id']==0){
		if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
			$msg="Please select only png,jpg and jpeg image formate";
		}
	}else{
		if($_FILES['image']['type']!=''){
				if($_FILES['image']['type']!='image/png' && $_FILES['image']['type']!='image/jpg' && $_FILES['image']['type']!='image/jpeg'){
				$msg="Please select only png,jpg and jpeg image formate";
			}
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			if($_FILES['image']['name']!=''){
							// Define the base URL for your image path
$baseURL = "https://drivasjewels.com/media/product/";

// Generate a unique filename for the uploaded image
$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];

// Combine the base URL and the image filename to create the full image path
$imagePath =  $image;

// Move the uploaded image to the specified directory
move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/media/product/" . $image);
				$update_sql="update custom1 set name='$name',link='$link',image='$image' where id='$id'";
			}else{
				$update_sql="update custom1 set name='$name',link='$link' where id='$id'";
			}
			mysqli_query($con,$update_sql);
		}else{
			// Define the base URL for your image path
$baseURL = "https://drivasjewels.com/media/product/";

// Generate a unique filename for the uploaded image
$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];

// Combine the base URL and the image filename to create the full image path
$imagePath =  $image;

// Move the uploaded image to the specified directory
move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/media/product/" . $image);

// Now, you can use $imagePath when inserting the image path into the database
mysqli_query($con, "INSERT INTO custom1(name, link, image) VALUES ('$name', '$link', '$imagePath')");

		}
		header('location:womans_custom.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Women's Custom Product</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Catogory Name</label>
									<input type="text" name="name" placeholder="Enter Catgeory name" class="form-control" required value="<?php echo $name?>" style="border: 0.5px solid #d9e0e7;
    margin-top: 10px;
    margin-bottom: 10px;">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Link</label>
									<input type="text" name="link" placeholder="Enter Whatsapp Message" class="form-control" required value="<?php echo $link?>" style="border: 0.5px solid #d9e0e7;
    margin-top: 10px;
    margin-bottom: 10px;">
								</div>
								
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Image</label>
									<input type="file" name="image" class="form-control" <?php echo  $image_required?> style="border: 0.5px solid #d9e0e7;
    margin-top: 10px;
    margin-bottom: 10px;">
								</div>
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
		 <script>
			function get_sub_cat(sub_cat_id){
				var categories_id=jQuery('#categories_id').val();
				jQuery.ajax({
					url:'get_sub_cat.php',
					type:'post',
					data:'categories_id='+categories_id+'&sub_cat_id='+sub_cat_id,
					success:function(result){
						jQuery('#sub_categories_id').html(result);
					}
				});
			}
		 </script>
         
<?php
require('footer.inc.php');
?>
<script>
<?php
if(isset($_GET['id'])){
?>
get_sub_cat('<?php echo $sub_categories_id?>');
<?php } ?>
</script>