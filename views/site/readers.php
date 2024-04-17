<link rel="stylesheet" href="/pop-it-mvc/public/css/readers.css">
<div class="main_list">
<div class="readers_div">
    <h2>Читатели</h2>
    <form method="post" class="form_search">
        <input type="text" placeholder="Поиск" name="search">
        <button type="submit">Найти</button>
        <button><a href="<?=app()->route->getUrl('/readers'); ?>">Сбросить</a></button>
    </form>
    <span><?= $message ?? '';?></span>
    <?php
        foreach ($readers as $readers) {
            echo "<div class=\"one_reader\">
            <div>
                <p>Читательский билет №$readers->id</p>
                <p>$readers->surname $readers->name $readers->patronymic</p>
                <p>+$readers->number</p>
            </div>
            <div>
            <button><a href='".app()->route->getUrl('/reader?id='.$readers->id)."'>Подробнее</a></button>
            </div>
        </div>";
    }
    ?>
</div>
    <button><a href="<?= app()->route->getUrl('/add_reader') ?>">Добавить читателя</a></button>
</div>
