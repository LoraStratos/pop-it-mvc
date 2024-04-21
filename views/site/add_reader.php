<link rel="stylesheet" href="/pop-it-mvc/public/css/add_reader.css">
<div class="add_reader_div">
    <form method="post" class="add_reader_form">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <h2>Добавление нового читателя</h2>
        <div>
            <p>Фио:</p>
            <div class="fio">
                <input type="text" name="name" placeholder="Фамилия">
                <input type="text" name="surname" placeholder="Имя">
                <input type="text" name="patronymic" placeholder="Отчество">
            </div>
        </div>
        <div>
            <p>Номер телефона:</p>
            <input type="text" name="number" placeholder="Номер телефона">
        </div>
        <div>
            <p>Адрес проживания:</p>
            <input type="text" name="address" placeholder="Адрес проживания">
        </div>
        <button>Добавить читателя</button>
        <h3><?= $message ?? ''; ?></h3>
    </form>
</div>
