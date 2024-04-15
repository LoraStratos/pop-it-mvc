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
            <div>
                <p>Иванов</p>
                <p>Иван</p>
                <p>Иванович</p>
                <p>№12345</p>
                <p>88005553535</p>
                <p>ул.Новая д.1 кв.2</p>
            </div>
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