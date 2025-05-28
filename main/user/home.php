<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
  <link rel="icon" href="images/favioh.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700%7CLato%7CKalam:300,400,700">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <!--Header Menu  -->
    <?php
    include "userheader.php";
    ?>
    <!-- Header Menu End -->
    <!-- Main Page  -->
    <section class="section parallax-container section-custom-1" data-parallax-img="images/ohmainbg.jpg">
      <div class="parallax-content context-dark text-center">
        <div class="section-md">
          <div class="container">
            <div class="box-info-renee-decor"></div>
            <div class="box-info-renee-subtitle wow fadeInLeft">New Goodies in stores!</div>
            <h1 class="box-info-renee-title wow fadeScale">Oh Wonder</h1><a class="link-classic link-classic-md box-info-renee-link wow fadeInUp" href="shop.php">Buy now</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section Latest Album-->
    <section class="section section-xxl bg-default">
      <?php
            include 'connection.php';

            if ($con) {
              $db = mysqli_select_db($con, "ohwonder");
              if ($db) {
                $sql = "SELECT * FROM home_table WHERE status=0";
                $q = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($q)) {
        ?>
      <div class="container">
        <div class="row row-30 justify-content-center justify-content-md-between align-items-center">
          <div class="col-sm-7 col-md-4 col-lg-5 col-xl-7">
            <div class="slick-slider-2">
                          <div class="slick-slider child-carousel" id="child-carousel-4" data-items="1" data-arrows="true" data-arrows-class=".custom-arrows" data-for="#carousel-parent-4" data-slide-effect="true" data-autoplay="true">
                          <?php
            include 'connection.php';
            
            if ($con) {
              $db = mysqli_select_db($con, "ohwonder");
              if ($db) {
                $sql = "SELECT * FROM home_table WHERE status=0 ";
                $q = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($q)) {
            ?>
                <div class="item"><img class="rounded-circle" <?php echo' src="../admin/html/uro/h_img/'.$row['img']. '" '?> alt="" width="333" height="333" />
                </div>
                <?php
                }}}
                ?>                
              </div>
              <div class="custom-arrows"></div>
            </div>
          </div>
          <div class="col-md-7 col-lg-6 col-xl-5">
            <div class="slick-slider carousel-parent" id="carousel-parent-4" data-items="1" data-autoplay="true" data-slide-effect="true" >
            <?php
            include 'connection.php';
            
            if ($con) {
              $db = mysqli_select_db($con, "ohwonder");
              if ($db) {
                $sql = "SELECT * FROM home_table WHERE status=0 ";
                $q = mysqli_query($con, $sql);
                while ($row = mysqli_fetch_array($q)) {
            ?>
              <div class="item">
                <article class="product-beth">
                  <div class="product-beth-badge"> 
                                  <?php $datee = $row["year"];
                                    $d = date_parse_from_format("Y-M-d", $datee);
                                    // echo $d["month"];
                                    $date = "2010-10-10";
                                   
                                    echo date("Y", strtotime($datee));

                                  ?>
                   </div>
                  <h2 class="product-beth-title"><a href="#"><?php echo $row["name"]; ?></a></h2>
                  <div class="player-list">
                    <div class="jp-player-init">
                      <div class="jp-jplayer"></div>
                      <div class="jp-audio jp-audio-0" role="application" aria-label="media player">
                        <ul class="jp-player-list">
                          <li class="jp-player-list-item" data-jp-title="<?php echo $row["audio1title"]; ?>"  <?php echo' data-jp-mp3="../admin/html/uro/audio/'.$row['audio'].'" '?> data-jp-artist=""></li>
                        </ul>
                        <div class="jp-interface">
                          <div class="jp-button jp-controls">
                            <img width="15" height="15" src="https://img.icons8.com/material-rounded/20/000000/play--v1.png" alt="" button class="jp-btn jp-play" role="button" tabindex="0"></button>
                            <img width="15" height="15" src="https://img.icons8.com/material-rounded/20/000000/pause.png" alt="" button class="jp-btn jp-pause" role="button" tabindex="0"></button>
                          </div>
                          <div class="jp-playlist">
                            <ul>
                              <li> </li>
                            </ul>
                          </div>
                          <div class="jp-time-rail">
                            <div class="jp-progress">
                              <div class="jp-seek-bar">
                                <div class="jp-play-bar"></div>
                              </div>
                              <div class="jp-time-wrapper">
                                <div class="jp-duration"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="jp-no-solution"><span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your<a href="http://get.adobe.com/flashplayer/" target="_blank"> Flash plugin</a>.</div>
                      </div>
                    </div>
                    <div class="jp-player-init">
                      <div class="jp-jplayer"></div>
                      <div class="jp-audio jp-audio-1" role="application" aria-label="media player">
                        <ul class="jp-player-list">
                          <li class="jp-player-list-item" data-jp-title="<?php echo $row["audio2title"]; ?>" data-jp-artist="" <?php echo' data-jp-mp3="../admin/html/uro/audio/'.$row['audio2'].'" '?>></li>
                        </ul>
                        <div class="jp-interface">
                          <div class="jp-button jp-controls">
                            <img width="15" height="15" src="https://img.icons8.com/material-rounded/20/000000/play--v1.png" alt="" button class="jp-btn jp-play" role="button" tabindex="0"></button>
                            <img width="15" height="15" src="https://img.icons8.com/material-rounded/20/000000/pause.png" alt="" button class="jp-btn jp-pause" role="button" tabindex="0"></button>
                          </div>
                          <div class="jp-playlist">
                            <ul>
                              <li> </li>
                            </ul>
                          </div>
                          <div class="jp-time-rail">
                            <div class="jp-progress">
                              <div class="jp-seek-bar">
                                <div class="jp-play-bar"></div>
                              </div>
                              <div class="jp-time-wrapper">
                                <div class="jp-duration"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="jp-no-solution"><span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your<a href="http://get.adobe.com/flashplayer/" target="_blank"> Flash plugin</a>.</div>
                      </div>
                    </div>
                    <div class="jp-player-init">
                      <div class="jp-jplayer"></div>
                      <div class="jp-audio jp-audio-2" role="application" aria-label="media player">
                        <ul class="jp-player-list">
                          <li class="jp-player-list-item" data-jp-title="<?php echo $row["audio3title"]; ?>" data-jp-artist="" <?php echo' data-jp-mp3="../admin/html/uro/audio/'.$row['audio3'].'" '?>></li>
                        </ul>
                        <div class="jp-interface">
                          <div class="jp-button jp-controls">
                            <img width="15" height="15" src="https://img.icons8.com/material-rounded/20/000000/play--v1.png" alt="" button class="jp-btn jp-play" role="button" tabindex="0"></button>
                            <img width="15" height="15" src="https://img.icons8.com/material-rounded/20/000000/pause.png" alt="" button class="jp-btn jp-pause" role="button" tabindex="0"></button>
                          </div>
                          <div class="jp-playlist">
                            <ul>
                              <li> </li>
                            </ul>
                          </div>
                          <div class="jp-time-rail">
                            <div class="jp-progress">
                              <div class="jp-seek-bar">
                                <div class="jp-play-bar"></div>
                              </div>
                              <div class="jp-time-wrapper">
                                <div class="jp-duration"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="jp-no-solution"><span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your<a href="http://get.adobe.com/flashplayer/" target="_blank"> Flash plugin</a>.</div>
                      </div>
                    </div>
                    <div class="jp-player-init">
                      <div class="jp-jplayer"></div>
                      <div class="jp-audio jp-audio-3" role="application" aria-label="media player">
                        <ul class="jp-player-list">
                          <li class="jp-player-list-item" data-jp-title="<?php echo $row["audio4title"]; ?>" data-jp-artist="" <?php echo' data-jp-mp3="../admin/html/uro/audio/'.$row['audio4'].'" '?>></li>
                        </ul>
                        <div class="jp-interface">
                          <div class="jp-button jp-controls">
                            <img width="15" height="15" src="https://img.icons8.com/material-rounded/20/000000/play--v1.png" alt="" button class="jp-btn jp-play" role="button" tabindex="0"></button>
                            <img width="15" height="15" src="https://img.icons8.com/material-rounded/20/000000/pause.png" alt="" button class="jp-btn jp-pause" role="button" tabindex="0"></button>
                          </div>
                          <div class="jp-playlist">
                            <ul>
                              <li> </li>
                            </ul>
                          </div>
                          <div class="jp-time-rail">
                            <div class="jp-progress">
                              <div class="jp-seek-bar">
                                <div class="jp-play-bar"></div>
                              </div>
                              <div class="jp-time-wrapper">
                                <div class="jp-duration"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="jp-no-solution"><span>Update Required</span> To play the media you will need to either update your browser to a recent version or update your<a href="http://get.adobe.com/flashplayer/" target="_blank"> Flash plugin</a>.</div>
                      </div>
                    </div>
                  </div>
                  <div class="group-md group-middle"><a class="button button-gray-800 button-zakaria" href="<?php echo$row['slink'];?>">Listen On Spotify &nbsp;<i class="fa-brands fa-spotify"></a></i><a class="button button-default-outline button-zakaria" href="<?php echo$row['ytlink'];?>">Youtube &nbsp;<i class="fa-brands fa-youtube"></a></div></i>
                </article>
              </div>

              <?php
                }
              }
            }
            ?>

             
            </div>
          </div>
        </div>
      </div>
      <?php
                }
              }
            }
            ?>
    </section>
    <?php
    include "userfooter.php";
    ?>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <a href="#" id="ui-to-top" class="ui-to-top fa fa-arrow-up" style="padding: 11px;"></a>
</body>

</html>