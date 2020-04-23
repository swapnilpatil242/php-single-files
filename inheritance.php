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
  // used key word "extends" to inherit all parent properties
  // it inherits all of the public and protected methods as well as properties from Parent class
  // Private: Access within class only, Does not outside class
  // Protected :: Access in class and inherited class, Does not outside in those class
  // public :: Access in class and putside of class as well
