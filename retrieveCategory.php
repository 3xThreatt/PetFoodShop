<?php
include("config.php");//includes file required to connect to external DB //

$command = "select title from MenuItems where menuid=1";//defines SQL query used to find the required field
$return = mysqli_query($con,$command);//creates the query with configuration information from config.php //
$bar = mysqli_fetch_array($return);//fetches all data returned from query

$firstCategory = $bar['title'];//applies fetched row with the correct field name and stores it in variable

?>