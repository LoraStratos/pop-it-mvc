<div class="div">

    <form method="post" class="login_form">
        <h2>Вход</h2>
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <button>Войти</button>
    </form>
    <h3><?= $message ?? ''; ?></h3>

    <h3><?= app()->auth->user()->name ?? ''; ?></h3>
    <?php
    if (!app()->auth::check()):
    ?>
</div>
<?php endif;