<?php
	include "connection.php";
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Log In / Sign Up</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
	<link rel="stylesheet" href="css/contact.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
	<script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favioh.ico" type="image/x-icon">

</head>

<body>
<a href="home.php">
	<div class="logo-container">
		<center><img src="images/ohmainlogo1.png" class="logo" width="250px"></center>
	</div></a>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						
						<!-- <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" /> -->
						
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3 header-title">Send Us A Message</h4>
											<form method="POST">
												<div class="form-group">
													<input type="name" name="name" class="form-style" placeholder="Your Name" autocomplete="off" required>
													<!-- <i class="input-icon uil uil-at"></i> -->
                                                    <span class="iconify input-icon" data-icon="bx:user"></span>
												</div>
												<div class="form-group mt-2">
													<input type="email" name="email" class="form-style" placeholder="Your Email" autocomplete="off" required>
													<!-- <i class="input-icon uil uil-alt"></i> -->
                                                    <span class="iconify input-icon" data-icon="eva:email-outline"></span>
												</div>
												<div class="form-group mt-2">
													<input type="tel" name="phone" class="form-style" placeholder="(IN)XXXXX XXXXX" pattern="[0-9]{5}[0-9]{5}" required autocomplete="off">
													<!-- <i class="input-icon uil uil-lock-alt"></i> -->
                                                    <span class="input-icon iconify" data-icon="akar-icons:phone"></span>
												</div>
												<div class="form-group mt-2">
													<textarea input type="textarea" name="message" class="form-style" placeholder="Your Message"  required autocomplete="off"></textarea>
													<!-- <i class="input-icon uil uil-lock-alt"></i> -->
                                                    <span class="iconify input-icon" data-icon="ant-design:message-outlined"></span>
												</div>

												<button type="submit" class="btn mt-4" name="submit">submit</button>
												<!-- <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p> -->
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Feedback Logic -->
    <?php
        if(isset($_POST['submit'])){
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $message=$_POST['message'];
            
            date_default_timezone_set('Asia/calcutta');
		    $a = date('Y-m-d H:i:s');

            $query="INSERT INTO `contactus_table`(`FEED_ID`, `NAME`, `EMAIL_ID`, `PHONE`, `MESSAGE`, `DATE/TIME`) VALUES ('','$name','$email','$phone','$message','$a')";
			$sql= mysqli_query($con,$query);

			if($sql){
				echo"<script>alert('Thanks For Your Feedback')</script>";
			}
			else{
				echo"<script>alert('Something Went Wrong')</script>";
			}

        }
    ?>
	<!-- partial -->
	<script src="./script.js"></script>

</body>

</html>