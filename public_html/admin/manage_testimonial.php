<?php
require('top.inc.php');
isAdmin();
$name='';
$designation='';
$description='';
$image='';
$msg='';
$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$image_required='';
	$res=mysqli_query($con,"select * from testimonial where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$name=$row['name'];
		$designation=$row['designation'];
		$description=$row['description'];
		$image=$row['image'];
	}else{
		 ?>
	    <script>
	        window.location.href='testimonial.php';
	    </script>
	    <?php
		die();
	}
}

if(isset($_POST['submit'])){
	$name=get_safe_value($con,$_POST['name']);
	$designation=get_safe_value($con,$_POST['designation']);
	$description=get_safe_value($con,$_POST['description']);
	
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
				$update_sql="update testimonial set name='$name',designation='$designation',description='$description',image='$image' where id='$id'";
			}else{
				$update_sql="update testimonial set name='$name',designation='$designation',description='$description' where id='$id'";
			}
			mysqli_query($con,$update_sql);
		}else{
if ($_FILES['image']['name'] != '') {
    // Define the base URL for your image path
    $baseURL = "https://drivasjewels.com/media/product/";

    // Generate a unique filename for the uploaded image
    $image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];

    // Combine the base URL and the image filename to create the full image path
    $imagePath =  $image;

    // Move the uploaded image to the specified directory
    move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/media/product/" . $image);
}


// Now, you can use $imagePath when inserting the image path into the database
mysqli_query($con, "insert into testimonial(name,designation,description,image) values('$name','$designation','$description','$image')");


		}
	 ?>
	    <script>
	        window.location.href='testimonial.php';
	    </script>
	    <?php
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Testimonial</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="heading1" class=" form-control-label">Name</label>
									<input type="text" name="name" placeholder="Enter Client Name" class="form-control" required value="<?php echo $name?>">
								</div>
								<div class="form-group">
									<label for="heading1" class=" form-control-label">Designation</label>
									<input type="text" name="designation" placeholder="Enter Client Designation" class="form-control" required value="<?php echo $designation?>">
								</div>
								<div class="form-group">
									<label for="heading1" class=" form-control-label">Description</label>
									<textarea name="description" placeholder="Enter Client Description" class="form-control"><?php echo $description?></textarea>
								</div>
								<div class="form-group">
									<label for="heading1" class=" form-control-label">Image</label>
									<input type="file" name="image" placeholder="Enter image" class="form-control" <?php echo  $image_required?> value="<?php echo $image?>">
									<?php
										if($image!=''){
echo "<a target='_blank' href='".PRODUCT_IMAGE_SITE_PATH.$image."'><img width='150px' src='".PRODUCT_IMAGE_SITE_PATH.$image."'/></a>";
										}
										?>
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
         
<?php
require('footer.inc.php');
?>