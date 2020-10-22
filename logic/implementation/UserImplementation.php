<?php

namespace Implementation;

use Inter\IUser;
use Entities\User;
use Database\Db;

class UserImplementation implements IUser
{

    public static function login(string $username, string $password): bool
    {
        $user = new User();
        $db = Db::getInstance();
        $sql = "SELECT * FROM USER WHERE login=:login AND password=:password";
        $query = $db->prepare($sql);
        $query->bindParam(':login',$username);
        $query->bindParam(':password',$password);
        $query->execute();
        $result = $query->fetchAll();
        if (count($result) !== 1){
            return false;
        }
        $user->setFullName($result[0]['fullName']);
        $user->setPassword($result[0]['password']);
        $user->setId($result[0]['id']);
        $user->setLogin($result[0]['login']);
        $_SESSION['user'] = $user;
        return true;
    }
}