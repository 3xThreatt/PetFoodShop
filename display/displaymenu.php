<?php
include("config.php");

$sql = "select image from MenuItems where menuid=1";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$image = $row['image'];
$image_src = "menuimages/".$image;


$sql2 = "select content from MenuItems where menuid=1";
$result2 = mysqli_query($con,$sql2);
$row2 = mysqli_fetch_array($result2);

$image2 = $row2['content'];



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo $image_src;
	echo $image2; ?>
</body>
</html>