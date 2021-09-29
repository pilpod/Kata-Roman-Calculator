<?php 

namespace App;


class RomanCalculator {

    private string $firstNumber;
    private string $secondNumber;

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
        $result = $this->firstNumber . $this->secondNumber;
        return $result;
    }

}

