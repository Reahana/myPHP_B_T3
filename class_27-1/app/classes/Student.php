<?php

namespace App\classes;

class Student 
{   
    public $name = 'Bitm';
    public static $location= 'Dhaka';

    public $firstName;
    public $lastName;
    public $fullName;

  

    public function __construct($data)
    {
        $this->firstName = $data['first_name'];
        $this->lastName = $data['last_name'];
       
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
    }

    public function index ()
     {
        $this->fullName =$this->firstName.' '.$this->lastName;
        return $this->fullName;
        
        
        //  echo 'Hello World ';
        //  echo $this->name;
        //  echo $this->$location;

     }

     public static function test ()
     {
        //  echo ' Hello Reahana ';
         echo self::$location;
         
     }

    
}