<?php
include("config.php");
include("retrieveProduct.php")
?>
<html>
   <div class="header">
      <head class="head">
        <link rel="stylesheet" href="External.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.shop.js"></script>
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
<div id="site">
  <header id="masthead">
    <h1>Winery <span class="tagline">Wines for web developers since 1999</h1>
  </header>
  <div id="content">
    <div id="products">
      <ul>
        <li>
          <div class="product-image">
            <img src="images/wine1.jpg" alt="" />
          </div>
          <div class="product-description" data-name="Wine #1" data-price="5">
            <h3 class="product-name">Wine #1</h3>
            <p class="product-price">&euro; 5</p>
            <form class="add-to-cart" action="cart.html" method="post">
              <div>
                <label for="qty-1">Quantity</label>
                <input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
              </div>
              <p><input type="submit" value="Add to cart" class="btn" /></p>
            </form>
          </div>
        </li>
      </ul>
    </div>
  </div>
</span>
</h1>

 <div id="push">&nbsp;</div>  
  <div id="push">&nbsp;</div> 
   </body>
   <div class="footer">
         <?php include 'footer.php';?>
      </div>
   </div>
   </div>
</html>