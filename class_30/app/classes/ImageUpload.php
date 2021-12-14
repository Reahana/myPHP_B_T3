<?php

namespace App\classes;


class ImageUpload
{
//    public $value;
//    public $directory;
//    public $result=[];
//    public $imageName;
//    public $fileType;
    protected  $post;
    protected  $file;
    protected $imageName;
    protected $directory;
    protected $fileType;

    public function __construct($data, $file)
    {
//        $this->value=$data;
        $this->post = $data;
        $this->file = $file;
//        echo '<pre>';
//        print_r($this->file);
//        echo '</pre>';
    }
    public  function index()
    {

//        $this->directory ='../assests/img/upload/'.$_FILES['image']['name'];
//        move_uploaded_file($_FILES['image']['tmp_name'],$this->directory);
////        $this->result=[
////            'name'=>  $this->value['name'],
////            'image'=> $this->directory,
////        ];
//       echo  $this->fileType =pathinfo($this->imageName,PATHINFO_EXTENSION);
//
//       if ($this->fileType == 'jpg' || $this->fileType== 'png')
//       {
//           move_uploaded_file($_FILES['image']['tmp_name'],$this->directory);
//       }else
//       {
//           echo 'your file type is error';
//       }
        $this->imageName = $this->file['img']['name'];
        $this->directory = '../assets/img/uploads/'.$this->imageName;


        $this->fileType = pathinfo($this->imageName, PATHINFO_EXTENSION);

       if (!file_exists($this->directory))
       {
           if ($this->fileType == 'jpg' || $this->fileType == 'png' )
           {
               move_uploaded_file($this->file['img']['tmp_name'],$this->directory);
           }
           else
           {
               echo 'please upload a jpg or png file';
           }
       }else
       {
           die ('vai, file ase .. onno image den');
       }
    }
}