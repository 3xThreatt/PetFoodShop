<?php
class Message {
  // Properties
  public $error;
  public $down;
  // Methods
  function set_position($error) {
    $this->error = $error;
  }
  function get_error() {
    return $this->error;
  }
}

$down = new Message();
$down->set_error('The Login page is currently down for maintenance, please check in later');

?>
