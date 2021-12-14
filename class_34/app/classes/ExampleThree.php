<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/6/2021
 * Time: 4:14 PM
 */

namespace App\classes;


abstract class ExampleThree
{
    public  $value1;
    public $value2;

    public function __construct()
    {

        $this->value1 = 100;
        $this->value2 =200;
    }

    public function ten ()

    {
        $this->value1 = 100;
        echo $this->value1;
    }
    abstract function twenty();
}