<h2>Регистрация нового пользователя</h2>

<h3><?= $message ?? ''; ?></h3>

<form method="POST">
    <label>Логин <input type="text" name="login" required></label>
    <label>Пароль <input type="password" name="password" required></label>
    <button class="btn">Зарегистрироваться</button>
</form>