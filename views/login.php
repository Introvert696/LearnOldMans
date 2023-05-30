<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Вход</title>
</head>

<body>

    <form action="/login" method="POST" class="login-form">
        <h1>Авторизация:</h1>
        <div class="input-box">
            <label for="login">Логин:</label>
            </br>
            <input type="text" name="login" id="login">
            </br>
        </div>
        <div class="input-box">
            <label for="password">Пароль:</label>
            </br>
            <input type="password" name="password" id="password">
            </br>
        </div>
        <br>
        <button type="submit">Войти</button>
        <br>
        <br>
        <a href="/register">Или зарегистрируйтесь!</a>

    </form>

</body>

</html>