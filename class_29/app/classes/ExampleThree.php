<?php
namespace App\classes;

class ExampleThree
{
    public $result=[];
    
    public function __construct($data)
    {
        $this->result=$data;
    }
    public function index()
    {
        // echo '<pre>';
        // print_r( $this->result);
        // echo '</pre>';
        return $this->result;

    }
}