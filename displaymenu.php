<?php
include("config.php");

$title = "select menuid from MenuItems where menuid=1";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$menutitle = $row['title'];
$menuimage = $row['image'];
$menucontent = $row['content']
$menuimage_src = "menuimages/".$image;
$menuprice = $row['menuprice']
?>

   <div class="menu-tiles" <?php include("displaymenu.php");   ?>>
      <p class="menu-title"><?php echo $menutitle; ?></p>
      <img class="menu-image" src='<?php echo $menuimage_src;  ?>' >
      <p class="menu-content"><?php echo $menuprice;   ?></p>
      <p class="menu-content"><?php echo $menucontent;   ?></p>
   </div>