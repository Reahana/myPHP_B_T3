<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/2/2021
 * Time: 1:55 PM
 */

namespace App\classes;


class Home
{
    public  function  index ()
    {
        header('Location: pages/home.php');
    }
}