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
            <select>
                <?php
                foreach ($author as $author){
                    echo "<option value=\"$author->name $author->surname\">$author->name $author->surname</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <p>Год издания:</p>
            <input type="text" name="year" placeholder="Год издания">
        </div>
        <div>
            <p>Тип издания:</p>
            <select required>
                <?php
                foreach ($edition as $edition){
                    echo "<option value=\"$edition->type_edition\">$edition->type_edition</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <p>Аннотация:</p>
            <textarea cols="50" rows="3" name="annotation" placeholder="Краткое описание книги"></textarea>
        </div>
        <div>
            <p>Обложка:</p>
            <input type="file" accept="image/*" required>
        </div>
        <button>Добавить книгу</button>
    </form>
</div>
