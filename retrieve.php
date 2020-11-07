<?php
include("config.php");

$sql = "select name from images where id=1";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['name'];
$image_src = "uploads/".$image;

$sql2 = "select name from images where id=2";
$result2 = mysqli_query($con,$sql2);
$row2 = mysqli_fetch_array($result21);

$image2 = $row2['name'];
$image_src2 = "uploads/".$image2;

$sql3 = "select name from images where id=3";
$result3 = mysqli_query($con,$sql2);
$row3 = mysqli_fetch_array($result21);

$image3 = $row3['name'];
$image_src3 = "uploads/".$image3;


?>