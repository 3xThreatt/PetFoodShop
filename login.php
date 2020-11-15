
<!DOCTYPE html>
<html>
   <div class="header">
      <head class="head">
         <link rel="stylesheet" href="External.css">
         <!--links CSS -->
         <title>
            Login/Signup
         </title>
         <div class="wrapper">
            <a href="index.php"><img id="logo" src="logoBW.png" alt='Logo'></a> <!--Links Black and White logo -->
            <h1 id="title"> Pet Food Shop</h1>
            <h3 id="supportingtitle">Fresh Food, Fresh Moments.</h3>
            <div>
            </div>
            </ul>
      </head>
      </div>
      <div class="content">
         <!--main content container of page -->
         <body>
            <ul id="centerNAVul">
               <!--navigation bar for easy navigation of website -->
               <li id="centerNAVli"><a id="centerNAVa" href="index.php">Home</a></li>
               <li id="centerNAVli"><a id="centerNAVa" href="shop.php">Shop</a></li>
               <li id="centerNAVli"><a id="centerNAVa" href="contact.php">Contact Us</a></li>
               <li id="centerNAVli"><a id="centerNAVa" href="login.php">Log In</a></li>
            </ul>
            <h3 id="contacttitle"> Sign Up or Log In </h3>
            <!--page title -->
            <img src="Pet2.jpg" class="center" width="50%" height="50%">     <!---image for decorative purpose -->
            <div <?php include("class5.php") ?>>
            <h2 style="color: red; text-align: center;"><?php echo $down->get_error(); ?></h2>

      </div>
      <div id="push">&nbsp;</div> <!--pushes footer down-->
      </body>
      <div class="footer">
         <br>
         <br>
         <a href="linktree.com"><img src="media.png" height="22%" width="22%" style="float: left;"></a>
         <a href="index.php"><img src="LogoColour.png" height="10%" width="10%" style="float: right;"></a>
         <ul class="footerlinks">
         <!--quick links for easy navigation -->
         <li class="footerLI"><a href="index.php" class="footerA">Home</a></li>
         <li class="footerLI"><a href="legal.html" class="footerA">Legal</a></li>
         <li class="footerLI"><a href="shop.php" class="footerA">Shop</a></li>
         <li class="footerLI"><a href="contact.php" class="footerA">Contact Us</a></li>
         <li class="footerLI"><a href="login.php" class="footerA">Login</a></li>
         <li class="footerLI"><a href="login.php" class="footerA">Signup</a></li>
         <br>
      </div>
   </div>
</html>