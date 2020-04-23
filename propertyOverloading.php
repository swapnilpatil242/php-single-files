<?php 

class Person {
  public $name;
  public $email;
  private $phone;

  public function __construct($name, $email, $phone) {
    $this->name = $name;
    $this->email = $email;
    $this->phone = $phone;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }
  // Above getname and setName methods worked fine for name but If we have lots of properties like email, phone, address etc.
  // So its to much set and get method need to write common function. Below are the common function

  public function __set($name, $value) {
    // used $name dynamic assign
    $this->$name = $value;
  }

  public function __get($name) {
    return $this->$name;
  }

}

$person1 = new Person("swapnil", "swapnil@test.com", "123456789");
echo $person1->name;
echo "\n";
echo $person1->getName();
echo "\n";
$person1->setName("Test");
echo "After set Method name is: ".$person1->getName();
echo "\n";

echo "after __set method() changed email::";
$person1->email = "swapnil@test123.com";
echo $person1->email;
echo "\n";

echo "after __set method() changed phone::";
// changed private property outside the class
$person1->phone = "000111222333";
// Used __get method to get this phone no.
echo $person1->phone;
echo "\n";
