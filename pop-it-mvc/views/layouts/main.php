<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Pop it MVC</title>
</head>
<body>
<header>
    <nav>
        <a href="<?= app()->route->getUrl('/students') ?>">Главная</a>
        <?php
        if (!app()->auth::check()):
            ?>
            <a href="<?= app()->route->getUrl('/login') ?>">Вход</a>
        <?php
        else:
            ?>
            <a href="<?= app()->route->getUrl('/groops') ?>">Группы</a>
            <a href="<?= app()->route->getUrl('/disciplines') ?>">Дисциплины</a>
            <a href="<?= app()->route->getUrl('/users') ?>">Сотрудники</a>
            <a href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        <?php
        endif;
        ?>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
