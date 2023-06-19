<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Register</title>
</head>

<body>

    <form method="POST" class="login-form" action="/register">
        <h1>Регистрация</h1>
        <div class="input-box">
            <label for="fio">Введите ФИО:</label>
            <br>
            <input type="text" name="FIO">
        </div>
        <div class="input-box">
            <label for="birhday">Введите дату рождения:</label>
            <br>
            <input type="date" name="birhday">
        </div>
        <div class="input-box">
            <label for="login">Введите логин:</label>
            <br>
            <input type="text" name="login">
        </div>
        <div class="input-box">
            <label for="password">Введите пароль:</label>
            <br>
            <input type="password" name="password">
        </div>
        <div class="input-box">
            <label for="phone">Введите номер телефона:</label>
            <br>
            <input type="number" name="phone">
        </div>
        <div class="input-box">
            <label for="email">Введите почту:</label>
            <br>
            <input type="email" name="email">
        </div>
        <br>
        <button type="submit">Регистрация </button>
    </form>
</body>

</html>