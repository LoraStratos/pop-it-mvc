<link rel="stylesheet" href="/pop-it-mvc/public/css/book.css">
<div>
    <div class="book_div">

        <?php
                    $author = $book->getAuthor;
                    $edition = $book->getEdition;
                    $fullNameAuthor = $author->name . ' ' . $author->patronymic . ' ' . $author->surname;
                    $notFullNameAuthor = $author->name . ' ' . $author->surname;
                    echo "
                         <h2>$book->title</h2>
                         <div class='book_block'>
                             <div>
                             <div class='info_book'>";
                    if ($author->patronymic != null) {
                        echo "<p>Автор: $fullNameAuthor</p>";
                    } else {
                        echo "<p>Автор: $notFullNameAuthor</p>";
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
        ?>

    </div>
    <h3>История выдачи</h3>

    <?php
        foreach ($book->issuances as $issuance) {
            if ($issuance->id_status == 1 || $issuance->id_status == 3) {
                $reader = $issuance->getReader;
                $fullNameReader = $reader->name . ' ' . $reader->patronymic . ' ' . $reader->surname;
                $notFullNameReader = $reader->name . ' ' . $reader->surname;
                echo "
                <div class='reader'>
                <div>
                    <p>Читательский билет №$reader->id</p>";
                if ($reader->patronymic != null) {
                    echo "<p>$fullNameReader</p>";
                } else {
                    echo "<p>$notFullNameReader</p>";
                }
                echo "
                    <p>+$reader->number</p>
                </div>
                <div>
                    <div>
                        <p>Выдана:</p>
                        <p>$issuance->date_of_issue</p>
                    </div>
                    <div>
                        <p>Должны вернуть:</p>
                        <p>$issuance->return_date</p>
                    </div>
                    <div>
                        <p>Сдана:</p>
                        <p>$issuance->actual_date</p>
                    </div>
                </div>
            </div>
            ";
            }
        }
    ?>



</div>
