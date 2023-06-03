<?php
require "layout/head.php";
?>
<div class="profile">
    <div class="userinfo">
        <h3>Информация о пользователе:</h3>
        ФИО: <?php echo $user["FIO"] ?>
        <br>
        Дата рождения: <?php echo $user["birhday"] ?>
        <br>
        Номер телефона: <?php echo $user["phone"] ?>
        <br>
        Почта: <?php echo $user["email"] ?>
        <br>
        <p>Ответы: <?php echo $myTest['correct_answers'] ?> верных из <?php echo $myTest['total_questions'] ?> вопросов</p>
        <br>
        <br>
        <a href="/articles">Посмотреть статьи </a>
    </div>

</div>
</body>

</html>