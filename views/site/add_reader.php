<link rel="stylesheet" href="/pop-it-mvc/public/css/add_reader.css">
<div class="add_reader_div">
    <form method="post" class="add_reader_form">
        <h2>Добавление нового читателя</h2>
        <div>
            <p>Фио:</p>
            <div class="fio">
                <input type="text" name="name" placeholder="Фамилия" required>
                <input type="text" name="surname" placeholder="Имя" required>
                <input type="text" name="patronymic" placeholder="Отчество">
            </div>
        </div>
        <div>
            <p>Номер телефона:</p>
            <input type="text" name="number" placeholder="Номер телефона" required>
        </div>
        <div>
            <p>Адрес проживания:</p>
            <input type="text" name="address" placeholder="Адрес проживания" required>
        </div>
        <button>Добавить читателя</button>
    </form>
</div>
