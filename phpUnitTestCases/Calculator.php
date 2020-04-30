<?php 

class Calculator {
 
  public function add($num1, $num2) {
    return $num1 + $num2;
  }

  public function sub($num1, $num2) {
    return $num1 - $num2;
  }

  public function stringUpper($name) {
    return strtoupper($name);
  }

}

$obj1 = new Calculator();
echo $obj1->add(3, 2);
echo $obj1->sub(5, 1);
echo $obj1->stringUpper("swapnil");


?>
