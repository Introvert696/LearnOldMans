<?php
require_once "models/Article.php";
require_once "models/Tag.php";
require_once "models/Test.php";
class ArticleController
{
    public static function indexAction()
    {
        $articles = Tag::articles();
        $tags = Tag::all();

        require_once "views/articles.php";
    }
    public static function showAction($id, $user)
    {
        $tests = Test::getByArticle($id);
        $nowTests = [];
        foreach ($tests as $test) {
            $hasResult = TestController::checkTestAnswer($test["id"], $user);

            if (isset($test)) {

                // если у нас есть запись в таблице с результатами, то 
                // добавляем еще 1 аттрибут в тест, для отображения
                // на странице
                if ($hasResult == True) {
                    $test['hasResult'] = true;
                    $test['response'] = $hasResult['is_current'];
                } else {
                    $test['hasResult'] = false;
                }
                array_push($nowTests, $test);
            }
        }
        //print_r($nowTests);
        $article = Article::get($id);
        if (!empty($article)) {
            $article = $article[0];
            require_once "views/viewarticle.php";
        } else {
            print("Not found");
        }
    }
}
