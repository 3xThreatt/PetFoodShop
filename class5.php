<?php
class Loginerror {
  // Properties
  public $name;
  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$newerror = new Loginerror();
$newerror->set_name('This page is currently down for maintenance, please try again later.');

?>
