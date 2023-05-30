<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>Тест </title>
</head>


<body>
    <header>
        <div class="left-side">
            <p>Повышение информационной грамотности пенсионеров</p>
        </div>
        <div class="right-side">
            <a href="#">Главная</a>
            <a href="/articles">Статьи</a>
            <a href="/profile">Профиль</a>
            <a href="#">О нас</a>
        </div>
    </header>
    <div class="main-test">

        <?php if ($test['hasResult']) { ?>
            <?php if ($test['response'] == 0) { ?>
                <p>Вы ответили неверно</p>
            <?php } ?>
            <?php if ($test['response'] == 1) { ?>
                <p>Вы ответили верно</p>
            <?php } ?>

        <?php } ?>
        <p><?php echo $test['title'] ?></p>


        <form action="/test" method="post">
            <div class="test">
                <input type="hidden" name="id" value="<?php echo $test["id"]; ?>">
                <div>
                    <div class="variant">
                        <input type="radio" name="answer" id="one_answer" value="1">
                        <label for="one_answer"><?php echo $test["one_answer"]; ?></label>
                    </div>
                    <div class="variant">
                        <input type="radio" name="answer" id="two_answer" value="2">
                        <label for="two_answer"><?php echo $test["two_answer"]; ?></label>
                    </div>
                </div>
                <div>
                    <div class="variant">
                        <input type="radio" name="answer" id="three_answer" value="3">
                        <label for="three_answer"><?php echo $test["three_answer"]; ?></label>
                    </div>
                    <div class="variant">
                        <input type="radio" name="answer" id="four_answer" value="4">
                        <label for="four_answer"><?php echo $test["four_answer"]; ?></label>
                    </div>
                </div>
            </div>

            <button type="submit" class="select-test">Выбрать</button>
        </form>
        <div class="back-to-article">
            <a href="../articles/<?php echo $test['for_article'] ?>"> <-- Назад к статье</a>
        </div>

    </div>
</body>

</html>