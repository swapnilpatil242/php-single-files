<?php
  use PHPUnit\Framework\TestCase;
  
  class DependTest extends TestCase {
    public function testEmpty() {
      $stack = [];
      $this->assertEmpty($stack);
      
      return $stack;
    }

    /**
     * @depends testEmpty
     */
    public function testPush(array $stack) {
      array_push($stack, 'one');
      $this->assertSame('one', $stack[count($stack)-1]);
      $this->assertNotEmpty($stack);

      return $stack;
    }

    /**
     * @depends testPush
     */
    public function testPop(array $stack) {
      $this->assertSame('one', array_pop($stack));
      $this->assertEmpty($stack);
    }

    public function testFruit() {
      $this->assertTrue(true);
      return "apple";
    }

    public function testTree() {
      $this->assertTrue(true);
      return "Neem";
    }

    /**
     * @depends testFruit
     * @depends testTree
     */
    public function testMultiDependencies($a, $b) {
      $this->assertSame('apple', $a);
      $this->assertSame('Neem', $b);
    }
  }

?>
