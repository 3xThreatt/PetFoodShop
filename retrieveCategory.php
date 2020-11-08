<?php
include("config.php");

$command = "select title from MenuItems where menuid=1";
$return = mysqli_query($con,$command);
$bar = mysqli_fetch_array($return);

$firstCategory = $bar['title'];

?>