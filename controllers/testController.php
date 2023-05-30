<?php
// коннектим модель тестов
require_once 'models/Test.php';
require_once 'models/Test_result.php';

class TestController
{
    static public function indexAction()
    {
        // вывод всех тестов
        $tests = Test::all();
        require_once 'views/tests.php';
    }
    static public function showAction($id, $user)
    {
        // получение одного теста
        $test = Test::get($id);
        // проверяем есть ли запись в таблице с ответами
        // тем самым проверяем, отвечал ли пользователь на тест
        $hasResult = TestController::checkTestAnswer($id, $user);

        if (isset($test[0])) {
            $test = $test[0];
            // если у нас есть запись в таблице с результатами, то 
            // добавляем еще 1 аттрибут в тест, для отображения
            // на странице
            if ($hasResult) {
                $test['hasResult'] = true;
                $test['response'] = $hasResult['is_current'];
            } else {
                $test['hasResult'] = false;
            }
            require_once 'views/testselect.php';
        } else {
            print_r("Not found");
        }
    }

    static public function checkTestAnswer($id, $user)
    {
        $testResult = Test_result::getByTestUser($id, $user['id']);

        if (isset($testResult[0])) {
            return $testResult[0];
        } else {
            return false;
        }
        print_r($testResult);
    }
}
