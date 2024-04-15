<link rel="stylesheet" href="/pop-it-mvc/public/css/issuance.css">
<div>
    <h2>Выдача книги</h2>
    <form class="iss_form">
        <div>
            <p>Книга:</p>
            <div class="book_list">
                <input type="text" autocomplete="off" list="books" placeholder="Поиск...">
                <datalist id="books">
                    <?php
                    foreach ($book as $book){
                        echo "<option value=\"$book->title\">$book->title</option>";
                    }
                    ?>
                </datalist>
            </div>
        </div>
        <div>
            <p>Дата возврата:</p>
            <input type="date">
        </div>
    </form>

</div>