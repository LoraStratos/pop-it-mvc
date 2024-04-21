<link rel="stylesheet" href="/pop-it-mvc/public/css/add_author.css">

<form method="post" class="add_author_form">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <h2>Добавление автора</h2>
    <div>
        <p>Фио автора:</p>
        <div class="fio">
            <input type="text" name="surname" placeholder="Фамилия">
            <input type="text" name="name" placeholder="Имя">
            <input type="text" name="patronymic" placeholder="Отчество">
        </div>
    </div>
    <button>Добавить автора</button>
    <h3><?= $message ?? ''; ?></h3><br>
</form>
