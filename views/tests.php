<?php
require "layout/head.php";
?>

<body>
    <?php foreach ($tests as $t) { ?>
        <div>
            <p>Тест номер: <?php echo $t['id'] ?></p>
            <p> <?php echo $t['title'] ?></p>
            <a href="/test/<?php echo $t['id'] ?>">Перейти</a>
        </div>
    <?php } ?>
</body>

</html>