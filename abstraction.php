<?php

abstract class Animal  {  
  public $name;  
  public $age; 
  
  public function Describe() {  
    return $this->name . ", " . $this->age . " years old";      
  }  
  
  abstract public function Greet();  
}  

class cat extends Animal {  
  public function Greet() {  
    return "Lion!";      
  } 
  public function Describe() {  
    return parent::Describe() . ", and I'm a cat!";      
  }
}

$animal = new cat();  
$animal->name = "Seru";  
$animal->age = 5;  
echo $animal->Describe();  
echo "\n";
echo $animal->Greet();  
echo "\n";

# Abstraction :: (An abstract class or method is defined with the abstract keyword)
// It shows only useful information, remaining are hidden form the end user. Abstraction is the any representation of data in which the implementation details are hidden (abstracted).
// Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
// An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.