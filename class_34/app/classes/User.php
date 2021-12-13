<?php


namespace App\classes;


class User
{
    public $name;
    public $email;
    public $data;

    public function __construct()
    {
//        $this->name ='BITM';
//        $this->email='info@bitm.org.bd';
    }

    public function  index ()
    {
        $this->name ='BITM';
        $this->email='info@bitm.org.bd';
        return "User name is $this->name and email address is $this->email";
    }
    public function getAllUser()
    {
        $this->data =  [
            0=> [
                'id' => 1,
                'name' => 'rafi',
                'email'=> 'rafi@gmail.com',
                'password'=> '123456'
            ],
            1=> [
                'id' => 2,
                'name' => 'Reahana',
                'email'=> 'reahana@gmail.com',
                'password'=> '111222'
            ],
            2=> [
                'id' => 3,
                'name' => 'musa',
                'email'=> 'musa@gmail.com',
                'password'=> '666666'
            ],
        ];

        return $this->data;
    }
}