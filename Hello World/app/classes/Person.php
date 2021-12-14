<?php
namespace App\classes;

class Person 
{
    public $firstName;
    public $lastName;
    public $x;
    public $y;
    public $z;

    public function index()
    {
        // $this->firstName  = 'Reahana';
        // $this->lastName = 'Gomes';
        // echo  $this->firstName.' '.$this->lastName;
        // echo gettype( $this->firstName);
        // $this->test();
        $this->oparator();

    }
    public function test ()
    {
        echo 'Hello I am Test';
    }

    public function oparator()
    {
        $this->x = 10;
        $this->y = 20;
        $this->z = 30;


        switch($this->z){
            case 5: echo 'Hello';
                break;
            case 10:echo 'Hi';
                break;
            case 20:echo 'world';
                break;   
            case 10:echo 'Hi';
                break;   
            case 30:echo 'bye';
                break;
            case 40: echo 'Amanda';
                break;
                default : echo 'ok';
        }

        // if($this-> x < $this->y)
        // {
        //     echo 'Hi';
        // }
        // else if($this-> y > $this->z)
        // {
        //     echo 'World';
        // }
        // else if($this-> z >= $this->x)
        // {
        //     echo 'hello';
        // }
        // else
        // {
        //     echo 'Bitm';
        // }

        // if($this-> x > $this->y)
        // {
        //     echo 'Amanda';
        // }
        // else
        // {
        //     echo 'Bitm';
        // }
      
        // echo $this-> x > $this->y;
        // echo '<br/>';
        // echo $this-> x >= $this->y;
        // echo '<br/>';
        // echo $this-> x < $this->y;
        // echo '<br/>';
        // echo $this-> x <= $this->y;
        // echo '<br/>';
        // echo $this-> x == $this->y;
        // echo '<br/>';
        // echo $this-> x != $this->y;
        // echo '<br/>';
        // echo $this-> x === $this->y;
        // echo '<br/>';
        // echo $this-> x !== $this->y;
        // echo '<br/>';


        // echo $this->x +=  $this->y ;
        // echo '<br/>';

        // echo $this->x -=  $this->y ;
        // echo '<br/>';

        // echo $this->x *=  $this->y;
        // echo '<br/>';

        // echo $this->x /=  $this->y ;
        // echo '<br/>';

        // echo $this->x %=  $this->y ;
        // echo '<br/>';

        // echo $this->x .=  $this->y ;
        // echo '<br/>';

        // echo ++$this->x;
        // echo '<br/>';
        // echo $this->x++;


        // echo $this->x + $this->y;
        // echo '<br/>';

        // echo $this->x - $this->y;
        // echo '<br/>';

        // echo $this->x * $this->y;
        // echo '<br/>';

        // echo $this->x / $this->y;
        // echo '<br/>';

        // echo $this->x % $this->y;
        // echo '<br/>';
        
        
    }
}