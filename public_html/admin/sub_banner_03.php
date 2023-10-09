<?php
require('top.inc.php');
isAdmin();

$sql="select * from sub_banner_02 order by id asc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Sub Banner - 03 </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">No.</th>
							   <th>Heading1</th>
							   <th>Btn Txt</th>
							   <th>Btn Link</th>
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
							   <td><?php echo $row['heading1']?></td>
							   <td><?php echo $row['btn_txt']?></td>
							   <td><?php echo $row['btn_link']?></td>
							   <td>
							   <?php
							   
echo "<a target='_blank' href='".BANNER_SITE_PATH.$row['image']."'><img width='150px' src='".BANNER_SITE_PATH.$row['image']."'/></a>";
							   ?>
							   </td>
							   <td>
								<?php
								
								echo "<span class='badge badge-edit'><a href='manage_sub_banner_03.php?id=".$row['id']."'>Edit</a></span>&nbsp;";
								
								
								
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