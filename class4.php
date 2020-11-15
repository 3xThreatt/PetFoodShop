<?php
class Contacts {
  // Properties
  public $position;
  public $name;
  public $phone;
  public $email;

  // Methods

  function set_position($position) {
    $this->position = $position;
  }
  function get_position() {
    return $this->position;
  }
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_phone($phone) {
    $this->phone = $phone;
  }
  function get_phone() {
    return $this->phone;
  }
  function set_email($email) {
    $this->email = $email;
  }
  function get_email() {
    return $this->email;
  }
}

$abel = new Contacts();
$abel->set_position('Owner');
$abel->set_name('Abel Smith');
$abel->set_phone('+64 020 2454 1232');
$abel->set_email('Abelsmith@petfoodshop.co.nz');

$ben = new Contacts();
$ben->set_position('Head of Marketing');
$ben->set_name('Ben Frank');
$ben->set_phone('+64 052 24424 1232');
$ben->set_email('Benfrank@petfoodshop.co.nz');

$harriot = new Contacts();
$harriot->set_position('R & D');
$harriot->set_name('Harriot Jones');
$harriot->set_phone('+64 583 3535 1132');
$harriot->set_email('Harriotjones@petfoodshop.co.nz');

$peter = new Contacts();
$peter->set_position('Business Analyst');
$peter->set_name('Peter yang');
$peter->set_phone('+64 525 235 0232');
$peter->set_email('Peteryang@petfoodshop.co.nz');
?>
