<?php
  include 'home.php';

  class HomeChild extends Home {
    public $child_title;

    public function __construct($child_title) {
      $this->child_title = $child_title;
    }

    public function childInfo() {
      return "This is child info func...\n";
    }
  }

$obj1 = new HomeChild("this is child class...\n");
echo $obj1->childInfo();
echo $obj1->callHomeInfo();
