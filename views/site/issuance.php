<link rel="stylesheet" href="/pop-it-mvc/public/css/issuance.css">
<div>
    <form class="iss_form">
        <h2>Выдача книги</h2>
        <div>
            <p>Книга:</p>
            <div class="book_list">
                <select>
                    <?php
                    foreach ($book as $book){
                        echo "<option value=\"$book->title\">$book->title</option>";
                    }
                    ?>
                </select>
            </div>
        </div>
        <div>
            <p>Дата возврата:</p>
            <input type="date" id="date">
        </div>
        <button>Выдать книгу</button>
    </form>

</div>