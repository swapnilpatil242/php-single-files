<?php

class Home {
  public $title;

  public function __construct($title) {
    $this->title = $title;
  }

  public function callHomeInfo(){
    return "This is home class...\n";
  }
}

$home1 = new Home("This is the home file....\n");

// echo $home1->callHomeInfo(); // o/p: This is home class...
//echo $home1->title; // o/p: This is the home file....
