<?php
	include "connection.php";
	session_start();
?>
<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>Log In / Sign Up</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
	<link rel="stylesheet" href="css/loginform.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script><link rel="icon" href="images/favioh.ico" type="image/x-icon">

</head>

<body>
	
	<div class="logo-container">
		<center><a href="home.php"><img src="images/ohmainlogo1.png" class="logo" width="250px"></a></center>
	</div>
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
						<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
						<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3 header-title">Log In</h4>
											<form method="post">
												<div class="form-group">
													<input type="email" name="lemail" class="form-style" placeholder="Your Email" autocomplete="off">
													<i class="input-icon uil uil-at"></i>
												</div>
												<div class="form-group mt-2">
													<input type="password" name="lpass" class="form-style" placeholder="Your Password" autocomplete="off">
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<button type="submit" class="btn mt-4" name="lsubmit">submit</button>
												<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Dont Have Account? Go to Sign Up</a></p>
											</form>
										</div>
									</div>
								</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3 header-title" style="padding-top:20px; padding-bottom:-10px;">Sign Up</h4>
											<form method="POST">
												<div class="form-group">
													<input type="text" name="rname" class="form-style" placeholder="Your Full Name" autocomplete="off" required>
													<i class="input-icon uil uil-user"></i>
												</div>
												<div class="form-group mt-2">
													<input type="email" name="remail" class="form-style" placeholder="Your Email" autocomplete="off" required>
													<i class="input-icon uil uil-at"></i>
												</div>
												<div class="form-group mt-2">
													<input type="password" name="rpass" class="form-style" placeholder="Your Password" autocomplete="off" required>
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<div class="form-group mt-2">
													<input type="password" name="rpass1" class="form-style" placeholder="Confirm Password" autocomplete="off" required>
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<input type="submit" class="btn mt-4" name="rsubmit">
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
	<!-- Sign Up Logic -->
	<?php
	if (isset($_POST['rsubmit'])) {
		$rname = $_POST['rname'];
		$email = $_POST['remail'];
		$p1 = $_POST['rpass'];
		$p2 = $_POST['rpass1'];
		$ro = '1';
		date_default_timezone_set('Asia/calcutta');
		$a = date('Y-m-d H:i:s');
		$check_email = mysqli_query($con, "SELECT EMAIL_ID FROM login_table where EMAIL_ID = '$email' AND ROLE='1' AND STATUS= '0' ");
		if (mysqli_num_rows($check_email) > 0) {
			echo  '<script>alert("Email Already Exists!");</script>';
		} 
		else {
			if ($p1 == $p2) {
				$query = "INSERT INTO login_table(NAME,EMAIL_ID,PASSWORD,ROLE)   VALUES ('$rname','$email','$p1','$ro')";
				$sql = mysqli_query($con, $query);
				if ($sql) {
					echo '<script>alert("Registered Successfully Login To Continue")</script>';
					$query = "INSERT INTO login_table SET STATUS = '0' WHERE L_ID = " . $_POST['rsubmit'] . "";
				} else {
					echo '<script>alert("Something Went Wrong")</script>';
				}
			} else {
				echo '<script>alert("Password do not Match")</script>';
			}
		}
	}
	?>

	<!-- Sign Up End -->

	<?php
	if (isset($_POST['lsubmit'])) {
		$lemail = $_POST['lemail'];
		$lpass = $_POST['lpass'];


		$sql = "SELECT * FROM login_table WHERE EMAIL_ID='$lemail' AND PASSWORD='$lpass' AND STATUS=0";
		$result = mysqli_query($con, $sql);
		$count = mysqli_num_rows($result);
		if ($count == 1) 
		{
			echo "sadasdsad";
			$user = mysqli_fetch_array($result);
			$role = $user['ROLE'];
			$_SESSION['ohwonder'] = $lemail;
			if($role==1)
			{
				echo "<script>alert('Login Success!');</script>";
			
				echo '<meta http-equiv=Refresh content="0;url=user/home.php">';		
			}
			else
			{
				echo "<script>alert('Login Success!');</script>";
			
				echo '<meta http-equiv=Refresh content="0;url=admin/html/uro/index.php">';
			}
			
				
		}
		else
		{
				echo"<script>alert('INVALID!');</script>";
		}
	}


	// 	$aemail="oh@admin";
	// 	$apass="oh12";

	// 	$sql = "SELECT * FROM login_table WHERE EMAIL_ID='" . $lemail . "'AND PASSWORD='" . $lpass . "' AND ROLE=1 AND STATUS=0";
	// 	$result = mysqli_query($con, $sql);
	// 	$count = mysqli_num_rows($result);
	// 	if ($count == 1) {
	// 		$_SESSION['ohwonder'] = $lemail;
	// 		echo "<script>alert('Login Success!');</script>";
	// 		if (!isset($_GET['reload'])) {
	// 			echo '<meta http-equiv=Refresh content="0;url=user/home.php?reload=1">';
	// 		}
	// 		else{
	// 			echo "<script>alert('User Login Failed!');</script>";
	// 		}
	// 	} 
	// 	else{
	// 		if($sql1="SELECT * FROM login_table WHERE EMAIL_ID='".$aemail."' AND PASSWORD='".$apass."' AND ROLE=0 AND STATUS=0"){
	// 			$result1 = mysqli_query($con,$sql1);
	// 			if(!isset($_GET['reload'])){
	// 				$_SESSION['ohwonder']=$aemail;
	// 				echo '<meta http-equiv=Refresh content="0;url=admin/html/uro/index.php?reload=1">';
	// 			}
	// 			else {
	// 				echo "<script>alert('Admin Login Failed!');</script>";
	// 				}
	// 		}
	// 	}
	// }
	?>
	<!-- partial -->
	<script src="./script.js"></script>

</body>

</html>