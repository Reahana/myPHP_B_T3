<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/5/2021
 * Time: 2:33 PM
 */

namespace App\classes;


class PrimeNumber
{
    private $givenNumber;
    private $result;
    private $i;


    public function __construct($data)
    {
        $this->givenNumber=$data['given_number'];
    }
    public function index()
    {
        $this->result="Your number $this->givenNumber is  prime";
        for($this->i=2;$this->i<$this->givenNumber;$this->i++)
        {
            if ($this->givenNumber%$this->i==0)
            {
               return $this->result="Your number $this->givenNumber is not prime";
                break;
            }
        }
        return $this->result;
    }
}