<?php

class Person {
  public $name;
  public $email;
  protected $jobTitle;
  private $phone;

  public function __construct($name, $email, $jobTitle, $phone) {
    $this->name = $name;
    $this->email = $email;
    $this->jobTitle = $jobTitle;
    $this->phone = $phone;
  }

  public function getParentMethod() {
    echo "this the parent method in Person class..";
  }

  public function getPersonDetails() {
    return "Person is '".$this->name."' and email is '".$this->email."'"." ".$this->jobTitle." ".$this->phone;
  }
}

class Employee extends Person {
  public $empId;

  public function __construct($empId, $name, $email, $jobTitle, $phone) {
    $this->empId = $empId;
    parent::__construct($name, $email, $jobTitle, $phone);
  }

  public function getEmployeeDetails(){
    return "employee details name: ".$this->name." Job title: ".$this->jobTitle;
  }


}

// $swapnil = new Person("swapnil", "swapnil@test.com", "developer", "12345679");
// echo "\n";
// echo $swapnil->getPersonDetails();
// echo "\n";

// $emp1 = new Employee(1);
// echo "emp1 object access to member and id is: [".$emp1->empId."]";
// echo "\n";
// $emp1->getParentMethod();
// echo "\n";

$emp2 = new Employee(1, 'swapnil', 'swapnil@test.com', "developer", "12345679");
echo $emp2->getPersonDetails();
echo "\n";
echo $emp2->getEmployeeDetails();
echo "\n";
// // Access parent public property
// echo $emp2->name;
// echo "\n";

// //Access parent protected property
// echo $emp2->jobTitle;
// o/p: PHP Fatal error:  Uncaught Error: Cannot access protected property Employee::$jobTitle
// echo "\n";

// //Access parent private property
// echo $emp2->jobTitle;
// o/p: PHP Notice:  Undefined property: Employee::$phone
echo "\n";



# Inheritance ::
  // PHP only supports single inheritance: a child class can inherit only from one single parent.
  // used key word "extends" to inherit all parent properties
  // it inherits all of the public and protected methods as well as properties from Parent class
  // Private: Access within class only, Does not outside class
  // Protected :: Access in class and inherited class, Does not outside in those class
  // public :: Access in class and putside of class as well

//   - The final keyword can be used to prevent class inheritance or to prevent method overriding.
//   The following example shows how to prevent class inheritance:
//   final class Fruit {
//     // some code
//   }
// - The following example shows how to prevent method overriding:
//   final public function intro() {
//     // some code
//   }


# Traits ::
// So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

// Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
// - You can use Multiple Traits
// - To use a trait in a class, use the use keyword:
// <?php
//   trait message1 {
//   public function msg1() {
//       echo "OOP is fun! ";
//     }
//   }

//   class Welcome {
//     use message1;
//   }

//   $obj = new Welcome();
//   $obj->msg1();
// ?>
// Here, we declare one trait: message1. Then, we create a class: Welcome. The class uses the trait, and all the methods in the trait will be available in the class.

// If other classes need to use the msg1() function, simply use the message1 trait in those classes. This reduces code duplication, because there is no need to redeclare the same method over and over again.