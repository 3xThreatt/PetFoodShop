<?php
include("config.php");

$sql = "select productQTY from Product where productID=1";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$productQTY = $row['productQTY'];


$quantityget = "UPDATE `Product` SET `productQTY` = '$productQTY'-'$_POST['qty-1']' WHERE `Product`.`productID` = 1";
$quantityresult = mysqli_query($con,$quantityget);
$fetched = mysqli_fetch_array($quantityresult);

$toprint = $fetched['productQTY']


?>
<?php echo $_POST['qty-1']; ?>
<html>
<head>
	<title></title>
</head>
<body>
<form name="form" action="updateQuantity.php" method="post">
  <input type="text" name="qty-1" id="qty-1" class="qty" value="1" formaction="updateQuantity.php" />
              </div>
            </form>
</body>
</html>