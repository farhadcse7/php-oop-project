<?php


namespace App\classes;


class Calculator
{
    public $firstNumber, $lastNumber, $choice, $result;

    public function __construct($post)
    {
        $this->firstNumber = $post['first_number'];
        $this->lastNumber = $post['last_number'];
        $this->choice = $post['choice'];
    }

    public function calculate()
    {
        if ($this->choice == '+') {
            $this->result = $this->firstNumber + $this->lastNumber;
        } elseif ($this->choice == '-') {
            $this->result = $this->firstNumber - $this->lastNumber;
        } elseif ($this->choice == '*') {
            $this->result = $this->firstNumber * $this->lastNumber;
        } elseif ($this->choice == '/') {
            echo $this->result = $this->firstNumber / $this->lastNumber;
        } elseif ($this->choice == '%') {
            $this->result = $this->firstNumber % $this->lastNumber;
        }
        header("Location:action.php?page=contact&&result=$this->result");
    }

}