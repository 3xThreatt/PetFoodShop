<?php
class Review {
  // Properties
  public $name;
  public $star;

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
}

$jane = new Review();
$jane->set_name('jane');
$jane->set_star('4/5');

?>
