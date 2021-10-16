<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\RomanCalculator;
use App\Models\Number;

class RomanCalculatorTest extends TestCase {

    function test_I_plus_I_equals_II() 
    {
        $firstNumber = new Number('I');
        $secondNumber = new Number('I');

        $calculator = new RomanCalculator();
        $calculator->enter($firstNumber->num);
        $calculator->enter($secondNumber->num);
        $result = $calculator->sum();

        $this->assertEquals('II', $result);
    }

     function test_II_plus_II_equals_IV()
    {
        $firstNumber = new Number('II');
        $secondNumber = new Number('II');

        $calculator = new RomanCalculator();
        $calculator->enter($firstNumber->num);
        $calculator->enter($secondNumber->num);
        $result = $calculator->sum();

        $this->assertEquals('IV', $result);
    }

    function test_III_plus_II_equals_V()
    {
        $firstNumber = new Number('III');
        $secondNumber = new Number('II');

        $calculator = new RomanCalculator();
        $calculator->enter($firstNumber->num);
        $calculator->enter($secondNumber->num);
        $result = $calculator->sum();

        $this->assertEquals('V', $result);
    }

    function test_I_plus_IV_equals_V()
    {
        $firstNumber = new Number('I');
        $secondNumber = new Number('IV');

        $calculator = new RomanCalculator();
        $calculator->enter($firstNumber->num);
        $calculator->enter($secondNumber->num);
        $result = $calculator->sum();

        $this->assertEquals('V', $result);
    }

    function test_V_plus_I_equals_VI()
    {
        $firstNumber = new Number('V');
        $secondNumber = new Number('I');

        $calculator = new RomanCalculator();
        $calculator->enter($firstNumber->num);
        $calculator->enter($secondNumber->num);
        $result = $calculator->sum();

        $this->assertEquals('VI', $result);
    }

    function test_III_plus_III_equals_VI()
    {
        $firstNumber = new Number('III');
        $secondNumber = new Number('III');

        $calculator = new RomanCalculator();
        $calculator->enter($firstNumber->num);
        $calculator->enter($secondNumber->num);
        $result = $calculator->sum();

        $this->assertEquals('VI', $result);
    }

    function test_V_plus_IV_equals_IX()
    {
        $firstNumber = new Number('V');
        $secondNumber = new Number('IV');

        $calculator = new RomanCalculator();
        $calculator->enter($firstNumber->num);
        $calculator->enter($secondNumber->num);
        $result = $calculator->sum();

        $this->assertEquals('IX', $result);
    }

    function test_V_plus_V_equals_X()
    {
        $firstNumber = new Number('V');
        $secondNumber = new Number('V');

        $calculator = new RomanCalculator();
        $calculator->enter($firstNumber->num);
        $calculator->enter($secondNumber->num);
        $result = $calculator->sum();

        $this->assertEquals('X', $result);
    }


/*
    function test_check_if_first_number_is_less_then_the_second_number()
    {
        $firstNumber = new Number('I');
        $secondNumber = new Number('V');
        $calculator = new RomanCalculator();
        
        $result = $calculator->checkIfIsLessThen($firstNumber->num, $secondNumber->num);

        $this->assertIsBool($result);
        $this->assertTrue($result);
    }

    function test_check_if_second_number_is_less_then_the_first_number()
    {
        $firstNumber = new Number('C');
        $secondNumber = new Number('L');
        $calculator = new RomanCalculator();
        
        $result = $calculator->checkIfIsLessThen($firstNumber->num, $secondNumber->num);

        $this->assertIsBool($result);
        $this->assertFalse($result);
    } */

}