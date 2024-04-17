<link rel="stylesheet" href="/pop-it-mvc/public/css/books.css">
<div class="main_list">
<div class="books_div">
    <h2>Книги</h2>
    <form method="post" class="form_search">
        <input type="text" placeholder="Поиск" name="search">
        <button type="submit">Найти</button>
        <button><a href="<?=app()->route->getUrl('/books'); ?>">Сбросить</a></button>
    </form>
    <span><?= $message ?? '';?></span>
        <?php
            $bookID = $_GET['id'] ?? null;
            foreach ($book as $book) {
                $author = \Model\Author::where('id', $book->author)->first();
                    echo "
                    <div class='one_book'>
                    <img src='$book->img'>
                    <div>
                        <p>$book->title</p>
                        <p>$author->name $author->surname</p>
                        <p>$book->year_edition г.</p>
                    </div>
                    <div>
                        <p>$book->price руб.</p>
                        <button><a href='" . app()->route->getUrl('/book?id=' . $book->id) . "'>Подробнее</a></button>
                    </div>
                    </div>
                ";

            }
        ?>
</div>
    <button class="add"><a href="<?= app()->route->getUrl('/add_book') ?>">Добавить книгу</a></button>
</div>
