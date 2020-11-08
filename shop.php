<?php include("config.php");  

?>
<!DOCTYPE html>
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
   <div id="banner-pictures" <?php include("display/displaymenu.php"); 
   include("display/displaymenu2.php");
      include("display/displaymenu3.php");
         include("display/displaymenu4.php");
            include("display/displaymenu5.php");
               include("display/displaymenu6.php");
                  include("display/displaymenu7.php");
                     include("display/displaymenu8.php");
                        include("display/displaymenu9.php");
                           include("display/displaymenu10.php");
                              include("display/displaymenu11.php");
                                 include("display/displaymenu12.php");
                                    include("display/displaymenu13.php");
                                       include("display/displaymenu14.php");
                                          include("display/displaymenu15.php"); ?>>

</div>

      <img style="height: 200px; width: 150px; " src='<?php echo $image_src;  ?>' >
      <img src='<?php echo $image_src2;  ?>' >
         <img src='<?php echo $image_src3;  ?>' >
            <img src='<?php echo $image_src4;  ?>' >
               <img src='<?php echo $image_src5;  ?>' >
                  <img src='<?php echo $image_src6;  ?>' >
                     <img src='<?php echo $image_src7;  ?>' >
                        <img src='<?php echo $image_src8;  ?>' >
                           <img src='<?php echo $image_src9;  ?>' >
                              <img src='<?php echo $image_src10;  ?>' >
                                 <img src='<?php echo $image_src11;  ?>' >
                                    <img src='<?php echo $image_src12;  ?>' >
                                       <img src='<?php echo $image_src13;  ?>' >
                                          <img src='<?php echo $image_src14;  ?>' >
                                             <img src='<?php echo $image_src15;  ?>' >
         </div>
</body>

      <div id="push">&nbsp;</div>  <!---forces footer down -->
      <div class="footer">
         <?php include 'footer.php';?>
      </div>
   </div>
</html>