<?php
include("config.php");
$sql2 = "select name from images where id=2";
$result2 = mysqli_query($con,$sql2);
$row2 = mysqli_fetch_array($result21);

$image2 = $row2['name'];
$image_src2 = "uploads/".$image2;

?>