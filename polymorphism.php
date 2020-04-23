<?php 

interface Shape {
  public function calcArea();
}

class Circle implements Shape {
  private $radius;

  public function __construct($radius) {
    $this->radius = $radius;
  }
  
  // calcArea calculates the area of circles 
  public function calcArea() {
    return $this->radius * $this->radius * pi();
  }
}

class Rectangle implements Shape {
  private $width;
  private $height;
   
  public function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }
  
  // calcArea calculates the area of rectangles   
  public function calcArea() {
    return $this->width * $this->height;
  }
}

$circ = new Circle(3);
$rect = new Rectangle(3,4);

echo $circ -> calcArea();
echo "\n";
echo $rect -> calcArea();
echo "\n";

# Polymorphism :: (via the use of "implements" keyword)
// This is an object oriented concept where same function can be used for different purposes.
// The word polymorphism means having many forms.
// - Real life example of polymorphism: A person at the same time can have different characteristic. Like a man at the same time is a father, a husband, an employee. So the same person posses different behaviour in different situations. This is called polymorphism.
// - For example function name will remain same but it take different number of arguments and can do different task