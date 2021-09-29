<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\RomanCalculator;
use App\Models\Number;

class RomanCalculatorTest extends TestCase {

    function test_I_plus_I_equals_II() {
        $firstNumber = new Number('I');
        $secondNumber = new Number('I');

        $calculator = new RomanCalculator();
        $calculator->enter($firstNumber->num);
        $calculator->enter($secondNumber->num);
        $result = $calculator->sum();

        $this->assertEquals('II', $result);
    }

}