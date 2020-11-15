<?php
class Display {
  // Properties
  public $image;


  // Methods
  function set_image($image) {
    $this->image = $image;
  }
  function get_image() {
    return $this->image;
  }
}

$image = new Display();
$image->set_image('menuimages/slideshow.png');



?>
