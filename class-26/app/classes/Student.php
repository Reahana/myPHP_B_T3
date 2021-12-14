<?php
namespace App\classes;

class Student
{   
    public $name = "Reahana";
    protected $email ='reahana@gmail.com';
    private $mobile ='01837420391 ';

    public function one ()
    {
        // $this->$name;
        echo 'i am one';
    }
    protected function two ()
    {   

        echo 'i am two';
    }
    private function three ()
    {

        echo 'i am three';
    }
}