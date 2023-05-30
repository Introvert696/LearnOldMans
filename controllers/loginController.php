<?php
require_once "models/User.php";
class LoginController
{
    public static function indexAction()
    {
        require_once  "views/login.php";
    }
    public static function loginAction($login, $password)
    {
        $user = User::get($login, $password);
        if (!empty($user)) {
            setcookie("user", $user[0]["login"]);
            return true;
        }
        return false;
    }
    public static function checkuser($login)
    {
        $user = User::getByLogin($login);
        if (!empty($user)) {

            return $user;
        }
        return false;
    }
}
