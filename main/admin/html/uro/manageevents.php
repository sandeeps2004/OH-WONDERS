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

			<a href="manageevents.php">Forms</a>
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

					<div class="panel-options">
						<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
						<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
						<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
					</div>
				</div>

				<div class="panel-body">

					<form role="form" method="POST" class="form-horizontal form-groups-bordered" enctype="multipart/form-data">

						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Event Date</label>

							<div class="col-sm-5">
								<input type="date" class="form-control" id="field-1" placeholder="Date of Event" name="edate" min="2022-03-25" required >
							</div>
						</div>
						
						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Event Time</label>

							<div class="col-sm-5">
								<input type="time" class="form-control" id="field-1" placeholder="Time of Event" name="etime" required>
							</div>
						</div>
						

						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Event Name:</label>

							<div class="col-sm-5">
								<input type="text" class="form-control" id="field-1" placeholder="Name Of Event" name="ename" required>
							</div>
						</div>
						
						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Ticket Link:</label>

							<div class="col-sm-5">
								<input type="url" class="form-control" id="field-1" placeholder="Ticket Link" name="elink" required>
							</div>
						</div>

						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">Venue Details:</label>

							<div class="col-sm-5">
								<input type="text" class="form-control" id="field-1" placeholder="Details of Venue" name="edes" required>
							</div>
						</div>

						<div class="form-group">
							<label for="field-1" class="col-sm-3 control-label">File Field</label>

							<div class="col-sm-5">
								<input type="file" class="form-control" id="field-file" placeholder="Placeholder" name="eimg" accept="image/jpg,image/png,image/jpeg" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-5">
								<button type="submit" class="btn btn-default" name="eadd">Add Event</button>
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
	if (isset($_POST['eadd'])) {
		$ename = $_POST['ename'];
		$edate = $_POST['edate'];
		$etime = $_POST['etime'];
		$edes =  $_POST['edes'];
		$elink = $_POST['elink'];
		$filename = addslashes($_FILES['eimg']['name']);
		$tmpname = addslashes($_FILES['eimg']['tmp_name']);

		date_default_timezone_set("Asia/Calcutta");
		$iname = (string)(date("YmdHis"));

		

		$extension = pathinfo($filename, PATHINFO_EXTENSION);
		$image_path = "$iname.$extension";

		if (isset($filename)) {
			move_uploaded_file($_FILES['eimg']['tmp_name'], 'e_image/' . $image_path);
		}
		$sql = "INSERT INTO `events_table`(`EVENT_ID`, `EVENT_NAME`,`EVENT_IMG` ,`VENUE_DETAILS`, `EVENT_DATE`, `EVENT_TIME`,`EVENT_LINK`, `EVENT_STATUS`) VALUES ('','$ename','$image_path','$edes','$edate','$etime','$elink','')" ;
		$q = mysqli_query($con, $sql);
		if ($q) {
			$_SESSION['ohwonder'] = $lemail;
				echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
                echo '<meta http-equiv=Refresh content="0;url=manageevents.php?reload=1">';
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