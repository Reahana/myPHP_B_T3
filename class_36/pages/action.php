<?php

require_once '../vendor/autoload.php';

use App\classes\Student;

if (isset($_POST['btn']))
{
    $student = new Student($_POST,$_FILES);
    $message=$student->save();
    include  'home.php';

} else if (isset($_GET['status']))
{
    if ($_GET['status']== 'manage')
    {
        $student = new Student();
        $students=$student->getAllStudentInfo();
        include 'manage.php';
    }

}
else if(isset($_GET['delete']))
{
    $student = new Student();
    $student->delete($_GET['delete']);
}
else if(isset($_GET['edit']))
{
    $student = new Student();
    $studentInfo=$student->getAllStudentInfoById($_GET['edit']);
    include 'edit.php';

}
