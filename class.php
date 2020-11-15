<?php
class Review {
  // Properties
  public $name;
  public $star;
  public $desc;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_star($star) {
    $this->star = $star;
  }
  function get_star() {
    return $this->star;
  }
  function set_desc($desc) {
    $this->desc = $desc;
  }
  function get_desc() {
    return $this->desc;
  }
}

$jane = new Review();
$jane->set_name('Jane');
$jane->set_desc('The quality of food at Pet Food Store is something quite unique.');
$jane->set_star('4/5');


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
