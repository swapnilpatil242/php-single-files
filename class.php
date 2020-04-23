<?php
class Person {
  public $firstName;
  protected $lastName;
  private $gender;

  function __construct($first, $last, $gender) {
    echo "construct()...\n";
    $this->firstName = $first;
    $this->lastName = $last;
    $this->gender = $gender;
  }

  public function displayPersion(){
    echo "displayPersion()..:: ".$this->firstName." ".$this->lastName." ".$this->gender;
  }
}

$obj1 = new Person("Swapnil", "Patil", "Male");
echo "obj accessing public member:: ".$obj1->firstName;
echo "\n";
$obj1->displayPersion();
echo "\n";
// echo "obj accessing protected member:: ".$obj1->lastName;
// o/p : PHP Fatal error:  Uncaught Error: Cannot access protected property Person::$lastName
echo "\n";
// echo "obj accessing private member:: ".$obj1->gender;
// o/p: PHP Fatal error:  Uncaught Error: Cannot access private property Person::$gender
