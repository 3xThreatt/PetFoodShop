<?php
include("config.php");
$sql3 = "select name from images where id=3";
$result3 = mysqli_query($con,$sql3);
$row3 = mysqli_fetch_array($result3);

$image3 = $row3['name'];
$image_src3 = "uploads/".$image3;

?>