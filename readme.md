This file is used to clarify the location of the requirements set in the marking guide

It should be noted that I did not code comment on pages that were duplicate to others but instead one main page



Part 1 -- HTML template for PHP files

**Minimum 4 dividers for the following**
		More than 4 pages were made an each contain more than 4 dividers, however they may not be 
		titled consistently

Part 2 – CSS   
	All CSS is the same as before with the exception that some altercations were made and some features 
	were added. Internal CSS was also injected into some pages so i could define specific elements without
	affecting the rest of the site

Part 3 – JavaScript   

**Simple shop cart**
	It should be noted that I used code from an external source for some of this feature.
	The author can be found at https://www.smashingmagazine.com/2019/08/shopping-cart-html5-web-storage/



Part 4 – PHP                                                                                         
**Connection to database**
	Done via <?php include('config.php') ?>. Can be found on most pages where a connection to the DB is 
	required


**Banner pictures**
	Can be found on contact.php. Banner images were retrieved via the retrieve.php files. BannerJQUERY.js
	contained the JQuery used to make an animation

**Menu items**
	I made menu items via a tile design. All the data included in the tiles are pulled from an external
	database as the requirements state. 

**Footer**
	Found on most pages as  <?php include 'footer.php';?>. I did not apply to all pages as i left some
	with the origional html footer as it allows for a list of all available links on the site.

**Category**
	To stick with the design of my wireframe, I made the category page an element of the shop page. 
	It functions with the same requirements and uses PHP to fetch the categories. 

**Product**
	Each product has its own page. Inside this page, data is pulled from the Product table in the 
	external database and displayed. 

**Object oriented - class, object and methods**
	Can be found on index line 41-47, 52-54, 69-80, and login line 32. All OOP functions have their own
	separate PHP files with contain the class, object and method functions. 

**Correct "include" page on HTML template**
	Can be found on every page with php or a link to the external DB, much more than 8. I added the 
	include function via an installment in DIV tags.
		