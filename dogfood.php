<?php 
include("config.php");  
include("retrieveCategory.php");
include("retrieveCategory2.php");
include("retrieveCategory3.php");
include("retrieveCategory4.php");
?>
<html>
   <div class="header">
      <head class="head">
         <link rel="stylesheet" href="External.css">
                  <!-- Links CSS-->
         <title>
            Dog Food
         </title>
         <div class="wrapper">
            <a href="index.php"><img id="logo" src="logoBW.png" alt='Logo'></a>
            <h1 id="title"> Pet Food Shop</h1>
            <h3 id="supportingtitle">Fresh Food, Fresh Moments.</h3>
            <!--Logo, title, subtitle-->
            <div>
            </div>
            </ul>
      </head>
      </div>
      <div class="content">
         <body>
            <!-- Promts three javascript functions on page load-->
            <ul id="centerNAVul">
               <!--navigation bar -->
               <li id="centerNAVli"><a id="centerNAVa" href="index.php">Home</a></li>
               <li id="centerNAVli"><a id="centerNAVa" href="shop.php">Shop</a></li>
               <li id="centerNAVli"><a id="centerNAVa" href="contact.php">Contact Us</a></li>
               <li id="centerNAVli"><a id="centerNAVa" href="login.html">Log In</a></li>
            </ul>
            <div class="leftpanel">
               <!-- Left panel where categories, filters and invoice are available-->
               <ul id="leftpanelUL">
               <li class="leftpanelLI">Species</li>
               <li class="leftpanel-LI"><a href="dogfood.php" class="leftpanelA"><?php echo $firstCategory ?><a></li>
               <li class="leftpanel-LI"><a href="catfood.php" class="leftpanelA"><?php echo $secondCategory ?></a></li>
               <li class="leftpanel-LI"><a href="birdfood.php" class="leftpanelA"><?php echo $thirdCategory ?></a></li>
               <li class="leftpanel-LI"><a href="fishfood.php" class="leftpanelA"><?php echo $fourthCategory ?></a></li>
               <li class="leftpanelLI">Price</li>
               <!-- Javascript slider which allows for filter in price-->
               <li class="slider-LI">
                  <input type="range" min="0" max="500" value="1" class="slider" id="myRange">
                  <p class="span">$0      -$</p>
                  <span id="demo" class="span"></span>
               </li>
            </a>
         </a>
      </li>
   </ul> 

</div>
   <div <?php include("display/displaymenu.php"); 
   include("display/displaymenu2.php");
      include("display/displaymenu3.php");
         include("display/displaymenu4.php");
                                           ?>>
         </div>

         <div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src='<?php echo $image_src;  ?>' width="600" height="400">
  </a>
  <div class="desc"><?php echo $content2;  ?><br>$<?php echo $money2; ?></div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
   <img src='<?php echo $image_src2;  ?>' width="600" height="400">
  </a>
  <div class="desc"><?php echo $content3;  ?><br>$<?php echo $money3; ?></div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
     <img src='<?php echo $image_src3;  ?>' width="600" height="400">
  </a>
  <div class="desc"><?php echo $content4;  ?><br>$<?php echo $money4; ?></div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src='<?php echo $image_src4;  ?>' width="600" height="400">
  </a>
  <div class="desc"><?php echo $content5;  ?><br>$<?php echo $money5; ?></div>
</div>

<style type="text/css">
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  background-color: #f4f4f4;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
</body>

      <div id="push">&nbsp;</div>  <!---forces footer down -->
      <div class="footer">
         <?php include 'footer.php';?>
      </div>
   </div>
</html>