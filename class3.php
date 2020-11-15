<?php
class Intro {
  // Properties
  public $welcome;


  // Methods
  function set_welcome($welcome) {
    $this->welcome = $welcome;
  }
  function get_welcome() {
    return $this->welcome;
  }
}

$welcome = new Intro();
$welcome->set_welcome('Welcome to pet food shop. We hope you find our<br>
   products and prices fair. Our team is dedicated to delivering <br>
   the best products on the market at the most affordable prices');


$welcome_second = new Intro();
$welcome_second->set_welcome('If you have any questions you can send us a message on<br>
   our contact page. If you would like to leave a review,<br>
   feel free to use our review box.')
?>