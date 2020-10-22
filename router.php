<?php
require_once 'Utils/Db.php';
require_once 'models/User.php';

session_start();
if (isset($_GET['controller'])){
    switch ($_GET['controller']){
        case '':
            require './controllers/IndexController.php';
            break;
        case 'task':
            require './controllers/TaskController.php';
            break;
        case 'profile':
            require './controllers/ProfileController.php';
            break;
        case 'login':
            require  './controllers/LoginController.php';
            break;
        default :
            require './controllers/NotFoundController.php';
            break;
    }

}
