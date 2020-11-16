<?php 
   include("config.php");  //imports external configuration php file
   ?>
<html>
   <div class="header">
   <head class="head">
      <link rel="stylesheet" href="External.css">
      <!-- Links CSS-->
      <title>
         Fish Food
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
   <div <?php include("retrieveCategory.php");   //links external php pages to fetch SQL data
      include("retrieveCategory2.php");
      include("retrieveCategory3.php");
      include("retrieveCategory4.php");
      ?>>
   <div class="content">
      <body>
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
                  <a href="dogfood.php" class="leftpanelA"><?php echo $firstCategory ?> <!--pulls variable data from php file -->
                  <a>
               </li>
               <li class="leftpanel-LI"><a href="catfood.php" class="leftpanelA"><?php echo $secondCategory ?></a></li><!--pulls variable data from php file -->
               <li class="leftpanel-LI"><a href="birdfood.php" class="leftpanelA"><b><?php echo $thirdCategory ?></b></a></li><!--pulls variable data from php file -->
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
         <div <?php
            include("display/displaymenu9.php");     //links external php files 
               include("display/displaymenu10.php");
                  include("display/displaymenu11.php");
                               ?>>
         </div>
         <div class="gallery">
            <a target="_blank" href="product9.php">
            <img src='<?php echo $image_src9;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content10;  ?><br>$<?php echo $money10; ?></div><!--pulls variable data from php file -->
         </div>
         <div class="gallery">
            <a target="_blank" href="product10.php">
            <img src='<?php echo $image_src10;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content11;  ?><br>$<?php echo $money11; ?></div><!--pulls variable data from php file -->
         </div>
         <div class="gallery">
            <a target="_blank" href="product11.php">
            <img src='<?php echo $image_src11;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content12;  ?><br>$<?php echo $money12; ?></div><!--pulls variable data from php file -->
         </div>
         <style type="text/css">  /* internal css data for php related elements */
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
         <?php include 'footer.php';?>  <!--custom php footer -->
      </div>
   </div>
</html>