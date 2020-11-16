<?php 
   include("config.php");  //Imports configuration file required to connect to external DB
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
            <li id="centerNAVli"><a id="centerNAVa" href="login.php">Log In</a></li>
         </ul>
         <div class="leftpanel">
            <!-- Left panel where categories, filters and invoice are available-->
            <ul id="leftpanelUL">
               <li class="leftpanelLI">Species</li>
               <li class="leftpanel-LI">
                  <a href="dogfood.php" class="leftpanelA">Dog Food &#9675;
                  <a>
               </li>
               <li class="leftpanel-LI"><a href="catfood.php" class="leftpanelA">Cat Food  &#9675;</a></li>
               <li class="leftpanel-LI"><a href="birdfood.php" class="leftpanelA">Bird Food  &#9675;</a></li>
               <li class="leftpanel-LI"><a href="fishfood.php" class="leftpanelA">Fish Food  &#9675;</a></li>
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
         <div <?php include("display/displaymenu.php"); //displays all 13 product files //
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
                                                    ?>>
         </div>
         <div class="gallery">
            <a target="_blank" href="product.php">
            <img src='<?php echo $image_src;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content2;  ?><br>$<?php echo $money2; ?></div> <!--fetches specific data from var to form tile-->
         </div>
         <div class="gallery">
            <a target="_blank" href="product2.php">
            <img src='<?php echo $image_src2;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content3;  ?><br>$<?php echo $money3; ?></div><!--fetches specific data from var to form tile-->
         </div>
         <div class="gallery">
            <a target="_blank" href="product3.php">
            <img src='<?php echo $image_src3;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content4;  ?><br>$<?php echo $money4; ?></div><!--fetches specific data from var to form tile-->
         </div>
         <div class="gallery">
            <a target="_blank" href="product4.php">
            <img src='<?php echo $image_src4;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content5;  ?><br>$<?php echo $money5; ?></div><!--fetches specific data from var to form tile-->
         </div>
         <div class="gallery">
            <a target="_blank" href="product5.php">
            <img src='<?php echo $image_src5;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content6;  ?><br>$<?php echo $money6; ?></div><!--fetches specific data from var to form tile-->
         </div>
         <div class="gallery">
            <a target="_blank" href="product6.php">
            <img src='<?php echo $image_src6;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content7;  ?><br>$<?php echo $money7; ?></div><!--fetches specific data from var to form tile-->
         </div>
         <div class="gallery">
            <a target="_blank" href="product7.php">
            <img src='<?php echo $image_src7;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content8;  ?><br>$<?php echo $money8; ?></div><!--fetches specific data from var to form tile-->
         </div>
         <div class="gallery">
            <a target="_blank" href="product8.php">
            <img src='<?php echo $image_src8;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content9;  ?><br>$<?php echo $money9; ?></div><!--fetches specific data from var to form tile-->
         </div>
         <div class="gallery">
            <a target="_blank" href="product9.php">
            <img src='<?php echo $image_src9;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content10;  ?><br>$<?php echo $money10; ?></div><!--fetches specific data from var to form tile-->
         </div>
         <div class="gallery">
            <a target="_blank" href="product10.php">
            <img src='<?php echo $image_src10;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content11;  ?><br>$<?php echo $money11; ?></div><!--fetches specific data from var to form tile-->
         </div>
         <div class="gallery">
            <a target="_blank" href="product11.php">
            <img src='<?php echo $image_src11;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content12;  ?><br>$<?php echo $money12; ?></div><!--fetches specific data from var to form tile-->
         </div>
         <div class="gallery">
            <a target="_blank" href="product12.php">
            <img src='<?php echo $image_src12;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content13;  ?><br>$<?php echo $money13; ?></div><!--fetches specific data from var to form tile-->
         </div>
         <div class="gallery">
            <a target="_blank" href="product13.php">
            <img src='<?php echo $image_src13;  ?>' width="600" height="400">
            </a>
            <div class="desc"><?php echo $content14;  ?><br>$<?php echo $money14; ?></div><!--fetches specific data from var to form tile-->
         </div>
         <style type="text/css">     /* internal CSS used to style the PHP file separate to the main css file   */
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
         <?php include 'footer.php';?>    <!--customer php footer -->
      </div>
   </div>
</html>