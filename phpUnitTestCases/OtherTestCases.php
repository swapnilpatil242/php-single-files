<?php
use PHPUnit\Framework\TestCase;

class OtherTest extends TestCase {

  public function testPushAndPop() {
    $stack=[];
    $this->assertSame(0, count($stack));
    array_push($stack, 'one');
    $this->assertSame(1, count($stack));
  }

}
?>