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

$image_second = new Display();
$image_second->set_image('menuimages/slideshow1.png');

$image_third = new Display();
$image_third->set_image('menuimages/slideshow2.png');

$image_fourth = new Display();
$image_fourth->set_image('menuimages/slideshow3.png');

$image_fifth = new Display();
$image_fifth->set_image('menuimages/slideshow4.png');

$image_sixth = new Display();
$image_sixth->set_image('menuimages/slideshow5.png');

?>
