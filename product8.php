<?php
include("config.php");
include("retrieveProduct8.php")
?>
<html>
   <div class="header">
      <head class="head">
        <link rel="stylesheet" href="External.css">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.shop.js"></script>
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
  <a href="shop.php" style="text-decoration: none; color: #f4f4f4; "><span id="x">X</span></a>
</div>
<br>
<br>
<br>
<br>
<div id="site">
  <header id="masthead">
  </header>
  <div id="content">
    <div id="products">
      <ul>
        <li style="list-style-type: none;">
          <div class="product-image">
            <img src="<?php echo $product_src ?>" height="600px" width="900px" alt="" />
          </div>
          <div class="product-description" data-name="Cat Food #4" data-price="<?php echo $productPrice; ?>">
            <h3 class="product-name"><?php echo $productName; ?></h3>
            <p class="product-price">Price: 
              $<?php echo $productPrice; ?></p>
            <p><?php echo $productContent ?></p>
            <br>
            <br>
            <form class="add-to-cart" action="cart.html" method="post">
              <p><b>Quantity Available:</b>  <?php echo $productQTY ?></p>
              <div>
                <label for="qty-1"><b>Quantity</b></label><input type="text" name="qty-1" id="qty-1" class="qty" value="1" />
              </div>
              <br>
              <p><input type="submit" value="Add to cart" class="btn"/></p>
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