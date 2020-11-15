<?php
include("config.php");
?>
<html>
   <div class="header">
   <head class="head">
      <link rel="stylesheet" href="External.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="BannerJQUERY.js"></script>
      
      <title>
         Contact Us
      </title>
      <div class="wrapper">
         <a href="index.php"><img id="logo" src="logoBW.png" alt='Logo'></a>
         <h1 id="title"> Pet Food Shop</h1>
         <h3 id="supportingtitle">Fresh Food, Fresh Moments.</h3>
         <div>
         </div>
         </ul>
   </head>
   </div>
   <div class="content">
      <body>
         <ul id="centerNAVul">
            <li id="centerNAVli"><a id="centerNAVa" href="index.php">Home</a></li>
            <li id="centerNAVli"><a id="centerNAVa" href="shop.php">Shop</a></li>
            <li id="centerNAVli"><a id="centerNAVa" href="contact.php">Contact Us</a></li>
            <li id="centerNAVli"><a id="centerNAVa" href="login.html">Log In</a></li>
         </ul>
         <div id="banner-pictures" <?php include("retrieve.php"); include("retrieve2.php"); include("retrieve3.php");?>>
            <img class="banner-pictures" id="banner1" src='<?php echo $image_src;  ?>' >
            <img class="banner-pictures" id="banner2" src='<?php echo $image_src2;  ?>' >
            <img class="banner-pictures" id="banner3"src='<?php echo $image_src3;  ?>' >
         </div>

         <h3 id="contacttitle">Want to get in touch?</h3>
         <div class="contact-container">
            <!---Reference: Credit To https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_contact_form -->
            <form>
               <label for="fname">First Name</label>
               <input type="text" id="fname" name="firstname" placeholder="Your name..">
               <label for="lname">Last Name</label>
               <input type="text" id="lname" name="lastname" placeholder="Your last name..">
               <label for="subject">Subject</label>
               <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
               <a href="index.php"><input type="submit" value="Submit"></a>
            </form>
         </div>
         <br>
         <br>
         <br>
         <div id="push">&nbsp;</div>

         <div <?php include("class4.php"); ?>> 
            <?php echo $abel->get_name(); ?>
            <?php echo $abel->get_position(); ?>
            <?php echo $abel->get_phone(); ?>
            <?php echo $abel->get_email(); ?>


               <div id="push">&nbsp;</div>
      </body>
      <div class="footer">
         <?php include 'footer.php';?>
      </div>
   </div>
</html>