<?php 

require 'Calculator.php';
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
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

  // Data provider
  // A data provider method return an array of arrays or an object that implements the Iterator interface. 
  // The test method will be called with the contents of the array as its arguments.
  // Data provider method must be public.
  // Data provider return an array of a collection data.
  // Test method use annotation(@dataProvider) to declare its data provider method
  // When need to call same function with diff values then used data provider
  // Below defind the data provider
  public function addDataProvider() {
    return array(
      array(2, 7, 9),
      array(0, 4, 4),
      array(5, 1, 6),
    );
  }

  // Use data provider
  /**
   * @dataProvider addDataProvider
   */
  public function testAddWithDataProvider($elem1, $elem2, $expected) {
    $result = $this->calculator->add($elem1, $elem2);
    $this->assertEquals($expected, $result);
  }

  // created data provider
  public function addDataProviderForUpperString() {
    return array(
      array("swapnil", "SWAPNIL"),
      array("software engineer", "SOFTWARE ENGINEER")
    );
  }
  // used above data provider
  /**
   * @dataProvider addDataProviderForUpperString
   */
  public function testUpperCaseWithDataProvider($get_string, $expected) {
    $result = $this->calculator->stringUpper($get_string);
    $this->assertEquals($expected, $result);
  }


}
?>
