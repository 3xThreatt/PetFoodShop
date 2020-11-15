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
?>
