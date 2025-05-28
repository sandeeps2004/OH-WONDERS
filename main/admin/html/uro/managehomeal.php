<?php
	include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>Neon | Forms</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>

<body class="page-body" data-url="http://neon.dev">
	<?php
	include "sidebar.php";
	?>
	<?php
	include "adminheader.php";
	?>
	<ol class="breadcrumb bc-3">
		<li>
			<a href="index.php"><i class="fa-home"></i>Home</a>
		</li>
		<li>

			<a href="managehomeal.php">Forms</a>
		</li>
		<li class="active">

			<strong>Basic Elements</strong>
		</li>
	</ol>

	<h2>Basic Form Elements</h2>
	<br />


	<div class="row">
		<div class="col-md-12">

			<div class="panel panel-primary" data-collapsed="0">

				<div class="panel-heading">
					<div class="panel-title">
						Default Form Inputs
					</div>

					<!-- <div class="panel-options">
						<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
						<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
					</div> -->
				</div>

				<div class="panel-body">

					<form role="form" method="POST" class="form-horizontal form-groups-bordered" enctype="multipart/form-data">

						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Home Album Title:</label>

							<div class="col-sm-5">
								<input type="text" class="form-control" id="field-1" placeholder="Title of Album" name="hname" required>
							</div>
						</div>

						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Home Album Year:</label>

							<div class="col-sm-5">
								<input type="date" class="form-control" id="field-1" placeholder="Year Of Album" name="hyear" min="2015-03-25" required>
							</div>
						</div>

						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Audio File 1:</label>

							<div class="col-sm-5">
								<input type="text" class="form-control" id="field-1" placeholder="Audio File 1" name="hat1" required>
							</div>
						</div>

						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label"></label>

							<div class="col-sm-5">
								<input type="file" class="form-control" id="field-file" placeholder="Placeholder" name="haudio1" accept="audio/*" required>
							</div>
						</div>

						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Audio File 2:</label>

							<div class="col-sm-5">
								<input type="text" class="form-control" id="field-1" placeholder="Audio File 1" name="hat2" required>
							</div>
						</div>

						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label"></label>

							<div class="col-sm-5">
								<input type="file" class="form-control" id="field-file" placeholder="Placeholder" name="haudio2" accept="audio/*" required>
							</div>
						</div>

						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Audio File 3:</label>

							<div class="col-sm-5">
								<input type="text" class="form-control" id="field-1" placeholder="Audio File 3" name="hat3" required>
							</div>
						</div>

						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label"></label>

							<div class="col-sm-5">
								<input type="file" class="form-control" id="field-file" placeholder="Placeholder" name="haudio3" accept="audio/*" required>
							</div>
						</div>

						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Audio File 4:</label>

							<div class="col-sm-5">
								<input type="text" class="form-control" id="field-1" placeholder="Audio File 4" name="hat4" required>
							</div>
						</div>

						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label"></label>

							<div class="col-sm-5">
								<input type="file" class="form-control" id="field-file" placeholder="Placeholder" name="haudio4" accept="audio/*" required>
							</div>
						</div>


                        <div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Image File Field:</label>

							<div class="col-sm-5">
								<input type="file" class="form-control" id="field-file" placeholder="Placeholder" name="himg" accept="image/*" required>
							</div>
						</div>

                        <div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Home Spotify URL:</label>

							<div class="col-sm-5">
								<input type="url" class="form-control" id="field-1" placeholder="Spotify URL" name="hslink" required>
							</div>
						</div>

                        <div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Home Youtube URL:</label>

							<div class="col-sm-5">
								<input type="url" class="form-control" id="field-1" placeholder="Youtube URL" name="hylink" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-5">
								<button type="submit" class="btn btn-default" name="hadd">Add To Home</button>
							</div>
						</div>
					</form>

				</div>

			</div>

		</div>
	</div>
	<!-- Footer -->
	<?php
	include "adminfooter.php";
	?>
	</div>

	<?php
	if (isset($_POST['hadd'])) {
		$hname = $_POST['hname'];
		$hyear = $_POST['hyear'];
		$hslink = $_POST['hslink'];
		$hylink = $_POST['hylink'];

		$hat1= $_POST['hat1'];
		$hat2 = $_POST['hat2'];
		$hat3 = $_POST['hat3'];
		$hat4 = $_POST['hat4'];
		
		// FOR IMAGES
		$filename = addslashes($_FILES['himg']['name']);
		$tmpname = addslashes($_FILES['himg']['tmp_name']);

		// FOR AUDIO
		$filename1 = addslashes($_FILES['haudio1']['name']);
		// $tmpname1 = addslashes($_FILES['haudio1']['tmp_name']);

		$filename2 = addslashes($_FILES['haudio2']['name']);
		// $tmpname2 = addslashes($_FILES['haudio2']['tmp_name']);

		$filename3 = addslashes($_FILES['haudio3']['name']);
		// $tmpname3 = addslashes($_FILES['haudio3']['tmp_name']);

		$filename4 = addslashes($_FILES['haudio4']['name']);
		// $tmpname4 = addslashes($_FILES['haudio4']['tmp_name']);



		date_default_timezone_set("Asia/Calcutta");
		$iname = (string)(date("YmdHis"));

		// Images
		$extension = pathinfo($filename, PATHINFO_EXTENSION);
		$image_path = "$iname.$extension";

		// Audio
		// $extension1 = pathinfo($filename1, PATHINFO_EXTENSION);
		// $image_path1 = "$iname.$extension1";

		// $extension2 = pathinfo($filename2, PATHINFO_EXTENSION);
		// $image_path2 = "$iname.$extension2";

		// $extension3 = pathinfo($filename3, PATHINFO_EXTENSION);
		// $image_path3 = "$iname.$extension3";

		// $extension4 = pathinfo($filename4, PATHINFO_EXTENSION);
		// $image_path4 = "$iname.$extension4";


		if (isset($filename)) {
			move_uploaded_file($_FILES['himg']['tmp_name'], 'h_img/' . $image_path);
			move_uploaded_file($_FILES['haudio1']['tmp_name'], 'audio/' . $filename1);
			move_uploaded_file($_FILES['haudio2']['tmp_name'], 'audio/' . $filename2);
			move_uploaded_file($_FILES['haudio3']['tmp_name'], 'audio/' . $filename3);
			move_uploaded_file($_FILES['haudio4']['tmp_name'], 'audio/' . $filename4);
		}
		$sql = "INSERT INTO `home_table`(`home_id`, `name`, `year`, `slink`, `ytlink`, `img`, `audio1title`, `audio`, `audio2title`, `audio2`, `audio3title`, `audio3`, `audio4title`, `audio4`, `date/time`, `status`) VALUES ('','$hname','$hyear','$hslink','$hylink','$image_path','$hat1','$filename1','$hat2','$filename2','$hat3','$filename3','$hat4','$filename4','','')" ;
		$q = mysqli_query($con, $sql);
		if ($q) {
			$_SESSION['ohwonder'] = $lemail;
				echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
                echo '<meta http-equiv=Refresh content="0;url=managehomeal.php?reload=1">';
		}
	}
	?>

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/bootstrap-switch.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>

</html>