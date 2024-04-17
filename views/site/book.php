<link rel="stylesheet" href="/pop-it-mvc/public/css/book.css">
<div>
    <div class="book_div">
        <h2>Война и мир</h2>
        <?php
            $bookID = $_GET['id'] ?? null;
            foreach ($books as $book) {
                $author = \Model\Author::where('id', $book->author)->first();
                $edition = \Model\Edition::where('id', $book->type_edition)->first();
                    if ($book->id == $bookID) {
                        echo "
                            <div class='book_block'>
                            <div>
                                <img src='$book->img'>
                                <div class='info_book'>";
                        if ($author->patronymic != null) {
                            echo "<p>Автор: $author->name $author->patronymic $author->surname</p>";
                        } else {
                            echo "<p>Автор: $author->name $author->surnanme</p>";
                        }
                        echo "<p>Год издания: $book->year_edition г.</p>
                                        <p>Тип издания: $edition->type_edition</p>
                                        <div class='price'>
                                            <p>Цена:</p>
                                            <p>$book->price руб</p>
                                        </div>
                                    </div>
                                </div>
                                <p>Аннотация: <br>$book->annotation</p>
                            </div>
                        ";
                        break;
                        }
            }
        ?>

    </div>
    <h3>История выдачи</h3>
    <div class="reader">
        <div>
            <p>Читательский билет №12345</p>
            <p>Иванов Иван Иванович</p>
            <p>+8(000) 000-00-00</p>
        </div>
        <div>
            <div>
                <p>Выдана:</p>
                <p>25.12.23</p>
            </div>
            <div>
                <p>Сдана:</p>
                <p>01.01.24</p>
            </div>
        </div>
    </div>
    <div class="reader">
        <div>
            <p>Читательский билет №12345</p>
            <p>Иванов Иван Иванович</p>
            <p>+8(000) 000-00-00</p>
        </div>
        <div>
            <div>
                <p>Выдана:</p>
                <p>25.12.23</p>
            </div>
            <div>
                <p>Сдана:</p>
                <p>01.01.24</p>
            </div>
        </div>
    </div>
</div>
