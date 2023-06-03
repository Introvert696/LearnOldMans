<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/style.css" />
  <title>Статьи</title>
</head>

<body>
  <header>
    <div class="logo">
      <p>
        Повышение информационной <br />
        грамотности пенсионеров
      </p>
    </div>
    <div class="header-links">
      <a href="#">Главная</a>
      <a href="#">Статьи</a>
      <a href="#">Профиль</a>
    </div>
  </header>
  <div class="section-title">
    <p>Уроки</p>
  </div>
  <section class="articles">
    <?php foreach ($tags as $t) :  ?>
      <div class="razdel">
        <span><?php print_r($t['tag']); ?></span>
        <br />

        <?php foreach ($articles as $a) :  ?>
          <?php if ($a['tag_title'] == $t['tag']) { ?>
            <p><a href="/articles/<?php echo ($a['article_id']); ?>"><?php echo ($a['article_title']); ?></a></p>
          <?php } ?>
        <?php endforeach ?>

      </div>
    <?php endforeach ?>


  </section>
</body>

</html>