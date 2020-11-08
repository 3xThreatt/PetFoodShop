<?php
include("config.php");

$command = "select title from MenuItems where menuid=13";
$return = mysqli_query($con,$command);
$bar = mysqli_fetch_array($return);

$fourthCategory = $bar['title'];

?>