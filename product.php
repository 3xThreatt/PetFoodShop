<?php
include("config.php");
include("retrieveProduct.php")
?>
<html>
   <div class="header">
      <head class="head">
         <link rel="stylesheet" href="External.css">
         <script src="cart.js"></script>
         <!--Links CSS-->
         <title>
            Home
         </title>
         <div class="wrapper">
            <a href="index.html"><img id="logo" src="logoBW.png" alt='Logo'></a>
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
<div id="orangeBox">
  <a href="dogfood.php" style="text-decoration: none; color: #f4f4f4; "><span id="x">X</span></a>
</div>


<div class="card1">
            <img src="pics/bird/bird1.jpg" alt="Bird Food">
            <div class="cardinfo">
                <h1 class="cardtitle">Bird Food</h1>
                <p class="cardprice">$100</p>
                <p class="cardtext">Some text about the very<br>interesting horse food<br>we have here</p>
                <button class="cardbtn add-to-cart" data-id="19">ADD TO CART</button>
            </div>
        </div>


 <div id="push">&nbsp;</div>  
  <div id="push">&nbsp;</div> 
   </body>
   <div class="footer">
         <?php include 'footer.php';?>
      </div>
   </div>
   </div>
</html>