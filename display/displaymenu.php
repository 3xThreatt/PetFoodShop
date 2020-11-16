<?php
include("config.php");//includes file required to connect to external DB //

$sql = "select image from MenuItems where menuid=1";//defines SQL query used to find the required field
$result = mysqli_query($con,$sql);//creates the query with configuration information from config.php //
$row = mysqli_fetch_array($result);//fetches all data returned from query

$image = $row['image'];//applies fetched row with the correct field name and stores it in variable
$image_src = "menuimages/".$image; //appends absolute file directory onto the variable to find image src


$sql2 = "select content from MenuItems where menuid=1";//defines SQL query used to find the required field
$result2 = mysqli_query($con,$sql2);//creates the query with configuration information from config.php //
$row2 = mysqli_fetch_array($result2);//fetches all data returned from query

$content2 = $row2['content'];//applies fetched row with the correct field name and stores it in variable


$sql3 = "select menuprice from MenuItems where menuid=1";//defines SQL query used to find the required field
$result3 = mysqli_query($con,$sql3);//creates the query with configuration information from config.php //
$row3 = mysqli_fetch_array($result3);//fetches all data returned from query

$money2 = $row3['menuprice']; //applies fetched row with the correct field name and stores it in variable

?>
