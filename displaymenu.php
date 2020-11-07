<?php
include("config.php");

$title = "select menuid from MenuItems where id=1";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$menutitle = $row['title'];
$menuimage = $row['image'];
$menucontent = $row['content']
$menuimage_src = "menuimages/".$image;
$menuprice = $row['menuprice']
?>

