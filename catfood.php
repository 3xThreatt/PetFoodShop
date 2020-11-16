<?php 
   include("config.php");  //imports external configuration php file
   
   ?>
<html>
   <div class="header">
   <head class="head">
      <link rel="stylesheet" href="External.css">
      <!-- Links CSS-->
      <title>
         Cat Food
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
   <div <?php include("retrieveCategory.php");//links external php pages to fetch SQL data
      include("retrieveCategory2.php");
      include("retrieveCategory3.php");
      include("retrieveCategory4.php");
      ?>>
   <div class="content">
      <body>
         <!-- Promts three javascript functions on page load-->
         <ul id="centerNAVul">
            <!--navigation bar -->
            <li id="centerNAVli"><a id="centerNAVa" href="index.php">Home</a></li>
            <li id="centerNAVli"><a id="centerNAVa" href="shop.php">Shop</a></li>
            <li id="centerNAVli"><a id="centerNAVa" href="contact.php">Contact Us</a></li>
            <li id="centerNAVli"><a id="centerNAVa" href="login.php">Log In</a></li>
         </ul>
         <div class="leftpanel">
            <!-- Left panel where categories, filters and invoice are available-->
            <ul id="leftpanelUL">
               <li class="leftpanelLI">Species</li>
               <li class="leftpanel-LI">
                  <a href="dogfood.php" class="leftpanelA"><?php echo $firstCategory ?>
                  <a>
               </li>
               <li class="leftpanel-LI"><a href="catfood.php" class="leftpanelA"><b><?php echo $secondCategory ?></b></a></li><!--pulls variable data from php file -->
               <li class="leftpanel-LI"><a href="birdfood.php" class="leftpanelA"><?php echo $thirdCategory ?></a></li><!--pulls variable data from php file -->
               <li class="leftpanel-LI"><a href="fishfood.php" class="leftpanelA"><?php echo $fourthCategory ?></a></li><!--pulls variable data from php file -->
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
         <div <?php  //links external php via include function
            include("display/displaymenu5.php");
               include("display/displaymenu6.php");
                  include("display/displaymenu7.php");
                     include("display/displaymenu8.php");
            
                                           ?>>
         </div>
         <div class="gallery">
            <a target="_blank" href="product5.php">
            <img src='<?php echo $image_src5;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content6;  ?><br>$<?php echo $money6; ?></div><!--pulls variable data from php file -->
         </div>
         <div class="gallery">
            <a target="_blank" href="product6.php">
            <img src='<?php echo $image_src6;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content7;  ?><br>$<?php echo $money7; ?></div><!--pulls variable data from php file -->
         </div>
         <div class="gallery">
            <a target="_blank" href="product7.php">
            <img src='<?php echo $image_src7;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content8;  ?><br>$<?php echo $money8; ?></div><!--pulls variable data from php file -->
         </div>
         <div class="gallery">
            <a target="_blank" href="product8.php">
            <img src='<?php echo $image_src8;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content9;  ?><br>$<?php echo $money9; ?></div><!--pulls variable data from php file -->
         </div>
         <style type="text/css">/* internal css data for php related elements */
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
      <div id="push">&nbsp;</div>
      <!---forces footer down -->
      <div class="footer">
         <?php include 'footer.php';?><!--custom php footer -->
      </div>
   </div>
</html>