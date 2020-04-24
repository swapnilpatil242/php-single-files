<?php
class Person {
  // Properties
  public $firstName;
  protected $lastName;
  private $gender;

  function __construct($first, $last, $gender) {
    echo "construct()...\n";
    $this->firstName = $first;
    $this->lastName = $last;
    $this->gender = $gender;
  }

  function __destruct() {
    echo "destruct()...\n";
    echo "This value for firstName is: {$this->firstName}.\n";
  }

  // Methods
  public function displayPersion(){
    echo "displayPersion()..:: ".$this->firstName." ".$this->lastName." ".$this->gender;
  }
}

$obj1 = new Person("Swapnil", "Patil", "Male");
// echo var_dump($obj1 instanceof Person); // return is it object of that class or not
echo "obj accessing public member:: ".$obj1->firstName;
echo "\n";
$obj1->displayPersion();
echo "\n";
// echo "obj accessing protected member:: ".$obj1->lastName;
// o/p : PHP Fatal error:  Uncaught Error: Cannot access protected property Person::$lastName
echo "\n";
// echo "obj accessing private member:: ".$obj1->gender;
// o/p: PHP Fatal error:  Uncaught Error: Cannot access private property Person::$gender



// public - the property or method can be accessed from everywhere. This is default
// protected - the property or method can be accessed within the class and by classes derived from that class
// private - the property or method can ONLY be accessed within the class
