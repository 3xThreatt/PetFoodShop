<?php include("config.php");  

?>
<html>
   <div class="header">
      <head class="head">
         <link rel="stylesheet" href="External.css">
                  <!-- Links CSS-->
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

</div>
   <div id="banner-pictures" <?php include("displaymenu.php"); ?>>
            <img src='<?php echo $image_src;  ?>' >
         </div>
</body>

      <div id="push">&nbsp;</div>  <!---forces footer down -->
      <div class="footer">
         <?php include 'footer.php';?>
      </div>
   </div>
</html>