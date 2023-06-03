<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Document</title>
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
    <div class="articles">

        <?php foreach ($tags as $t) :  ?>
            <div class="tag-section">
                <p><?php print_r($t['tag']); ?></p>
                <hr>
            </div>
            <br>
            <?php foreach ($articles as $a) :  ?>
                <?php if ($a['tag_title'] == $t['tag']) { ?>
                    <div class="article">
                        <p class="article-title"><?php echo ($a['article_title']); ?></p>
                        <a href="/articles/<?php echo ($a['article_id']); ?>"> Перейти</a>
                    </div>
                <?php } ?>
            <?php endforeach ?>
            <br>
        <?php endforeach ?>


    </div>
</body>

</html>