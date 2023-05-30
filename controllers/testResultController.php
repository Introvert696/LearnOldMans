<?php
require_once "models/Test_result.php";
require_once "models/Test.php";

class TestResultController
{
    static public function storeAction($user, $id, $answer)
    {
        $userid = $user["id"];
        $test = Test::get($id)[0];

        if ($test["current_answer"]  == $answer) {
            $result = Test_result::insert($userid, $id, 1);
        } else {
            $result = Test_result::insert($userid, $id, 0);
        }
        print("Ответ записан");
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    static public function allMy($id)
    {
        $myTest = Test_result::getMyTest($id)[0];
    }
}
