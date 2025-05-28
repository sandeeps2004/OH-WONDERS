<?php
 echo"<script>alert('Logout Successful');</script>";
 session_start();
 unset($_SESSION['ohwonder']);
 session_destroy();
 header("location:login.php");

?>