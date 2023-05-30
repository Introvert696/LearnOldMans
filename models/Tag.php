<?php
require_once "controllers/dbconnect.php";
class Tag
{
    static public function all()
    {
        $users = dbConnect::connect("Select * from tags");
        return $users;
    }
    static public function articles()
    {
        $articles = dbConnect::connect("select * ,(select title from articles where `article_id` =articles.`id`) as article_title,(select tag from tags where `tag_id` =tags.`id`) as tag_title from article_tag");
        return $articles;
    }
}
