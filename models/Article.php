<?php
require_once "controllers/dbconnect.php";
class Article
{
    static public function all()
    {
        $articles = DbConnect::connect("Select * from articles");
        return $articles;
    }
    static public function get($id)
    {
        $article = DbConnect::connect("Select * from articles where id = '$id'");
        return $article;
    }
}
