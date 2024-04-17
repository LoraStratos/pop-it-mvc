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
                $readerID = $_GET['id'] ?? null;
                foreach ($reader as $reader) {
                    if ($reader->id == $readerID) {
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
                        break;
                    }
                }
            ?>

        </div>
        <h3>Взятые книги</h3>
        <div class="book">
            <img src="/pop-it-mvc/public/media/Война и мир.jpg">
            <div>
                <p>Война и мир</p>
                <p>Л.Н. Толстой</p>
            </div>
            <div>
                <div>
                    <p>Выдана:</p>
                    <p>25.12.23</p>
                </div>
                <div>
                    <p>Сдана:</p>
                    <button class="return"><a href="#">Вернуть</a></button>
                </div>
            </div>
        </div>
        <div class="book">
            <img src="/pop-it-mvc/public/media/Война и мир.jpg">
            <div>
                <p>Война и мир</p>
                <p>Л.Н. Толстой</p>
            </div>
            <div>
                <div>
                    <p>Выдана:</p>
                    <p>25.12.23</p>
                </div>
                <div>
                    <p>Сдана:</p>
                    <button class="return"><a href="#">Вернуть</a></button>
                </div>
            </div>
        </div>
    </div>
    <div>
        <button class="iss"><a href="<?= app()->route->getUrl('/issuance') ?>">Выдать книгу</a></button>
    </div>
</div>