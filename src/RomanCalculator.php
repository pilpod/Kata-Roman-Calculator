<?php 

namespace App;


class RomanCalculator {

    private string $firstNumber;
    private string $secondNumber;
    private string $number;

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
        $this->joinNumbers();
        $this->replaceIfMoreThenFour($this->number);
        $this->changeToV();
        return $this->number;
    }

    public function replaceIfMoreThenFour(string $numb) : string
    {
        $this->number = str_replace('IIII', 'IV', $numb );
        return $this->number;
    }

    public function joinNumbers() : string
    {
        $this->number = $this->firstNumber . $this->secondNumber;
        return $this->number;
    }

    public function changeToV()
    {
        $this->number = str_replace('IVI', 'V', $this->number);
    }
}

