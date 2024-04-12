<div class="signup_div">
    <form method="post" class="signup_form">
        <h2>Добавление нового пользователя</h2>
        <div>
            <p>Логин:</p>
            <input type="text" name="login" placeholder="Логин" required>
        </div>
        <div>
            <p>Пароль:</p>
            <input type="password" name="password" placeholder="Пароль" required>
        </div>
        <button>Добавить пользователя</button>
    </form>
    <h3><?= $message ?? ''; ?></h3>
</div>