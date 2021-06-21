<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Box;

class BasicTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

     public function testHasItemInBox()
     {
         $box = new Box(['cat', 'toy', 'torch']);
         $this->assertTrue($box->has('toy'));
         $this->assertFalse($box->has('ball'));
     }

     public function testTakeOneFromTheBox()
     {
         $box = new Box(['cat']);
         $this->assertEquals('cat', $box->takeOne());
         $this->assertNull($box->takeOne());
     }

}
