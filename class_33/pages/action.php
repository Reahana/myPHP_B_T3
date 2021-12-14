<?php
 require_once '../vendor/autoload.php';

 use App\classes\PrimeNumber;
 use App\classes\Auth;


 if (isset($_POST['btn']))
{
    $primeNumber = new PrimeNumber($_POST);
    $result=$primeNumber->index();
    include 'prime.php';
 }
 elseif (isset($_POST['loginBtn']))
 {
     $auth = new Auth($_POST);
     $message=$auth->login();
     include 'login.php';
 }
 elseif (isset($_GET['status']))
 {
     if ($_GET['status']=='logout')
     {
         $auth = new Auth();
         $auth->logout();
     }
 }
else
{
    header('Location:home.php');
}