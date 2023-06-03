<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <title>Главная</title>
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
    <div class="login-section">
      <form action="/login" method="POST">
        <div class="login-title">
          <p>Авторизация</p>
        </div>

        <div class="input">
          <input type="text" name="login" id="login" placeholder="Логин:" />
        </div>
        <div class="input">
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Пароль:"
          />
        </div>
        <button type="submit" class="subm-btn">Войти</button>
        <div class="reg-link">
          <a href="/register">или зарегистрируйтесь</a>
        </div>
      </form>
    </div>
  </body>
</html>
