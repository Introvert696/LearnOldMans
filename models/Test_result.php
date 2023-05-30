<?php
require_once "controllers/dbconnect.php";

class Test_result
{
    static public function insert($userId, $testId, $isCurrent)
    {
        $test = dbConnect::connect("Delete from test_result where user='$userId' and test='$testId'");
        $test = dbConnect::connect("Insert into test_result (user,test,is_current) VALUES ('$userId','$testId','$isCurrent')");
        return $test;
    }
    static public function getByTestUser($id, $userId)
    {
        $test = dbConnect::connect("Select * from test_result where test = '$id' and user = '$userId'");
        return $test;
    }
    static public function getMyTest($id)
    {
        // SELECT user, SUM(CASE WHEN is_current = 1 THEN 1 ELSE 0 END) AS correct_answers, COUNT(test) AS total_questions FROM test_result where user = $id GROUP BY user
        $test = dbConnect::connect("SELECT user, SUM(CASE WHEN is_current = 1 THEN 1 ELSE 0 END) AS correct_answers, COUNT(test) AS total_questions FROM test_result where user = '$id' GROUP BY user");
        return $test;
    }
}
