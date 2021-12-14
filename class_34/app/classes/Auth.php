<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/6/2021
 * Time: 4:48 PM
 */

namespace App\classes;
use App\classes\User;

class Auth
{
  private $email;
  private $password;
  private $user;
  private $data;

  public function __construct($data=null)
  {
      if ($data)
      {
          $this->email =$data['email'];
          $this->password =$data['password'];
      }
  }
  public function index()
  {
      header('Location:./pages/login.php');
  }
  public  function login()
  {
    $this->user =new User();
      $this->data =  $this->user->getAllUser();
//     echo '<pre>';
//     print_r($this->user);
//      echo '</pre>';


      foreach ($this->data as $item)
      {
          if ($item['email']==$this->email && $item['password']==$this->password)
          {
              session_start();
              $_SESSION['id']= $item['id'];
              $_SESSION['name'] =$item['name'];
              header('Location: home.php');
          }
      }
      return "Sorryy   ............";
  }
}