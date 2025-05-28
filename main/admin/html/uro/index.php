<?php
session_start();
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

	<title>Admin Uro | Dashboard</title>

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

<body class="page-body  page-fade" data-url="http://neon.dev">
	<?php
	include "sidebar.php";
	?>

	<?php
	include "adminheader.php"
	?>

	<div class="row">
		<div class="col-sm-3 col-xs-6">
			<?php
			$que = "SELECT * FROM login_table WHERE ROLE=1";
			$answ = mysqli_query($con, $que);
			$count = mysqli_num_rows($answ);
			?>
			<div class="tile-stats tile-red">
				<div class="icon"><i class="entypo-users"></i></div>
				<div class="num" data-start="0" data-end="<?php echo $count; ?>" data-postfix="" data-duration="1800" data-delay="0"><?php echo $count; ?></div>
				<h3>Registered users</h3>
				<p>so far in our blog, and our website.</p>
			</div>

		</div>

		<!-- <div class="col-sm-3 col-xs-6"> -->
<!-- 
			<div class="tile-stats tile-green">
				<div class="icon"><i class="entypo-chart-bar"></i></div>
				<div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500" data-delay="600">0</div>

				<h3>Daily Visitors</h3>
				<p>this is the average value.</p>
			</div> -->

		<!-- </div> -->

		<div class="clear visible-xs"></div>

		<div class="col-sm-3 col-xs-6">
			<?php
				$que = "SELECT MESSAGE FROM contactus_table WHERE STATUS=0";
				$answ = mysqli_query($con, $que);
				$count = mysqli_num_rows($answ);
			?>
			<div class="tile-stats tile-aqua">
				<div class="icon"><i class="entypo-mail"></i></div>
				<div class="num" data-start="0" data-end="<?php echo $count; ?>" data-postfix="" data-duration="1800" data-delay="0"><?php echo $count; ?></div>

				<h3>New Messages</h3>
				<p>total messages / feedback.</p>
			</div>

		</div>

		<div class="col-sm-3 col-xs-6">

			<!-- <div class="tile-stats tile-blue">
				<div class="icon"><i class="entypo-rss"></i></div>
				<div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500" data-delay="1800">0</div>

				<h3>Subscribers</h3>
				<p>on our site right now.</p>
			</div> -->

		</div>
	</div>

	<br />

	<div class="row">

		<div class="col-sm-4">

		</div>

		<div class="col-sm-8">



		</div>

	</div>

	<br />
	<div >
	<p style="margin-bottom :400px;"></p>
</div>
<!-- 
	<script type="text/javascript">
		// Code used to add Todo Tasks
		jQuery(document).ready(function($) {
			var $todo_tasks = $("#todo_tasks");

			$todo_tasks.find('input[type="text"]').on('keydown', function(ev) {
				if (ev.keyCode == 13) {
					ev.preventDefault();

					if ($.trim($(this).val()).length) {
						var $todo_entry = $('<li><div class="checkbox checkbox-replace color-white"><input type="checkbox" /><label>' + $(this).val() + '</label></div></li>');
						$(this).val('');

						$todo_entry.appendTo($todo_tasks.find('.todo-list'));
						$todo_entry.hide().slideDown('fast');
						replaceCheckboxes();
					}
				}
			});
		});
	</script> -->

	

	<!-- Footer -->
	<?php
	include "adminfooter.php";
	?>


	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="assets/js/raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>
	<script src="assets/js/toastr.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>

</html>