<!DOCTYPE html>
<html>
   <div class="header">
      <head class="head">
         <link rel="stylesheet" href="External.css">
         <?php include("config.php");?>
         <!-- Links CSS-->
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
         <title>
            Shop
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
         <body onload="moveAd(), moveText(), invoice()">
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
               <li class="leftpanel-LI"><a href="dogfood.html" class="leftpanelA">Dog Food &#9675;<a></li>
               <li class="leftpanel-LI"><a href="catfood.html" class="leftpanelA">Cat Food  &#9675;</a></li>
               <li class="leftpanel-LI"><a href="birdfood.html" class="leftpanelA">Bird Food  &#9675;</a></li>
               <li class="leftpanel-LI"><a href="fishfood.html" class="leftpanelA">Fish Food  &#9675;</a></li>
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
<body>   

   <div class="menu-tiles" <?php include("displaymenu.php");   ?>>
      <p class="menu-title"><?php echo $menutitle; ?></p>
      <img class="menu-image" src='<?php echo $menuimage_src;  ?>' >
      <p class="menu-content"><?php echo $menuprice;   ?></p>
      <p class="menu-content"><?php echo $menucontent;   ?></p>
   </div>

</div>
   <div id="push">&nbsp;</div> <!--forces footer down -->
   </body>
   <div class="footer">
      <br>
      <br>
      <a href="linktree.com"><img src="media.png" height="22%" width="22%" style="float: left;"></a>
      <a href="index.php"><img src="LogoColour.png" height="10%" width="10%" style="float: right;"></a>
      <ul class="footerlinks">
      <!--Quick links for easy navigation -->
      <li class="footerLI"><a href="index.php" class="footerA">Home</a></li>
      <li class="footerLI"><a href="legal.html" class="footerA">Legal</a></li>
      <li class="footerLI"><a href="shop.php" class="footerA">Shop</a></li>
      <li class="footerLI"><a href="contact.php" class="footerA">Contact Us</a></li>
      <li class="footerLI"><a href="login.html" class="footerA">Login</a></li>
      <li class="footerLI"><a href="login.html" class="footerA">Signup</a></li>
      <br>
   </div>
   </div>
</body>
</html>  
      <div id="push">&nbsp;</div>  <!---forces footer down -->
      </body>
      <div class="footer">
         <?php include 'footer.php';?>
      </div>
   </div>
</html>