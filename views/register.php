<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/style.css" />
  <title>Регистрация</title>
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
  <div class="login-section register-section">
    <form action="/register" method="POST">
      <div class="login-title">
        <p>Регистрация</p>
      </div>

      <div class="input">
        <input type="text" name="FIO" id="FIO" placeholder="ФИО:" />
      </div>
      <div class="input">
        <input type="date" name="birhday" id="birhday" placeholder="Дата рождения:" />
      </div>
      <div class="input">
        <input type="text" name="login" id="login" placeholder="Логин:" />
      </div>
      <div class="input">
        <input type="password" name="password" id="password" placeholder="Пароль:" />
      </div>
      <div class="input">
        <input type="number" name="phone" id="phone" placeholder="Номер телефона:" />
      </div>
      <div class="input">
        <input type="email" name="email" id="email" placeholder="Почта:" />
      </div>
      <button type="submit" class="subm-btn">Регистрация</button>
      <div class="reg-link">
        <a href="/login">или войдите</a>
      </div>
    </form>
  </div>
</body>

</html>