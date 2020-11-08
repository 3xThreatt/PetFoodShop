<?php
include("config.php");

$command = "select title from MenuItems where menuid=9";
$return = mysqli_query($con,$command);
$bar = mysqli_fetch_array($return);

$thirdCategory = $bar['title'];

?>