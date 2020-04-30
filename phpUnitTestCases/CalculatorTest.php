<?php 

require 'Calculator.php';
use PHPUnit\Framework\TestCase;

final class CalculatorTests extends TestCase
{
  // test case for add
  // public function testAdd()
  // {
  //   $this->assertEquals(
  //     7, Calculator::add(4, 3)
  //   );
  // }

  private $calculator;

  // setUp() is called before each test runs. Keep in mind, it runs before each test, which means, 
  // if you have another test function. It will run setUp() before it too.
  protected function setUp(): void {
    $this->calculator = new Calculator();
  }
  
  // tearDown() is called after each test runs
  protected function tearDown(): void {
    $this->calculator = NULL;
  }

  // PHPUnit will recognize all functions prefixed with test as a test function and run it automatically.
  public function testAdd() {
    $result = $this->calculator->add(4, 3);
    $this->assertEquals(7, $result);
  }

  public function testSub() {
    $result = $this->calculator->sub(5, 1);
    $this->assertEquals(4, $result);
  }

  public function testStringUpper() {
    $result = $this->calculator->stringUpper("swapnil");
    $this->assertEquals("SWAPNIL", $result);
  }
}
?>
