<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 12/1/2021
 * Time: 2:34 PM
 */

namespace App\classes;


class ImageUp
{
    protected  $post;
    protected  $file;
    protected $imageName;
    protected $directory;
    protected $fileType;
    protected  $check;
    protected  $name;
    protected $tmpName;


    public function __construct($data, $file)
    {

        $this->post = $data;
        $this->file = $file;
//        echo '<pre>';
//        print_r($this->file);
//        echo '</pre>';
    }
    public function index()
    {

        $this->imageName = $this->file['image']['name'];

        $this->fileType = pathinfo($this->imageName, PATHINFO_EXTENSION);

        $this->tmpName= str_replace(' ','_',$this->post['name']);
        $this->name =$this->tmpName.'_'.time().'.'.$this->fileType;

        $this->directory = '../assests/img/upload/'.$this->name;

        $this->check =getimagesize($this->file['image']['tmp_name']);

        if($this->check)
        {
            if (!file_exists($this->directory))
            {
                if ($this->fileType == 'jpg' || $this->fileType == 'png' )
                {
                    move_uploaded_file($this->file['image']['tmp_name'],$this->directory);
                    return
                    [
                        'name' => $this->post['name'],
                        'image' => $this->directory
                    ];

                }
                else
                {
                    echo 'please upload a jpg or png file';
                }
            }
            else
            {
                die (' file ase .. onno image den');
            }
        }
        else
        {
            echo 'vai chobi den.' ;
        }


    }
}