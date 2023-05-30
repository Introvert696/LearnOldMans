<?php
require_once "controllers/dbconnect.php";
class Test
{
    public static function all()
    {
        $tests = dbConnect::connect("Select * from tests");
        return $tests;
    }
    static public function get($id)
    {
        $test = dbConnect::connect("Select * from tests where id = '$id'");
        return $test;
    }
    static public function getByArticle($articleId)
    {
        $test = dbConnect::connect("Select * from tests where for_article = '$articleId'");
        return $test;
    }
}
