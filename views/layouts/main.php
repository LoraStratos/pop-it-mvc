<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/pop-it-mvc/public/css/login.css">
    <link rel="stylesheet" href="/pop-it-mvc/public/css/main.css">
    <title>Библиотека</title>
</head>
<body>
<header>
<!--    <nav>-->
<!--        <a href="--><?php //= app()->route->getUrl('/hello') ?><!--">Главная</a>-->
<!--        --><?php
//        if (!app()->auth::check()):
//            ?>
<!--            <a href="--><?php //= app()->route->getUrl('/login') ?><!--">Вход</a>-->
<!--            <a href="--><?php //= app()->route->getUrl('/signup') ?><!--">Регистрация</a>-->
<!--        --><?php
//        else:
//            ?>
<!--            <a href="--><?php //= app()->route->getUrl('/logout') ?><!--">Выход (--><?php //= app()->auth::user()->name ?><!--)</a>-->
<!--        --><?php
//        endif;
//        ?>
<!--    </nav>-->
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>