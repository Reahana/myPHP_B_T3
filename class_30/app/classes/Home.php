<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 11/30/2021
 * Time: 2:34 PM
 */

namespace App\classes;


class Home
{
    public  function  index()
    {
        header('Location:pages/mainHome.php');
    }
}