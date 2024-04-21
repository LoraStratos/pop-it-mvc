<link rel="stylesheet" href="/pop-it-mvc/public/css/signup.css">
<div class="signup_div">
    <form method="post" class="signup_form">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <h2>Добавление нового пользователя</h2>
        <div>
            <p>Логин:</p>
            <input type="text" name="login" placeholder="Логин">
        </div>
        <div>
            <p>Пароль:</p>
            <input type="password" name="password" placeholder="Пароль">
        </div>
        <button>Добавить пользователя</button>
        <h3><?= $message ?? ''; ?></h3><br>
    </form>
</div>