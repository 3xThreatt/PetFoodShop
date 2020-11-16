<?php
   include("config.php");   //Imports configuration file required to connect to external DB
   include("retrieveProduct.php")
   ?>
<html>
   <div class="header">
      <head class="head">
         <link rel="stylesheet" href="External.css"> <!--links css -->
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script><!--links Jquery -->
         <script type="text/javascript" src="js/jquery.shop.js"></script><!--links JS required for cart -->
         <!--Links CSS-->
         <title>
            Shop
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
      <a href="shop.php" style="text-decoration: none; color: #f4f4f4; "><span id="x">X</span></a><!--X back button with css -->
      </div>
      <br>
      <br>
      <br>
      <br>
      <div id="site">
      <header id="masthead">  <!--Reference: https://www.smashingmagazine.com/2014/02/create-client-side-shopping-cart/ -->

      </header>
      <div id="content">
      <div id="products">
      <ul>
      <li style="list-style-type: none;">
      <div class="product-image">
      <img src="<?php echo $product_src ?>" height="600px" width="900px" alt="" />     <!--displays product image -->
      </div>
      <div class="product-description" data-name="Dog Food" data-price="<?php echo $productPrice; ?>"><!--displays product description -->
      <h3 class="product-name"><?php echo $productName; ?></h3><!--displays product name -->
      <p class="product-price">Price: 
      $<?php echo $productPrice; ?></p><!--displays product price -->
      <p><?php echo $productContent ?></p><!--displays product content -->
      <br>
      <br>
      <form class="add-to-cart" action="cart.html" method="post">
      <p><b>Quantity Available:</b>  <?php echo $productQTY ?></p><!--displays product quantity -->
      <div>
      <label for="qty-1"><b>Quantity</b></label><input type="text" name="qty-1" id="qty-1" class="qty" value="1" /><!--Input made for defining the quantity of product wanted -->
      </div>
      <br>
      <p><input type="submit" value="Add to cart" class="btn"/></p> <!--submits data to cart-->
      </form>
      </div>
      </li>
      </ul>
      </div>
      </div>
      </span>
      </h1>
      <?php include("updateQuantity.php") ?>   <!--includes the php file which allows for the quantity on the DB to change -->
      <div id="push">&nbsp;</div>  
      <div id="push">&nbsp;</div> 
      </body>
      <div class="footer">
      <?php include 'footer.php';?><!--Custom PHP footer -->
      </div>
      </div>
   </div>
</html>