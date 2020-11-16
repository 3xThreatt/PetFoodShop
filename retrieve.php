<?php
include("config.php");      //includes file required to connect to external DB //

$sql = "select name from images where id=1";     //defines SQL query used to find the required field
$result = mysqli_query($con,$sql);        //creates the query with configuration information from config.php //
$row = mysqli_fetch_array($result);		//fetches all data returned from query

$image = $row['name']; 		//applies fetched row with the correct field name
$image_src = "uploads/".$image; //appends absolute file directory onto the variable to find image src

?>
