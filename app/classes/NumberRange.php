<?php


namespace App\classes;


class NumberRange
{
    public $firstNumber, $lastNumber, $result;

    public function __construct($post)
    {
        $this->firstNumber = $post['first_number'];
        $this->lastNumber = $post['last_number'];
    }

    public function numberRange()
    {
        if ($this->firstNumber > $this->lastNumber) {
            for ($i = $this->firstNumber; $i >= $this->lastNumber; $i--) {
                $this->result = $this->result . ' ' . $i;
            }
            $this->result;

        } elseif ($this->firstNumber < $this->lastNumber) {
            for ($i = $this->firstNumber; $i <= $this->lastNumber; $i++) {
                $this->result = $this->result . ' ' . $i;
            }
            $this->result;
        } elseif ($this->firstNumber == $this->lastNumber) {
            $this->result = $this->firstNumber;
        }
        header("Location:action.php?page=career&&result=$this->result");
    }

}