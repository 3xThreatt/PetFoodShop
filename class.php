<?php  //Reference: https://www.w3schools.com/php/php_oop_classes_objects.asp used as inspiration, heavy altercation made //
class Review {
  // Properties
  public $name; 
  public $star;
  public $desc;

  // Methods
  function set_name($name) {    //defines the name
    $this->name = $name;
  }
  function get_name() {     //fetches data stored in name defined by the class
    return $this->name;
  }
  function set_star($star) {//defines the star rating
    $this->star = $star;
  }
  function get_star() {//fetches data stored in star defined by the class
    return $this->star;
  }
  function set_desc($desc) {//defines the description
    $this->desc = $desc;
  }
  function get_desc() {//fetches data stored in desc defined by the class
    return $this->desc;
  }
}

$jane = new Review();   //sets a new class
$jane->set_name('Jane');    //defines new name
$jane->set_desc('The quality of food at Pet Food Store is something quite unique.');  //defines new description
$jane->set_star('4/5');   //defines star rating


$joe = new Review();
$joe->set_name('Joe');
$joe->set_desc('Pet Food Shop is alright. Their prices are pretty reasonable.');
$joe->set_star('3/5');

$john = new Review();
$john->set_name('John');
$john->set_desc('I have to say that I recently have enjoyed the boost in quality
and variety on Pet Food Store.');
$john->set_star('5/5');

?>
