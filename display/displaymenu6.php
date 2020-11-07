<?php
include("config.php");

$sql = "select image from MenuItems where menuid=6";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['image'];
$image_src6 = "menuimages/".$image;

?>
