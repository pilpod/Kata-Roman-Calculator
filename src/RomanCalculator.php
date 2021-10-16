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
        $this->changeToX();
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
        $this->number = str_replace('IIV', 'V', $this->number);
        $this->number = str_replace('IVI', 'V', $this->number);
    }

    public function changeToX()
    {
        $quantityOfV = $this->countHowMuchV();

        if($this->number === 'VV') {
            $this->number = 'X';
        }

        if($quantityOfV === 2 && strlen($this->number) != 1) {
            $this->number = str_replace('V', 'X', $this->number);
            $this->number = ltrim($this->number, 'X');
        }
        
    }

    public function countHowMuchV() : int
    {
        $quantityOfV = substr_count($this->number, 'V');
        return $quantityOfV;
    }

    public function countHowMuchX() : int
    {
        $quantityOfX = substr_count($this->number, 'X');
        return $quantityOfX;
    }
}

