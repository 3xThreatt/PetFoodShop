<?php
class DateTime {
  // Properties
  public $date;

  // Methods

  function set_date($date) {
    $this->date = $date;
  }
  function get_date() {
    return $this->date;
  }
}

$date = new DateTime();
$date->set_date('date("Y-m-d")');
?>
