<?php
class Display {
  // Properties
  public $image;
  public $image2;
  public $image3;
  public $image4;
  public $image5;
  public $image6;


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

$image_second = new Display();
$image_second->set_image('menuimages/slideshow1.png');


?>
