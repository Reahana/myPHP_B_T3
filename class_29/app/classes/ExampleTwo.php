<?php
namespace App\classes;

class ExampleTwo
{
    public $startingNumber;
    public $endingNumber;
    public $incrDecr;
    public $result;
    public $i;
  
    public function __construct($data)
    {
        $this->startingNumber = $data['starting_number'];
        $this->endingNumber = $data['ending_number'];
        $this->incrDecr = $data['incr_decr'];
    }

    public function index()
    {
         for($this->i=$this->startingNumber;$this->i<= $this->endingNumber;$this->i+=$this->incrDecr)
         {
            $this->result .= $this->i.' ';
         }
         return $this->result;
    }
}