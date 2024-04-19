<link rel="stylesheet" href="/pop-it-mvc/public/css/issuance.css">
<div>
    <form class="iss_form" method="post">
        <h2>Выдача книги</h2>
        <div>
            <p>Книга:</p>
            <div class="book_list">
                <select name="book">
                    <?php
                    foreach ($book as $book){
                        echo "<option value=\"$book->id\">$book->title</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div>
            <p>Дата возврата:</p>
            <input type="date" id="date" name="date" required>
        </div>
        <button>Выдать книгу</button>
    </form>

</div>