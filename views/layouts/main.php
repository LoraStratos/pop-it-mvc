<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/pop-it-mvc/public/css/main.css">
    <title>Библиотека</title>
</head>
<body>
<main>
    <div class="nav">
        <nav>
            <?php
                if (app()->auth::check()):
            ?>
                <a href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
                <?php
                    if (!app()->auth::checkRole()):
                ?>
                    <a href="<?= app()->route->getUrl('/books') ?>">Книги</a>
                    <a href="<?= app()->route->getUrl('/readers') ?>">Читатели</a>
                    <a href="<?= app()->route->getUrl('/pictures') ?>">Картинки</a>
                    <a href="<?= app()->route->getUrl('/logout') ?>">Выйти</a>
                <?php else: ?>
                    <a href="<?= app()->route->getUrl('/signup') ?>">Добавить пользователя</a>
                    <a href="<?= app()->route->getUrl('/logout') ?>">Выйти</a>
                <?php
                    endif;
                ?>
            <?php
                endif;
            ?>
        </nav>
    </div>
    <div>
        <?= $content ?? '' ?>
    </div>
</main>

</body>
</html>