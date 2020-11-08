<?php
include("config.php");
include("SQL/retrieveProduct.php")
?>
<html>
   <div class="header">
      <head class="head">
         <link rel="stylesheet" href="External.css">
         <!--Links CSS-->
         <script src="externalJ.js"></script><!--Links JS-->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script><!---Links JQuery Lib-->
         <script src="externalJQUERY.js"></script><!---Links external Jquery for animation etc -->
         <title>
            Home
         </title>
         <div class="wrapper">
            <a href="index.html"><img id="logo" src="logoBW.jpg" alt='Logo'></a>
            <h1 id="title"> Pet Food Shop</h1>
            <h3 id="supportingtitle">Fresh Food, Fresh Moments.</h3>
            <div>
            </div>
            </ul>
      </head>
      </div>
      <div class="content">
         <body>
            <!---typing animation starts on load of page -->
            <ul id="centerNAVul">
               <!--nav bar for easy navigation of pages -->
               <li id="centerNAVli"><a id="centerNAVa" href="index.html">Home</a></li>
               <li id="centerNAVli"><a id="centerNAVa" href="shop.html">Shop</a></li>
               <li id="centerNAVli"><a id="centerNAVa" href="contact.html">Contact Us</a></li>
               <li id="centerNAVli"><a id="centerNAVa" href="login.html">Log In</a></li>
            </ul>
      </div>







   </body>
   <div class="footer">
         <?php include 'footer.php';?>
      </div>
   </div>
   </div>
</html>