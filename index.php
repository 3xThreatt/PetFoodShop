<!DOCTYPE html>
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
            <a href="index.html"><img id="logo" src="logoBW.png" alt='Logo'></a>
            <h1 id="title"> Pet Food Shop</h1>
            <h3 id="supportingtitle">Fresh Food, Fresh Moments.</h3>
            <div>
            </div>
            </ul>
      </head>
      </div>
      <div class="content">
         <body onload="typeWriter()">
            <!---typing animation starts on load of page -->
            <ul id="centerNAVul">
               <!--nav bar for easy navigation of pages -->
               <li id="centerNAVli"><a id="centerNAVa" href="index.html">Home</a></li>
               <li id="centerNAVli"><a id="centerNAVa" href="shop.php">Shop</a></li>
               <li id="centerNAVli"><a id="centerNAVa" href="contact.php">Contact Us</a></li>
               <li id="centerNAVli"><a id="centerNAVa" href="login.html">Log In</a></li>
            </ul>
      </div>
      <h2 id="animation-link" style="text-align: center;"></h2> <!----Reference: Credit to https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_typewriter -->     <!--javascript text animation starts -->
      <div id="rectangle2">
      </div>
      <div class="container">	<!--featured products displayed as images which link to the shop page -->
      <div class="tile"><a href="shop.php"><img width="150px" height="200px" src="menuimages/slideshow.png"></div></a>
      <div class="tile"><a href="shop.php"><img width="150px" height="200px" src="menuimages/slideshow1.png"></div></a>
      <div class="tile"><a href="shop.php"><img width="150px" height="200px" src="menuimages/slideshow2.png"></div></a>
      <div class="tile"><a href="shop.php"><img width="150px" height="200px" src="menuimages/slideshow3.png"></div></a>
      <div class="tile"><a href="shop.php"><img width="150px" height="200px" src="menuimages/slideshow4.png"></div></a>
      <div class="tile"><a href="shop.php"><img width="150px" height="200px" src="menuimages/slideshow5.png"></div></a>
      </div>
      <h1 class="at-item">Welcome</h1> <!--css animation-->
      <img src="pngegg.png" class="dog">	<!---decorative dog. Woof! -->
   </div>
   <h4>Welcome to pet food shop. We hope you find our<br>
   products and prices fair. Our team is dedicated to delivering<br>
   the best products on the market at the most affordable prices</h4></div>
   <br>
   <h4>If you have any questions you can send us a message on<br>
   our contact page. If you would like to leave a review,<br>
   feel free to use our review box.</h4>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <div <?php include("class.php"); ?>>
   <table class="table">    <!---Review table designed to show latest reviews -->
   <tr>
   <th colspan="3" class="th">Recent Reviews</th> <!--header stretching all rows -->
   </tr>
   <td class="td"><?php echo $jane->get_name(); ?> </td>
   <td class="td"><h4 style="font-size: 15px;"><?php echo $jane->get_desc(); ?></h4></td>
   <td><?php echo $jane->get_star(); ?></td>  <!--html encoded starts. 9733 = dark, 9734 = white -->
   <tr>
   <td class="td"><?php echo $joe->get_name(); ?></td>
   <td class="td"><h4 style="font-size: 15px;"><?php echo $joe->get_desc(); ?></h4></td> <!--main text is saved into cell in table as a paragraph -->
   <td class="td"><?php echo $joe->get_star(); ?></td>
   </tr>
   <tr>
   <td class="td"><?php echo $john->get_name(); ?></td>
   <td><h4 style="font-size: 15px;"><?php echo $john->get_desc(); ?></h4></td>
   <td class="td"><?php echo $john->get_star(); ?></td>
   </tr>
   </table>
   </div>
   </div>
<br>
<br>
<br>
<br>
<h2 style="text-align: center;" id="input" class="animateJ">Hover to see deal of the day!</h2>
<br>
<div id="output"><img src="Tile2.PNG"></div>
</div>

   <div id="push">&nbsp;</div> <!--forces footer down -->
   </body>
   <div class="footer">
         <?php include 'footer.php';?>
      </div>
   </div>
</html>