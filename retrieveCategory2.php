<?php
include("config.php");

$command = "select title from MenuItems where menuid=5";
$return = mysqli_query($con,$command);
$bar = mysqli_fetch_array($return);

$secondCategory = $bar['title'];

?>