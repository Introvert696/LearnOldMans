<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/style.css" />
  <title>Профиль</title>
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
      <a href="/">Главная</a>
      <a href="/articles">Статьи</a>
      <a href="/profile">Профиль</a>
    </div>
  </header>
  <section class="user-info">
    <div class="section-title">
      <p>Мой профиль</p>
    </div>
    <div class="user-info-content">
      <img src="assets/avatar.png" alt="avatar" width="139" height="139" />
      <div class="about-user-info">
        <p>ФИО: <span><?php echo $user["FIO"] ?></span></p>
        <p>Дата рождения: <span><?php echo $user["birhday"] ?></span></p>
        <p>Номер телефона: <span><?php echo $user["phone"] ?></span></p>
        <p>Электронная почта: <span><?php echo $user["email"] ?></span></p>
        <?php if (isset($myTest['correct_answers'])) { ?>
          <p>Пройдено тестов: <span><?php echo $myTest['correct_answers'] ?> верных из <?php echo $myTest['total_questions'] ?> вопросов</span></p>
        <?php } ?>
      </div>
    </div>
  </section>
</body>

</html>