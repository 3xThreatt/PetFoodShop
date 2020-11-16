<?php
   include("config.php"); //links external php file to connect to db
   ?>
<html>
   <div class="header">
   <head class="head">
      <link rel="stylesheet" href="External.css"> <!--links css -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!--links Jquery -->
      <script src="BannerJQUERY.js"></script> <!--links banner specific jquery -->
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
         <li id="centerNAVli"><a id="centerNAVa" href="login.php">Log In</a></li>
      </ul>
      <div id="banner-pictures" <?php include("retrieve.php"); include("retrieve2.php"); include("retrieve3.php");?>> <!--imports external php files -->
         <img class="banner-pictures" id="banner1" src='<?php echo $image_src;  ?>' > <!--pulls and prints data from php variable -->
         <img class="banner-pictures" id="banner2" src='<?php echo $image_src2;  ?>' ><!--pulls and prints data from php variable -->
         <img class="banner-pictures" id="banner3"src='<?php echo $image_src3;  ?>' ><!--pulls and prints data from php variable -->
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
      <h1> Our People </h1>
      <div <?php include("class4.php"); ?>>
         <?php echo $abel->get_name(); ?><br><!--pulls and prints data from php variable -->
         <?php echo $abel->get_position(); ?><br> <!--each varaible is an object contained in a class relating to the imported php file. There are 4 classes in this php file -->
         <?php echo $abel->get_phone(); ?><br>
         <?php echo $abel->get_email(); ?><br>
         <br>     <br>     <br>
         <?php echo $ben->get_name(); ?><br>
         <?php echo $ben->get_position(); ?><br>
         <?php echo $ben->get_phone(); ?><br>
         <?php echo $ben->get_email(); ?><br>
         <br>     <br>     <br>
         <?php echo $harriot->get_name(); ?><br>
         <?php echo $harriot->get_position(); ?><br>
         <?php echo $harriot->get_phone(); ?><br>
         <?php echo $harriot->get_email(); ?><br>
         <br>     <br>     <br>
         <?php echo $peter->get_name(); ?><br>
         <?php echo $peter->get_position(); ?><br>
         <?php echo $peter->get_phone(); ?><br>
         <?php echo $peter->get_email(); ?><br>
         <div id="push">&nbsp;</div>
   </body>
   <div class="footer">
   <?php include 'footer.php';?> <!-- custom php footer -->
   </div>
   </div>
</html>