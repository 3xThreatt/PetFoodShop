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

$image2 = new Display();
$image2->set_image('menuimages/slideshow1.png');

$image3 = new Display();
$image3->set_image('menuimages/slideshow2.png');

$image4 = new Display();
$image4->set_image('menuimages/slideshow3.png');

$image5 = new Display();
$image5->set_image('menuimages/slideshow4.png');

$image6 = new Display();
$image6->set_image('menuimages/slideshow5.png');



?>
