<?php

namespace Challenge\Model;

use PHPUnit\Framework\TestCase;

class NumberTest extends TestCase {

    public function testResultadodosMultiplos(){

        $num = new Number(70);

        $this->assertEquals('BHUT', $num->multiple());
    }
}