<?php
$mysqli_hostname = "localhost";
$mysqli_user = "root";
$mysqli_password = "";
$mysqli_database = "lostfound";
$prefix = "";
$con = mysqli_connect($mysqli_hostname, $mysqli_user, $mysqli_password, $mysqli_database);
mysqli_select_db($con, $mysqli_database) or die("could not see database");
?>
