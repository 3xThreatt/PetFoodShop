<?php
include("config.php");

$command = "select title from MenuItems where menuid=1";
$return = mysqli_query($con,$command);
$bar = mysqli_fetch_array($return);

$firstCategory = $bar['title'];




$command2 = "select title from MenuItems where menuid=5";
$return2 = mysqli_query($con,$command2);
$bar2 = mysqli_fetch_array($return2);

$secondCategory = $bar2['title']




$command3 = "select title from MenuItems where menuid=9";
$return3 = mysqli_query($con,$command3);
$bar3 = mysqli_fetch_array($return3);

$thirdCategory = $bar3['title']





$command4 = "select title from MenuItems where menuid=13";
$return4 = mysqli_query($con,$command4);
$bar4 = mysqli_fetch_array($return4);

$fourthCategory = $bar4['title']


?>