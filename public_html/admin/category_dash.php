<?php
require('top.inc.php'); ?>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                <div class="row">
                    <?php 
                        $sql = "SELECT COUNT(*) AS category_count FROM categories";
$result = mysqli_query($con, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $categoryCount = $row['category_count'];
} else {
    $categoryCount = 0; // Default to 0 if there's an error
}
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <a href="categories.php">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $categoryCount; ?></span></div>
                                            <div class="stat-heading">Main Category</div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
 <?php 
                        $sql1 = "SELECT COUNT(*) AS sub_category_count FROM sub_categories";
$result1 = mysqli_query($con, $sql1);

if ($result1) {
    $row = mysqli_fetch_assoc($result1);
    $subCategoryCount = $row['sub_category_count'];
} else {
    $subCategoryCount = 0; // Default to 0 if there's an error
}
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                 <a href="sub_categories.php">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $subCategoryCount; ?></span></div>
                                            <div class="stat-heading">Sub Category</div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>

                   
                </div>
               
               
                <!-- /.orders -->
              
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
<div class="clearfix"></div>
         
      </div>
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>