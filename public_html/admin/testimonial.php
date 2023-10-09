<?php
require('top.inc.php');
isAdmin();

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($con,$_GET['type']);
	if($type=='delete'){
		$id=get_safe_value($con,$_GET['id']);
		$delete_sql="delete from testimonial where id='$id'";
		mysqli_query($con,$delete_sql);
	}
}


$sql="select * from testimonial order by id desc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Testimonial</h4>
				   <h4 class="box-link"><a href="manage_testimonial.php">Add Testimonial</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">No.</th>
							   <th>Name</th>
							   <th>Designation</th>
							   <th>Image</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i++?></td>
							   </td>
							  <td><?php echo $row['name']?></td>
							  <td><?php echo $row['designation']?></td>
							   <td>
							   <?php
							   
echo "<a target='_blank' href='".PRODUCT_IMAGE_SITE_PATH.$row['image']."'><img width='150px' src='".PRODUCT_IMAGE_SITE_PATH.$row['image']."'/></a>";
							   ?>
							   </td>
							   <td>
								<?php
								
								echo "<span class='badge badge-edit'><a href='manage_testimonial.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
									echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								
								
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>