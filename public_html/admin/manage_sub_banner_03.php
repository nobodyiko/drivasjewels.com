<?php
require('top.inc.php');
isAdmin();
$heading1='';
$btn_txt='';
$btn_link='';
$image='';
$msg='';
$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=get_safe_value($con,$_GET['id']);
	$image_required='';
	$res=mysqli_query($con,"select * from sub_banner_02 where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$heading1=$row['heading1'];
		$btn_txt=$row['btn_txt'];
		$btn_link=$row['btn_link'];
		$image=$row['image'];
	}else{
		 ?>
	    <script>
	        window.location.href='sub_banner_03.php';
	    </script>
	    <?php
		die();
	}
}

if(isset($_POST['submit'])){
	$heading1=get_safe_value($con,$_POST['heading1']);
	$btn_txt=get_safe_value($con,$_POST['btn_txt']);
	$btn_link=get_safe_value($con,$_POST['btn_link']);
	
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
$baseURL = "https://drivasjewels.com/media/banner/";

// Generate a unique filename for the uploaded image
$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];

// Combine the base URL and the image filename to create the full image path
$imagePath =  $image;

// Move the uploaded image to the specified directory
move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/media/banner/" . $image);
				$update_sql="update sub_banner_02 set heading1='$heading1',btn_txt='$btn_txt',btn_link='$btn_link',image='$image' where id='$id'";
			}else{
				$update_sql="update sub_banner_02 set heading1='$heading1',btn_txt='$btn_txt',btn_link='$btn_link'  where id='$id'";
			}
			mysqli_query($con,$update_sql);
		}else{
			// Define the base URL for your image path
$baseURL = "https://drivasjewels.com/media/banner/";

// Generate a unique filename for the uploaded image
$image = rand(111111111, 999999999) . '_' . $_FILES['image']['name'];

// Combine the base URL and the image filename to create the full image path
$imagePath =  $image;

// Move the uploaded image to the specified directory
move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/media/banner/" . $image);

// Now, you can use $imagePath when inserting the image path into the database
mysqli_query($con, "insert into sub_banner_02(heading1,btn_txt,btn_link,image,status) values('$heading1','$btn_txt','$btn_link','$image','1')");

		}
	 ?>
	    <script>
	        window.location.href='sub_banner_03.php';
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
                        <div class="card-header"><strong>Sub Banner - 03</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="heading1" class=" form-control-label">Heading1</label>
									<input type="text" name="heading1" placeholder="Enter heading1" class="form-control" required value="<?php echo $heading1?>">
								</div>
								<div class="form-group">
									<label for="heading1" class=" form-control-label">Btn Txt</label>
									<input type="text" name="btn_txt" placeholder="Enter btn txt" class="form-control" value="<?php echo $btn_txt?>">
								</div>
								<div class="form-group">
									<label for="heading1" class=" form-control-label">Btn Link</label>
									<input type="text" name="btn_link" placeholder="Enter btn link" class="form-control" value="<?php echo $btn_link?>">
								</div>
								<div class="form-group">
									<label for="heading1" class=" form-control-label">Image</label>
									<input type="file" name="image" placeholder="Enter image" class="form-control" <?php echo  $image_required?> value="<?php echo $image?>">
									<?php
										if($image!=''){
echo "<a target='_blank' href='".BANNER_SITE_PATH.$image."'><img width='150px' src='".BANNER_SITE_PATH.$image."'/></a>";
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