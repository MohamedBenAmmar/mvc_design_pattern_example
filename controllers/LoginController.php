<?php
use Implementation\UserImplementation;
require_once 'logic/interfaces/IUser.php';
require_once 'logic/implementation/UserImplementation.php';

if (isset($_POST['username']) && isset($_POST['password'])){
$user = UserImplementation::login($_POST['username'],$_POST['password']);
var_dump($user);
}





