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
         <ul id="centerNAVul">
            <li id="centerNAVli"><a id="centerNAVa" href="index.html">Home</a></li>
            <li id="centerNAVli"><a id="centerNAVa" href="shop.html">Shop</a></li>
            <li id="centerNAVli"><a id="centerNAVa" href="contact.html">Contact Us</a></li>
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
               <a href="index.html"><input type="submit" value="Submit"></a>
            </form>
         </div>
         <br>
         <br>
         <br><!---Reference: Generated Automatically via https://www.maps.ie/create-google-map/ credit to maps.ie --->
         <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=139%20carrington%20road+(Unitec)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>     
         </div>
         <div id="push">&nbsp;</div>



      </body>
      <div class="footer">
         <?php include("footer.php"); ?>
      </div>
   </div>
</html>