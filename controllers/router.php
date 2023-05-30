<?php
// подключение контроллеров
require_once "indexController.php";
require_once "loginController.php";
require_once "profileController.php";
require_once "articleController.php";
require_once "registerController.php";
require_once "testController.php";
require_once "testResultController.php";

class Router
{

    function route()
    {
        //Обработка и получение массива с юрлами
        $current_uri = explode("/", $_SERVER['REQUEST_URI']);
        array_shift($current_uri);

        // обработка роутов 
        // тут проверяем путь и коннектим разные контроллеры и экшены
        // которые выводят разные страницы
        if ($current_uri[0] == "") {
            IndexController::indexAction();
        } else if ($current_uri[0] == "login") {
            // тут проверяем есть ли данные в пост
            if (isset($_POST["login"]) ?? isset($_POST["password"])) {
                // если есть, то пробуем ввойти в аккаунт
                $auth = loginController::loginAction($_POST['login'], $_POST['password']);
                // если пользователь в базе дынных есть, редиректим на страницу профиля
                if ($auth) {
                    header("Location: /profile");
                }
            }
            // если нету данных, и пользователь просто перешел на страницу
            loginController::indexAction();
        }
        // обработка роута профиля, так проверяется, аутентифицирован пользователь
        // или нет
        else if ($current_uri[0] == "profile" && $this->Auth()) {
            profileController::indexAction();
        }
        // Роут для просмотра статей
        else if ($current_uri[0] == "articles") {
            // если есть айди после слеша, то пытаемся получить статью
            if (isset($current_uri[1])) {
                ArticleController::showAction($current_uri[1], $this->Auth());
            }
            // если нету, то выводим список
            else {
                ArticleController::indexAction();
            }
        }
        // Роут для регистрации
        else if ($current_uri[0] == "register") {
            if (isset($_POST['FIO']) && isset($_POST['birhday']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['phone']) && isset($_POST['email'])) {
                RegisterController::storeAction($_POST['FIO'], $_POST['birhday'], $_POST['login'], $_POST['password'], $_POST['phone'], $_POST['email']);
            }
            RegisterController::indexAction();
        }
        // Роут для тестов
        else if ($current_uri[0] == "test" && $this->Auth()) {
            // если есть айди после слеша, то пытаемся получить тест
            if (isset($current_uri[1])) {
                TestController::showAction($current_uri[1], $this->Auth());
            }
            // если нету, то выводим список тестов
            else {
                //так же проверяем пост, если там есть ответ,
                // то сохраняем его
                if (isset($_POST["answer"])) {
                    TestResultController::storeAction($this->Auth(), $_POST["id"], $_POST["answer"]);
                } else {
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                }
            }
        }
        // Роут "Не найдено" 404 ошибки
        else {
            require_once "views/gotologin.php";
        }
    }
    // функция для проверки пользователя на аутентифицированость
    // если есть куки, и куки валидны, а не левые, то пользователь проходит дальше
    // по роуту
    function Auth()
    {
        if (isset($_COOKIE["user"])) {
            $result = loginController::checkuser($_COOKIE["user"]);
            if (!$result) {
                unset($_COOKIE['user']);
                setcookie('user', null, -1, '/');
                return false;
            } else {
                return $result[0];
            }
        }
    }
}
