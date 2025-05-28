<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Discography</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favioh.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700%7CLato%7CKalam:300,400,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  </head>
  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-bell">
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <?php
            include "userheader.php";
      ?>
      <section class="breadcrumbs-custom">
        <div class="parallax-container" data-parallax-img="images/bg-gallery.jpg">
          <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
              <h2 class="breadcrumbs-custom-title">Discography</h2>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-footer">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li><a href="discography.php">Gallery</a></li>
              <li class="active">Discography</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Grid Gallery-->
      <section class="section section-xl bg-default">
        <div class="container isotope-wrap">
          <div class="isotope-filters">
            <button class="isotope-filters-toggle button button-sm button-icon button-icon-right button-default-outline" data-custom-toggle=".isotope-filters-list" data-custom-toggle-hide-on-blur="true"><span class="icon mdi mdi-chevron-down"></span>Filter</button>
            <div class="isotope-filters-list-wrap">
              <ul class="isotope-filters-list">
                <li><a class="active" href="discography.php" data-isotope-filter="*">Albums</a></li>
                <!-- <li><a href="gallery.php" data-isotope-filter="Type 1">Gallery</a></li> -->
              </ul>
            </div>
          </div>
          <div class="row row-30 isotope" data-lightgallery="group">
          <?php
                  include 'connection.php';
                
                  if($con)
                  {
                    $db=mysqli_select_db($con,"ohwonder");
                    if($db)
                    {
                      $sql = "SELECT * FROM album_table WHERE STATUS=0  ";
                      $q=mysqli_query($con,$sql);
                      while ($row=mysqli_fetch_array($q)) 
                      {
                ?>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 1">
              <!-- Thumbnail Classic-->
              <article class="thumbnail-classic">
                <div class="thumbnail-classic-figure"><?php echo"<img src='../admin/html/uro/al_image/".$row['ALBUM_IMAGE']."' alt='../admin/html/uro/al_image/".$row ['ALBUM_IMAGE']."' style='height:315px; width:370px;' />"?>
                </div>
                <div class="thumbnail-classic-caption">
                  <div>
                    <h5 class="thumbnail-classic-title"><a href="#"><?php echo $row['ALBUM_NAME'];?></a></h5>
                    <div class="thumbnail-classic-price"><?php echo $row ['ALBUM_YEAR']; ?></div>
                    <div class="thumbnail-classic-button-wrap">
                      <div class="thumbnail-classic-button"><a class="button button-white" href="<?php echo $row['ALS_LINK']?>"><span class="fa fa-spotify"></span></a></div>
                      <div class="thumbnail-classic-button"><a class="button button-white" href="<?php echo $row['ALY_LINK']?>"><span class="fa fa-youtube"></span></a></div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          <?php
                    }
                    
                  }
                }
                  ?>
                  </div>
        </div>
      </section>

      <!-- Page Footer-->
      <?php
            include "userfooter.php";
      ?>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <a href="#" id="ui-to-top" class="ui-to-top fa fa-arrow-up " style="padding: 11px;"></a>
  </body>
</html>