<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/5/2021
 * Time: 3:07 PM
 */

namespace App\classes;


class Auth
{
    private  $email;
    private $userEmail;
    private $password;
    private $userPassword;

    public function __construct($data=null)
    {
        if ($data)
        {
            $this->email= $data['email'];
            $this->password=$data['password'];
        }
    }

    public function index(){
        header('Location:pages/login.php');
    }
    public  function login()
    {
        $this->userEmail ='admin@admin.com';
        $this->userPassword ='123456';

        if ($this->email ==  $this->userEmail && $this->password == $this->userPassword)
        {
            session_start();
            $_SESSION['id']= rand(100,500);
            header('Location:home.php');

        }
        else
        {
           return 'Sorry invalid credentials';

        }
    }
    public  function logout()
    {
        session_start();
        unset($_SESSION['id']);
        header('Location:../index.php');
    }
}