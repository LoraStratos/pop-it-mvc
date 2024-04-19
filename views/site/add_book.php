<link rel="stylesheet" href="/pop-it-mvc/public/css/add_book.css">
<div class="add_book_div">
    <form enctype="multipart/form-data" method="post" class="add_book_form">
        <h2>Добавление новой книги</h2>
        <div>
            <p>Название:</p>
            <input type="text" name="title" placeholder="Название" required>
        </div>
        <div>
            <p>Автор:</p>
            <button class="add"><a href="<?= app()->route->getUrl('/add_author') ?>">Добавить автора</a></button>
            <select name="id_author">
                <?php
                foreach ($author as $author){
                    echo "<option value=\"$author->id_author\">$author->name $author->surname</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <p>Цена:</p>
            <input type="text" name="price" placeholder="Цена">
        </div>
        <div>
            <p>Год издания:</p>
            <input type="text" name="year_edition" placeholder="Год издания">
        </div>
        <div>
            <p>Тип издания:</p>
            <select name="id_type_edition" required>
                <?php
                foreach ($edition as $edition){
                    echo "<option value=\"$edition->id_type_edition\">$edition->type_edition</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <p>Аннотация:</p>
            <textarea cols="50" rows="3" name="annotation" placeholder="Краткое описание книги"></textarea>
        </div>
        <button>Добавить книгу</button>
    </form>
</div>
