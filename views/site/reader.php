<link rel="stylesheet" href="/pop-it-mvc/public/css/reader.css">

<div class="reader_one">
    <div>
        <h2>Иванов Иван Иванович</h2>
        <div class="info_reader">
            <div>
                <p>Фамилия:</p>
                <p>Имя:</p>
                <p>Отчество:</p>
                <p>Читательский билет:</p>
                <p>Номер телефона:</p>
                <p>Адрес проживания:</p>
            </div>
            <?php
                        echo "
                        <div>
                            <p>$reader->surname</p>
                            <p>$reader->name</p>
                        ";
                        if ($reader->patronymic != null){
                            echo "<p>$reader->patronymic</p>";
                        } else {
                            echo "<p>-</p>";
                        }
                        echo "
                            <p>№$reader->id</p>
                            <p>+$reader->number</p>
                            <p>$reader->address</p>
                        </div>    
                        ";
            ?>

        </div>
        <h3>Взятые книги</h3>
        <?php
            foreach ($reader->issuances as $issuance) {
                $book = $issuance->getBook;
                $fullNameAuthor = $book->getAuthor->name . ' ' . $book->getAuthor->surname;
                $status = $issuance->getStatuses;
                echo "
                        <div class='book'>
                            <div>
                                <p>$book->title</p>
                                <p>$fullNameAuthor</p>
                                <p>$status->name</p>
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
                                    <p>Сдана:</p>";
                                    if ($issuance->id_status == 2) {
                                        echo "
                                            <form method='post'>
                                                <button class='return' value='{$issuance->id}' name='issuance_id'>Вернуть</button>
                                            </form>
                                        ";
                                    } else {
                                        echo "<p>$issuance->actual_date</p>";
                                    }
                                    echo "
                                </div>
                            </div>
                        </div>
                    ";
            }

        ?>

    </div>
    <div>
        <?php
            echo "<button class='iss'><a href='" . app()->route->getUrl('/issuance?id=' . $reader->id) . "'>Выдать книгу</a></button>";
        ?>
    </div>
</div>