<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Cart Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700%7CLato%7CKalam:300,400,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
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
        <div class="parallax-container" data-parallax-img="images/bg-blog.jpg">
          <div class="breadcrumbs-custom-body parallax-content context-dark">
            <div class="container">
              <h2 class="breadcrumbs-custom-title">Cart Page</h2>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-footer">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="home.php">Home</a></li>
              <li><a href="shop.php">Shop</a></li>
              <li class="active">Cart Page</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Shopping Cart-->
      <section class="section section-xl bg-default"> 
        <div class="container">
          <!-- shopping-cart-->
          <div class="table-custom-responsive">
            <table class="table-custom table-cart">
              <thead>
                <tr>
                  <th>Product name</th>
                  <th></th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a class="table-cart-figure" href="single-product.html"><img src="images/product-mini-4-146x132.jpg" alt="" width="146" height="132"/></a></td>
                  <td class="text-start"><a class="table-cart-link" href="single-product.html">Stay wild Men’s t-shirt</a></td>
                  <td>$18.00</td>
                  <td>
                    <div class="table-cart-stepper">
                      <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                    </div>
                  </td>
                  <td>$18</td>
                </tr>
                <tr>
                  <td><a class="table-cart-figure" href="single-product.html"><img src="images/product-mini-5-146x132.jpg" alt="" width="146" height="132"/></a></td>
                  <td class="text-start"><a class="table-cart-link" href="single-product.html">Bandico Baseball Hat</a></td>
                  <td>$23.00</td>
                  <td>
                    <div class="table-cart-stepper">
                      <input class="form-input" type="number" data-zeros="true" value="1" min="1" max="1000">
                    </div>
                  </td>
                  <td>$23</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="group-xl group-justify justify-content-center justify-content-md-between">

            <div>
              <div class="group-xl group-middle">
                <div>
                  <div class="group-md group-middle">
                    <div class="heading-5 fw-medium text-gray-500">Total</div>
                    <div class="heading-3 fw-normal">$41</div>
                  </div>
                </div><a class="button button-lg button-primary button-zakaria" href="checkout.html">Proceed to checkout</a>
              </div>
            </div>
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
  </body>
</html>