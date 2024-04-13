<link rel="stylesheet" href="/pop-it-mvc/public/css/readers.css">
<div class="main_list">
<div class="readers_div">
    <h2>Читатели</h2>
    <form method="get" class="form_search">
        <input type="search" placeholder="Поиск">
        <button>Найти</button>
    </form>
    <div class="one_reader">
        <div>
            <p>Читательский билет №12345</p>
            <p>Иванов Иван Иванович</p>
            <p>+8(000) 000-00-00</p>
        </div>
        <div>
            <button><a href="<?= app()->route->getUrl('/reader') ?>">Подробнее</a></button>
        </div>
    </div>
    <div class="one_reader">
        <div>
            <p>Читательский билет №12345</p>
            <p>Иванов Иван Иванович</p>
            <p>+8(000) 000-00-00</p>
        </div>
        <div>
            <button><a href="<?= app()->route->getUrl('/reader') ?>">Подробнее</a></button>
        </div>
    </div>
</div>
    <button><a href="<?= app()->route->getUrl('/add_reader') ?>">Добавить читателя</a></button>
</div>
