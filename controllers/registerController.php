<?php
require_once "models/User.php";
class RegisterController
{
    public static function indexAction()
    {
        require_once "views/register.php";
    }
    public static function storeAction($fio, $birthday, $login, $password, $phone, $email)
    {
        $result = User::insert($fio, $birthday, $login, $password, $phone, $email);
        header('Location: /login');
    }
}
