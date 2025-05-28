<?php
    $con=mysqli_connect('localhost','root','',);
    if(!$con){
        echo"Server Not Connected<br/>";
    }
    $db=mysqli_select_db($con,'ohwonder');
    if(!$db){
        echo"Database Not Connected";
    }
?>