<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/6/2021
 * Time: 3:08 PM
 */

namespace App\classes;


class AddUser
{
    private $name;
    private $email;
    private $mobile;
    private $password;
    private $filePath;
    private $file;
    private $data;
    private $array;
    private $arrayOne;
    private $arrayTwo;
    private $imageFile;
    private $directory;
    private $imageName;

    public function __construct($data=null,$file=null)
    {
        if ($data && $file) {
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->mobile = $data['mobile'];
            $this->password = $data['password'];
            $this->imageFile = $file;
        }
        $this->filePath ='./db.txt';
    }
    public function index()
    {
//        $this->data ="$this->name,$this->email,$this->mobile,$this->password";
//        echo $this->data;
        $this->imageName =$this->imageFile['image']['name'];
        $this->directory ='../assets/img/'.$this->imageName;
        move_uploaded_file($this->imageFile['image']['tmp_name'],$this->directory);

        $this->file= fopen($this->filePath,'a');
        $this->data ="$this->name,$this->email,$this->mobile,$this->password,$this->directory#";
        fwrite($this->file, $this->data);
        fclose($this->file);
        return 'Student info save successfully';
    }

    public  function  getAllUserInfo()
    {

        $this->data = file_get_contents($this->filePath);
        $this->array = explode("#",$this->data);


        foreach ($this->array as $key=>$value)
        {

            $this->arrayOne = explode(",",$value);
            if($value)
            {
                $this->arrayTwo[$key]['name'] = $this->arrayOne[0];
                $this->arrayTwo[$key]['email'] = $this->arrayOne[1];
                $this->arrayTwo[$key]['password'] = $this->arrayOne[2];
                $this->arrayTwo[$key]['mobile'] = $this->arrayOne[3];
                $this->arrayTwo[$key]['image'] = $this->arrayOne[4];
            }


        }
        return $this->arrayTwo;

    }
}