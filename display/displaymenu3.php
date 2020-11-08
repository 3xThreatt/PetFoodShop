<?php
include("config.php");

$sql = "select image from MenuItems where menuid=3";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['image'];
$image_src3 = "menuimages/".$image;

$sql2 = "select content from MenuItems where menuid=3";
$result2 = mysqli_query($con,$sql2);
$row2 = mysqli_fetch_array($result2);

$content4 = $row2['content'];


$sql3 = "select menuprice from MenuItems where menuid=3";
$result3 = mysqli_query($con,$sql3);
$row3 = mysqli_fetch_array($result3);

$money4 = $row3['menuprice'];

?>
