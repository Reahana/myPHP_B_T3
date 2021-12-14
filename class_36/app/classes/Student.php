<?php

namespace App\classes;


class Student
{
    private $name;
    private $email;
    private $password;
    private $mobile;
    private $imageName;
    private $file;
    private $directory;
    private $link;
    private $sql;
    private $imgURL;
    private $queryResult;
    private $data=[];
    private $row;
    private $i;


    public function __construct($data=null,$file=null)
    {
        if ($data)
        {
            $this->name = $data['name'];
            $this->email = $data['email'];
            $this->password = md5($data['password']);
            $this->mobile = $data['mobile'];

        }

        if ($file)
        {
            $this->file= $file;
        }
    }
    private function getImageURL()
    {
        $this->imageName=$this->file['image']['name'];
        $this->directory ='../assets/img/'. $this->imageName;
        move_uploaded_file($this->file['image']['tmp_name'],$this->directory );
        return  $this->directory;
    }
    public function save()
    {
        $this->link = mysqli_connect('localhost','root','','example_two');
        if ($this->link)
        {
            $this->imgURL =$this->getImageURL();
            $this->sql ="INSERT INTO students (name,email,password,mobile,image) VALUES (' $this->name','$this->email','$this->password','$this->mobile',' $this->imgURL')";
            if (mysqli_query($this->link ,$this->sql))
            {
                return 'Student Registration Complete';
            }
            else
            {
                die('Query problem'.mysqli_error($this->link));
            }
        }
    }
    public  function getAllStudentInfo()
    {
        $this->link = mysqli_connect('localhost','root','','example_two');
        if ($this->link)
        {
            $this->sql ="SELECT * FROM students";
            if (mysqli_query($this->link ,$this->sql))
            {
                $this->queryResult = mysqli_query($this->link ,$this->sql);
                $this->i = 0;
                while ($this->row=mysqli_fetch_assoc($this->queryResult ))
                {
                    $this->data[$this->i]['id']= $this->row ['id'];
                    $this->data[$this->i]['name']= $this->row ['name'];
                    $this->data[$this->i]['email']= $this->row ['email'];
                    $this->data[$this->i]['mobile']= $this->row ['mobile'];
                    $this->data[$this->i]['image']= $this->row ['image'];
                    $this->i++;
                }


                return $this->data;
            }
            else
            {
                die('Query problem'.mysqli_error($this->link));
            }
        }
    }
    public  function  delete($id)
    {
        $this->link = mysqli_connect('localhost','root','','example_two');
        $this->sql ="DELETE FROM students WHERE  id= '$id'";
        mysqli_query($this->link ,$this->sql);
       header('Location: action.php?status=manage');

    }
    public function getAllStudentInfoById($id)
    {
        $this->link = mysqli_connect('localhost','root','','example_two');
        $this->sql ="SELECT * FROM students WHERE  id= '$id'";
        $this->queryResult = mysqli_query($this->link ,$this->sql);
        return mysqli_fetch_assoc($this->queryResult);
    }
}