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
                        $sql = "SELECT COUNT(*) AS banner_count FROM banner";
$result = mysqli_query($con, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    $bannerCount = $row['banner_count'];
} else {
    $bannerCount = 0; // Default to 0 if there's an error
}
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <a href="banner.php">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-cash"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $bannerCount; ?></span></div>
                                            <div class="stat-heading">Main Banner</div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
 <?php 
                        $sql1 = "SELECT COUNT(*) AS sub_banner_count FROM sub_banner";
$result1 = mysqli_query($con, $sql1);

if ($result1) {
    $row = mysqli_fetch_assoc($result1);
    $subBannerCount = $row['sub_banner_count'];
} else {
    $subBannerCount = 0; // Default to 0 if there's an error
}
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                 <a href="sub_banner.php">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $subBannerCount; ?></span></div>
                                            <div class="stat-heading">Sub Banner - 01</div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
 <?php 
                        $sql1 = "SELECT COUNT(*) AS sub_banner_01_count FROM sub_banner_01";
$result1 = mysqli_query($con, $sql1);

if ($result1) {
    $row = mysqli_fetch_assoc($result1);
    $subBanner01Count = $row['sub_banner_01_count'];
} else {
    $subBanner01Count = 0; // Default to 0 if there's an error
}
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                 <a href="sub_banner_01.php">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $subBanner01Count; ?></span></div>
                                            <div class="stat-heading">Sub Banner - 02</div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
 <?php 
                        $sql1 = "SELECT COUNT(*) AS sub_banner_03_count FROM sub_banner_02";
$result1 = mysqli_query($con, $sql1);

if ($result1) {
    $row = mysqli_fetch_assoc($result1);
    $subBanner01Count = $row['sub_banner_03_count'];
} else {
    $subBanner01Count = 0; // Default to 0 if there's an error
}
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                 <a href="sub_banner_03.php">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $subBanner01Count; ?></span></div>
                                            <div class="stat-heading">Sub Banner - 03</div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
 <?php 
                        $sql1 = "SELECT COUNT(*) AS sub_banner_04_count FROM sub_banner_03";
$result4 = mysqli_query($con, $sql1);

if ($result4) {
    $row = mysqli_fetch_assoc($result4);
    $subBanner04Count = $row['sub_banner_04_count'];
} else {
    $subBanner04Count = 0; // Default to 0 if there's an error
}
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                 <a href="sub_banner_04.php">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $subBanner04Count; ?></span></div>
                                            <div class="stat-heading">Sub Banner - 04</div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
 <?php 
                        $sql1 = "SELECT COUNT(*) AS sub_banner_05_count FROM sub_banner_04";
$result4 = mysqli_query($con, $sql1);

if ($result4) {
    $row = mysqli_fetch_assoc($result4);
    $subBanner05Count = $row['sub_banner_05_count'];
} else {
    $subBanner05Count = 0; // Default to 0 if there's an error
}
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                 <a href="sub_banner_05.php">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $subBanner05Count; ?></span></div>
                                            <div class="stat-heading">Sub Banner - 05</div>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
 <?php 
                        $sql1 = "SELECT COUNT(*) AS sub_banner_05_count FROM all_banner";
$result4 = mysqli_query($con, $sql1);

if ($result4) {
    $row = mysqli_fetch_assoc($result4);
    $subBanner05Count = $row['sub_banner_05_count'];
} else {
    $subBanner05Count = 0; // Default to 0 if there's an error
}
                    ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                 <a href="all_banner.php">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $subBanner05Count; ?></span></div>
                                            <div class="stat-heading">All Page Same Banner</div>
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