<?php
require_once "controllers/dbconnect.php";
class User
{
    public static function all()
    {
        $users = dbConnect::connect("Select * from users");
        return $users;
    }
    public static function get($login, $password)
    {
        $user = dbConnect::connect("Select login from users where login='$login' and password='$password'");
        return $user;
    }
    public static function getByLogin($login)
    {
        $user = dbConnect::connect("Select * from users where login='$login' ");
        return $user;
    }
    public static function insert($fio, $birthday, $login, $password, $phone, $email)
    {
        $user = dbConnect::connect("Insert into users(FIO,birhday,login,password,phone,email,is_admin) values ('$fio','$birthday','$login','$password','$phone','$email',0)");
        return true;
    }
}
