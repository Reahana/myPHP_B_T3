<?php
namespace App\classes;
use App\classes\Student;

class User extends Student
{
    public $username;
    public $password;
    public $token;
    public $test;


    public function __construct($data)
    {
      
        $this->test=$data;
        echo $this->test;
    }

    public function login()
    {
        // $this->
        echo $this->name;
    }

    public function logout()
   {

    echo 'logout';
   }

   public function changePassword()
   {
       echo 'change Password';
   }
}