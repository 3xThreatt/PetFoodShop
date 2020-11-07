<?php
include("config.php");

$sql = "select image from MenuItems where menuid=15";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['image'];
$image_src15 = "menuimages/".$image;

?>
