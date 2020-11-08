<?php
include("config.php");

$sql = "select productImage from Product where productID=12";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['productImage'];
$product_src = "menuimages/".$image;


$sql2 = "select productName from Product where productID=12";
$result2 = mysqli_query($con,$sql2);
$row2 = mysqli_fetch_array($result2);

$productName = $row2['productName'];


$sql3 = "select productContent from Product where productID=12";
$result3 = mysqli_query($con,$sql3);
$row3 = mysqli_fetch_array($result3);

$productContent = $row3['productContent'];


$sql4 = "select productPrice from Product where productID=12";
$result4 = mysqli_query($con,$sql4);
$row4 = mysqli_fetch_array($result4);

$productPrice = $row4['productPrice'];

$sql5 = "select productQTY from Product where productID=12";
$result5 = mysqli_query($con,$sql5);
$row5 = mysqli_fetch_array($result5);

$productQTY = $row5['productQTY'];


?>
