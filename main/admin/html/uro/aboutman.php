<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <link rel="icon" href="assets/images/favicon.ico">

    <title>Neon | Data Tables</title>

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
    <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
    <?php
    include "sidebar.php";
    ?>
    <?php
    include "adminheader.php"
    ?>

    <ol class="breadcrumb bc-3">
        <li>
            <a href="index.php"><i class="fa-home"></i>Home</a>
        </li>
        <li>

            <a href="aboutman.php">Tables</a>
        </li>
        <li class="active">

            <strong>Data Tables</strong>
        </li>
    </ol>

    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var $table1 = jQuery('#table-1');

            // Initialize DataTable
            $table1.DataTable({
                "aLengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                "bStateSave": true
            });

            // Initalize Select Dropdown after DataTables is created
            $table1.closest('.dataTables_wrapper').find('select').select2({
                minimumResultsForSearch: -1
            });
        });
    </script>


    <script type="text/javascript">
        jQuery(window).load(function() {
            var $table2 = jQuery("#table-2");

            // Initialize DataTable
            $table2.DataTable({
                "sDom": "tip",
                "bStateSave": false,
                "iDisplayLength": 8,
                "aoColumns": [{
                        "bSortable": false
                    },
                    null,
                    null,
                    null,
                    null
                ],
                "bStateSave": true
            });

            // Highlighted rows
            $table2.find("tbody input[type=checkbox]").each(function(i, el) {
                var $this = $(el),
                    $p = $this.closest('tr');

                $(el).on('change', function() {
                    var is_checked = $this.is(':checked');

                    $p[is_checked ? 'addClass' : 'removeClass']('highlight');
                });
            });

            // Replace Checboxes
            $table2.find(".pagination a").click(function(ev) {
                replaceCheckboxes();
            });
        });

        // Sample Function to add new row
        var giCount = 1;

        function fnClickAddRow() {
            jQuery('#table-2').dataTable().fnAddData(['<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount + ".1", giCount + ".2", giCount + ".3", giCount + ".4"]);
            replaceCheckboxes(); // because there is checkbox, replace it
            giCount++;
        }
    </script>




    <!-- <a href="javascript: fnClickAddRow();" class="btn btn-primary">
        <i class="entypo-plus"></i>
        Add Row
    </a> -->



    <!-- <h3>Table with Column Filtering</h3> -->


    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var $table3 = jQuery("#table-3");

            var table3 = $table3.DataTable({
                "aLengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ]
            });

            // Initalize Select Dropdown after DataTables is created
            $table3.closest('.dataTables_wrapper').find('select').select2({
                minimumResultsForSearch: -1
            });

            // Setup - add a text input to each footer cell
            $('#table-3 tfoot th').each(function() {
                var title = $('#table-3 thead th').eq($(this).index()).text();
                $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
            });

            // Apply the search
            table3.columns().every(function() {
                var that = this;

                $('input', this.footer()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });
        });
    </script>


    </table>

    <br />


    <h3>Exporting Table Data</h3>
    <br />


    <script type="text/javascript">
        jQuery(document).ready(function($) {
            var $table4 = jQuery("#table");

            $table4.DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });
    </script>

    <table class="table table-bordered datatable" id="table">
        <thead>
            <tr>
                <th>SR NO.</th>
                <th>NAME</th>
                <th>Year</th>
                <th>Image</th>
                <th>Spotify Link</th>
                <th>Youtube Link</th>
                <th>Action</th>
                <!-- <th>CSS grade</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connection.php';

            if ($con) {
                $db = mysqli_select_db($con, "ohwonder");
                if ($db) {
                    $sql = "SELECT * FROM about_table where STATUS=0";
                    $q = mysqli_query($con, $sql);
                    $i = 1;
                    while ($row = mysqli_fetch_array($q)) {
            ?>
                        <tr class="odd gradeX">
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['NAME']; ?></td>
                            <td><?php echo "<img src= abt_image/".$row['PHOTO']." height='75px'>";?></td>
                            <td><?php echo $row['DESCRIPTION']; ?></td>
                            <td><?php echo $row['FB']; ?></td><td><?php echo $row['INSTAGRAM']; ?></td>
                            <td>


                                <a href="?del=<?php echo $row['ABOUT_ID']; ?>" onclick="return confirm('Are You Sure You Want to Delete This Record?');"><button class="btn btn-danger btn-sm btn-icon icon-left">
                                        <i class="entypo-cancel"></i>
                                        Delete
                                    </button>
                                </a>

                            </td>


                        </tr>
            <?php
                    }
                }
            }
            ?>

        </tbody>
        <tfoot>
            <tr>
                <!-- <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th> -->
                <!-- <th>Engine version</th>
                <th>CSS grade</th> -->
            </tr>
        </tfoot>
    </table>

    <!-- DELETE LOGIC  -->
    <?php
    if (isset($_GET['del'])) {
        $query = "UPDATE about_table SET STATUS= '1' WHERE ABOUT_ID =".$_GET['del']."";
        // $query = "UPDATE login_table SET L_ID =".$_GET['del']." WHERE 1";
        $res = mysqli_query($con, $query);
        if ($res) {
            if (!isset($_GET['reload'])) {
                $_SESSION['ohwonder'] = $lemail;
                echo '<meta http-equiv=Refresh content="0;url=aboutman.php?reload=1">';
                // echo"DELEtED";
            }
        }
    }
    ?>

    <br />
    <!-- Footer -->

    <?php
    include "adminfooter.php";
    ?>





    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="assets/js/datatables/datatables.css">
    <link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
    <link rel="stylesheet" href="assets/js/select2/select2.css">

    <!-- Bottom scripts (common) -->
    <script src="assets/js/gsap/TweenMax.min.js"></script>
    <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/joinable.js"></script>
    <script src="assets/js/resizeable.js"></script>
    <script src="assets/js/neon-api.js"></script>


    <!-- Imported scripts on this page -->
    <script src="assets/js/datatables/datatables.js"></script>
    <script src="assets/js/select2/select2.min.js"></script>
    <script src="assets/js/neon-chat.js"></script>


    <!-- JavaScripts initializations and stuff -->
    <script src="assets/js/neon-custom.js"></script>


    <!-- Demo Settings -->
    <script src="assets/js/neon-demo.js"></script>

</body>

</html>