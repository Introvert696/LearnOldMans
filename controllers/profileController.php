<?php
require_once "models/User.php";
require_once "models/Test_result.php";
class ProfileController
{
    public static function indexAction()
    {

        $userLogin = $_COOKIE["user"];
        $user = User::getByLogin($userLogin)[0];

        $myTest = Test_result::getMyTest($user["id"])[0];
        //print_r($myTest);
        require_once "views/profile.php";
    }
}
