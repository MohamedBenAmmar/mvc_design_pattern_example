<?php

namespace Inter;
use Entities\User;

interface IUser{
public static function login(string $username , string $password) : bool;
}