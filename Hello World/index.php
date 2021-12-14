<?php
require_once './vendor/autoload.php';

use App\classes\Example;
use App\classes\User;
use App\classes\Person;

$person = new Person;
$person->index();

echo '<br/>';

// $example = new Example;
// $example->index();

// echo '<br/>';

// $user = new User;
// $user->login();