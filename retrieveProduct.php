<?php
include("config.php");//includes file required to connect to external DB //

$sql = "select productImage from Product where productID=1";//defines SQL query used to find the required field
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['productImage'];
$product_src = "menuimages/".$image;


$sql2 = "select productName from Product where productID=1";//defines SQL query used to find the required field
$result2 = mysqli_query($con,$sql2);//creates the query with configuration information from config.php //
$row2 = mysqli_fetch_array($result2);//fetches all data returned from query

$productName = $row2['productName'];//applies fetched row with the correct field name and stores it in variable


$sql3 = "select productContent from Product where productID=1";//defines SQL query used to find the required field
$result3 = mysqli_query($con,$sql3);//creates the query with configuration information from config.php //
$row3 = mysqli_fetch_array($result3);//fetches all data returned from query

$productContent = $row3['productContent'];//applies fetched row with the correct field name and stores it in variable


$sql4 = "select productPrice from Product where productID=1";//defines SQL query used to find the required field
$result4 = mysqli_query($con,$sql4);//creates the query with configuration information from config.php //
$row4 = mysqli_fetch_array($result4);//fetches all data returned from query

$productPrice = $row4['productPrice'];//applies fetched row with the correct field name and stores it in variable

$sql5 = "select productQTY from Product where productID=1";//defines SQL query used to find the required field
$result5 = mysqli_query($con,$sql5);//creates the query with configuration information from config.php //
$row5 = mysqli_fetch_array($result5);//fetches all data returned from query

$productQTY = $row5['productQTY'];//applies fetched row with the correct field name and stores it in variable


?>
