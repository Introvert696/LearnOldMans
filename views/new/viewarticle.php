<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/main.css">
    <title>view</title>
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
    <div>

        <div class="article-content">

            <div class="article-title-view"><?php echo $article['title'] ?></div>
            <?php if ($article['video_link'] != null) { ?>
                <iframe style="width: 90vw;height: 90vh;" src="<?php echo $article['video_link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <?php } ?>
            <div class="article-text"><?php echo $article['content'] ?></div>
            <div class="article-date">Дата создания: <?php echo $article['create_at'] ?></div>
        </div>
        <br>
        <hr>
    </div>
    <div class="test-title">
        <p>Тесты:</p>
    </div>
    <?php foreach ($nowTests as $test) { ?>
        <!-- <div class="tests">

            <p>Тест: <?php echo $t['title'] ?></p>
            <a href="../test/<?php echo $t['id'] ?>"> -> Пройти тест <- </a>

        </div> -->
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


        </div>
    <?php } ?>
    <button>Проверить все ответы</button>
    <script>

    </script>
</body>


</html>