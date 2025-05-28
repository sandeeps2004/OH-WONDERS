<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
  <link rel="icon" href="images/favioh.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700%7CLato%7CKalam:300,400,700">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js">
      </script>
      <script type="text/javascript">
         $(function() {
            $( "#year" ).datepicker({dateFormat: 'yy'});
         });
      </script>
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
    <?php
    include "userheader.php";
    ?>
    <section class="breadcrumbs-custom">
      <div class="parallax-container" data-parallax-img="images/coverEV.png">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Events</h2>
            <h5 class="breadcrumbs-custom-text"> And I know you feel like everything Is falling to the wind <br class="d-none d-md-block">But don't you let the thunder inegestas </h5>
          </div>
        </div>
      </div>
      <div class="breadcrumbs-custom-footer">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Events</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="section section-xxl bg-gray-13 context-dark">
      <div class="container">
        <!-- Swiper-->
        <div class="swiper-container swiper-slider swiper-slider-custom swiper-slider-5 swiper-scrollbar-1" data-autoplay="5000" data-direction="vertical" data-margin="40" data-slides="auto" data-simulate-touch="true" data-mousewheel="true">
          <div class="swiper-wrapper">
            <?php
            include 'connection.php';

            if ($con) {
              $db = mysqli_select_db($con, "ohwonder");
              if ($db) {
                $sql = "SELECT * FROM events_table WHERE EVENT_STATUS=0";
                $q = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($q)) {
            ?>
                  <div class="swiper-slide">
                    <!-- Product-->
                    <article class="event-classic">
                      <div class="unit unit-spacing-0 flex-column flex-sm-row align-items-sm-center">
                        <div class="unit-left align-self-stretch"><a class="event-classic-figure" href="#"><?php echo "<img class='event-classic-image' src='../admin/html/uro/e_image/" . $row['EVENT_IMG'] . "'  alt='../admin/html/uro/e_image/" . $row['EVENT_IMG'] . "' style='height: 392px; width: 385px;' />" ?></a></div>
                        <div class="unit-body flex-grow-1">
                          <div class="event-classic-body">
                            <div class="unit unit-spacing-sm flex-column flex-md-row-reverse justify-content-md-between">
                              <div class="unit-left">
                                <time class="event-classic-time" datetime="2020-08-11"><span class="event-classic-date">
                                    <?php $datee = $row["EVENT_DATE"];
                                    $d = date_parse_from_format("Y-M-d", $datee);
                                    // echo $d["month"];
                                    $date = "2010-10-10";
                                    echo date("d", strtotime($datee));
                                    

                                    ?>


                                  </span>
                                  <span class="event-classic-month">
                                    <?php $datee = $row["EVENT_DATE"];
                                    $d = date_parse_from_format("Y-M-d", $datee);
                                    // echo $d["month"];
                                    $date = "2010-10-10";
                                    echo date("M", strtotime($datee));
                                    

                                    ?>
                                  </span>
                                  <span class="event-classic-hours">
                                    <?php $datee = $row["EVENT_DATE"];
                                    $d = date_parse_from_format("Y-M-d", $datee);
                                    // echo $d["month"];
                                    $date = "2010-10-10";
                                   
                                    echo date("l", strtotime($datee));

                                    ?></span>
                                </time>
                              </div>
                              <div class="unit-body">
                                <h3 class="event-classic-title"><a href="#"><?php echo $row["EVENT_NAME"]; ?></a></h3>
                                <ul class="event-classic-panel">
                                  <li class="event-classic-price"><span class="icon fa fa-ticket"></span><span>On Sale</span></li>
                                  <li class="event-classic-location"><span class="icon fa fa-location-arrow"></span>
                                  <!-- ADD LINK -->
                                  <a><?php echo $row["VENUE_DETAILS"]; ?></a></li>
                                </ul>

                                <!-- <p class="event-classic-text">Join the stunning performance of Bandico’s latest hits at Equinox Club in Seattle next Sunday with special guests - Dangerous Joe and Jane K. </p>  -->

                                <a class="link-classic event-classic-link" href="<?php echo$row['EVENT_LINK'];?>">buy tickets</a>
                              </div>
                            </div>
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
            <div class="swiper-slide swiper-slide-last"></div>
          </div>
          <!-- Swiper Scrollbar-->
          <div class="swiper-scrollbar"></div>
        </div>
      </div>
    </section>
    <hr class="hr-white-10">

    <!-- Page Footer-->
    <?php
    include "userfooter.php";
    ?>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>