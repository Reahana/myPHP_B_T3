<?php
namespace App\classes;

class Calculator
{
    public $firstNumber;
    public $lastNumber;
    public $action;
    public $result;

    public function __construct($data)
    {
        $this->firstNumber =$data['first_number'];
        $this->lastNumber =$data['last_number'];
        $this->action =$data['action'];
    }

    public function math ()
    {

        switch($this->action)
        {
            case '+': 
                $this->result=$this->add();
                break;
            case '-': 
                $this->result=$this->sub();
                break;
            case '*': 
                $this->result=$this->mul();
                break;    
            case '/': 
                $this->result=$this->div();
                break;
            case '%': 
                $this->result=$this->remind();
                break;

        }
        return $this->result;
        
    }
    protected function add()
    {
        return $this->firstNumber + $this->lastNumber;
    }
    protected function sub()
    {
        return $this->firstNumber - $this->lastNumber;
    }
    protected function mul()
    {
        return $this->firstNumber * $this->lastNumber;
    }
    protected function div()
    {
        return $this->firstNumber / $this->lastNumber;
    }
    protected function remind()
    {
        return $this->firstNumber % $this->lastNumber;
    }
}