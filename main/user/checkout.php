



<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Checkout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favioh.ico" type="image/x-icon">
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
              <h2 class="breadcrumbs-custom-title">Checkout</h2>
            </div>
          </div>
        </div>
        <div class="breadcrumbs-custom-footer">
          <div class="container">
            <ul class="breadcrumbs-custom-path">
              <li><a href="home.php">Home</a></li>
              <li><a href="shop.php">Shop</a></li>
              <li class="active">Checkout</li>
            </ul>
          </div>
        </div>
      </section>

      <section class="section section-lg bg-default text-md-start">
        <div class="container">
          <h3 class="fw-medium">Your shopping cart</h3>
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
              <?php
                require 'config.php';
                $stmt = $conn->prepare('SELECT * FROM cart');
                $stmt->execute();
                $result = $stmt->get_result();
                $grand_total = 0;
                while ($row = $result->fetch_assoc()):
              ?>
                <tr>
                  <td><a class="table-cart-figure"><?php echo "<img src='../admin/html/uro/m_image/".$row ['product_image']."'  alt='admin/html/uro/m_image/".$row ['product_image']."' style='height:146px; width:132px;' />"?></a></td>
                  <td class="text-start"><a class="table-cart-link" ><?= $row['product_name'] ?></a></td>
                  <td><?= number_format($row['product_price'],2); ?></td>
                  
                  <td><?= number_format($row['qty'],); ?></td>
                 
                  <td><?= number_format($row['total_price'],2); ?></td>
                </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
        </div>
      </section>

  <?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = array();

	$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>


<section class="section section-lg bg-default text-md-start">
<div class="container">
    <div class="row row-50 justify-content-center">
      <div class="col-md-10 col-lg-6" id="order">
        <h4 class="text-center text-info p-2">Complete your order!</h4>
        
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-wrap">
            <input type="text" name="name" class="form-input" placeholder="Enter Name" required>
          </div>
          <div class="form-wrap">
            <input type="email" name="email" class="form-input" placeholder="Enter E-Mail" required>
          </div>
          <div class="form-wrap">
            <input type="tel" name="phone" class="form-input" placeholder="Enter Phone" required>
          </div>
          <div class="form-wrap">
            <textarea name="address" class="form-input" rows="3" cols="10" placeholder="Enter Delivery Address Here..."></textarea>
          </div>
          <h3 class="fw-medium">Select Payment Mode</h3>
          <div class="form-wrap">
            <select name="pmode" class="form-input" required>
              <option value="" selected disabled>-Select Payment Mode-</option>
              <option value="cod">Cash On Delivery</option>
              <!-- <option value="netbanking">Net Banking</option>
              <option value="cards">Debit/Credit Card</option> -->
            </select>
          </div>
          
      </div>
          <div class="col-md-10 col-lg-6">
              <h3 class="fw-medium">Cart total</h3>
              <div class="table-custom-responsive">
                <table class="table-custom table-custom-primary table-checkout">
                  <tbody>
                    <tr>
                    <hr> 
                      <td>Cart Subtotal</td>
                      <td><?= number_format($grand_total,2) ?>/</td>
                    </tr>
                    <tr>
                      <td>Shipping</td>
                      <td>Free</td>
                    </tr>
                    <tr>
                      <td>Total</td>
                      <td><?= number_format($grand_total,2) ?>/</td>
                    </tr>
                  </tbody>
                </table>
                <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="button button-lg button-primary button-zakaria">
          </div>
              </div>
            </div>
          </div>
          </form>
        
    </div>
  </div>
  </section>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
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
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>