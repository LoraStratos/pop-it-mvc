<link rel="stylesheet" href="/pop-it-mvc/public/css/books.css">
<div class="main_list">
<div class="books_div">
    <h2>Книги</h2>
    <form method="get" class="form_search">
        <input type="search" placeholder="Поиск">
        <button>Найти</button>
    </form>
    <div class="one_book">
        <img src="/pop-it-mvc/public/media/Война и мир.jpg">
        <div>
            <p>Война и мир</p>
            <p>Л.Н. Толстой</p>
            <p>1867 г.</p>
        </div>
        <div>
            <p>1499 руб.</p>
            <button><a href="<?= app()->route->getUrl('/book') ?>">Подробнее</a></button>
        </div>
    </div>
    <div class="one_book">
        <img src="/pop-it-mvc/public/media/Война и мир.jpg">
        <div>
            <p>Война и мир</p>
            <p>Л.Н. Толстой</p>
            <p>1867 г.</p>
        </div>
        <div>
            <p>1499 руб.</p>
            <button><a href="<?= app()->route->getUrl('/book') ?>">Подробнее</a></button>
        </div>
    </div>
</div>
    <button class="add"><a href="<?= app()->route->getUrl('/add_book') ?>">Добавить книгу</a></button>
</div>
