<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<?php
if (!app()->auth::check()):
    ?>
    <form method="post">
        <div class="form-group">
            <label for="login">Логин</label>
            <input type="text" id="login" name="login" required>
        </div>
        <div class="form-group">
            <label for="password">Пароль</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn-login">Войти</button>
    </form>
<?php endif;