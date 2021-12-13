<?php

require_once '../vendor/autoload.php';

use App\classes\Auth;

if (isset($_POST['btn']))
{
    $auth = new Auth($_POST);
    $message=$auth->login();
    include 'addUser.php';


}
//else if (isset($_GET['status'] )) {
//    if ($_GET['status'] == 'manage') {
//        $addUser = new  AddUser();
//        $allUser = $addUser->getAllUserInfo();
//        include 'manageUser.php';
//    }
//}
else
{
    header('Location: home.php');
}