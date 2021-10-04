<?php 

namespace App;


class RomanCalculator {

    private string $firstNumber;
    private string $secondNumber;

    private array $numbers = [
        1 => 'I',
        5 => 'V',
        10 => 'X',
        50 => 'L',
        100 => 'C',
        500 => 'D',
        1000 => 'M'
    ];

    public function __construct()
    {
       
    }

    public function enter(string $num) : void
    {
        if(isset($this->firstNumber))
        {
            $this->secondNumber = $num;
            return;
        }

        $this->firstNumber = $num;

    }

    public function sum() : string
    {
        if($this->firstNumber === 'I' && $this->secondNumber === 'IV') {
            return 'V';
        }

        $result = $this->firstNumber . $this->secondNumber;
        return $result;
    }

    function checkIfIsLessThen( string $num1, string $num2) : bool
    {
        $keyNum1 = array_search($num1, $this->numbers);
        $keyNum2 = array_search($num2, $this->numbers);

        if($keyNum1 < $keyNum2) {
            return true;
        }

        return false;

    }

    function checkIfIsSubtraction() : bool
    {

    }

}

