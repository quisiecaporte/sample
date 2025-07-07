<?php

// This is main branch Calculator class update
class Calculator
{
    // properties
    private $num1;
    private $num2;
    private $operator;


    public function __construct($num1, $num2, $operator)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;
    }

    public function getNum1()
    {
        return $this->num1;
    }

    public function getNum2()
    {
        return $this->num2;
    }

    public function getOperator()
    {
        return $this->operator;
    }

    public function compute()
    {
        if ($this->operator == '+'){
            $result = $this->num1 + $this->num2;
        }elseif ($this->operator == '-'){
            $result = $this->num1 - $this->num2;
        }elseif ($this->operator == '*'){
            $result = $this->num1 * $this->num2;
        }elseif ($this->operator == '/'){
            $result = $this->num1 / $this->num2;
        }
        return $result;
    }
}
