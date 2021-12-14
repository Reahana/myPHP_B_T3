<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/2/2021
 * Time: 2:14 PM
 */

namespace App\classes;


class Student
{
       private $name;
       private $email;
       private $mobile;
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
                $this->imageFile =$file;
            }
            $this->filePath ='./db.txt';

        }

        public function index()
        {
            $this->imageName =$this->imageFile['image']['name'];
            $this->directory ='../assets/img/'.$this->imageName;
            move_uploaded_file($this->imageFile['image']['tmp_name'],$this->directory);

            $this->file= fopen($this->filePath,'a');
            $this->data ="$this->name,$this->email,$this->mobile,$this->directory#";
            fwrite($this->file, $this->data);
            fclose($this->file);
            return 'Student info save successfully';

//            echo $this->name. ' ' .$this->email.' '. $this->mobile;
        }
        public  function  getAllStudentInfo()
        {

            $this->data = file_get_contents($this->filePath);
           $this->array = explode("#",$this->data);
//            echo '<pre>';
//            print_r($this->array);
//            echo '</pre>';

            foreach ($this->array as $key=>$value)
            {
//                    echo $value.'<br/>';
                    $this->arrayOne = explode(",",$value);
                    if($value)
                    {
                        $this->arrayTwo[$key]['name'] = $this->arrayOne[0];
                        $this->arrayTwo[$key]['email'] = $this->arrayOne[1];
                        $this->arrayTwo[$key]['mobile'] = $this->arrayOne[2];
                        $this->arrayTwo[$key]['image'] = $this->arrayOne[3];
                    }


                }
            return $this->arrayTwo;
//            echo '<pre>';
//            print_r($this->arrayTwo);
//            echo '</pre>';
        }
}