<?php
  session_start();
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Cart Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favioh.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,600,700%7CLato%7CKalam:300,400,700">
    <link rel="stylesheet" type="text/css" href="../fonts/materialdesignicons-webfont.eot?v=1.4.57">
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

      <section class="section section-xl bg-default"> 
        <div class="container">
          <!-- shopping-cart-->
          <div class="table-custom-responsive">
        <div style="display:<?php if (isset($_SESSION['showAlert'])) {
  echo $_SESSION['showAlert'];
} else {
  echo 'none';
} unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong><?php if (isset($_SESSION['message'])) {
  echo $_SESSION['message'];
} unset($_SESSION['showAlert']); ?></strong>
        </div>

            <table class="table-custom table-cart">
              <thead>
              <tr>
                
                <th>Image</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>
                  <a href="action.php?clear=all" class="badge-danger p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fa-solid fa-trash-can"></i>&nbsp;&nbsp;Clear Cart</a>
                </th>
              </tr>
              </thead>
              <tbody>
              <?php
                require 'config.php';
                $stmt = $conn->prepare('SELECT * FROM cart');
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                while ($row = $result->fetch_assoc()):
              ?>
              <tr>
                
                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                  <td><a class="table-cart-figure" ><?php echo "<img src='../admin/html/uro/m_image/".$row ['product_image']."'  alt='admin/html/uro/m_image/".$row ['product_image']."' style='height:146px; width:132px;' />"?></a></td>
                  <td class="text-start"><a class="table-cart-link" ><?= $row['product_name'] ?></td>
                  <td><?= number_format($row['product_price'],); ?></td>
                    <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                  <td>
                    <div class="table-cart-stepper">
                    <input type="number" min="1" class="form-control itemQty" class="form-control itemQty" value="<?= $row['qty'] ?>">
                    </div>
                  </td>
                  <td><?= number_format($row['total_price'],); ?></td>
                  <td>
                  <a href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
                </td>
                </tr>
                <?php $grand_total += $row['total_price']; ?>
              <?php endwhile; ?>
              </tbody>
            </table>
          </div>
          <div class="group-xl group-justify justify-content-center justify-content-md-between">
            <div>
              <div class="group-xl group-middle">
                <div>
                  <div class="group-md group-middle">
                    <div class="heading-5 fw-medium text-gray-500">Total</div>
                    <div class="heading-3 fw-normal"><?= number_format($grand_total,2); ?></div>
                  </div>
                </div><a class="button button-lg button-primary button-zakaria" href="checkout.php">Proceed to checkout</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    
    $(".itemQty").on('change', function() {
      var $el = $(this).closest('tr');

      var pid = $el.find(".pid").val();
      var pprice = $el.find(".pprice").val();
      var qty = $el.find(".itemQty").val();
      location.reload(true);
      $.ajax({
        url: 'action.php',
        method: 'post',
        cache: false,
        data: {
          qty: qty,
          pid: pid,
          pprice: pprice
        },
        success: function(response) {
          console.log(response);
        }
      });
    });

    
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
  </script>
  <!-- Page Footer-->
  <?php
        include "userfooter.php";
      ?>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>