<?php
include("config.php");//includes file required to connect to external DB //

$sql = "select productQTY from Product where productID=1";//defines SQL query used to find the required field
$result = mysqli_query($con,$sql);//creates the query with configuration information from config.php //
$row = mysqli_fetch_array($result);//fetches all data returned from query

$productQTY = $row['productQTY'];//applies fetched row with the correct field name and stores it in variable


$quantityget = "UPDATE `Product` SET `productQTY` = '$productQTY'-'1' WHERE `Product`.`productID` = 1";//defines SQL query used to find the required field
$quantityresult = mysqli_query($con,$quantityget);//creates the query with configuration information from config.php //
$fetched = mysqli_fetch_array($quantityresult);//fetches all data returned from query

$toprint = $fetched['productQTY']//applies fetched row with the correct field name and stores it in variable


?>
<html>
<head>
	<title></title>
</head>
<body>
<form name="form" action="" method="post">     <!--form used to gather the information required to change SQL data above -->
  <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />     
              </div>
    </form>
</body>
</html>