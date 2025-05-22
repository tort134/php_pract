<div class="sidebar">
    <div class="sidebar-header">
        <h3>Администратор <?= app()->auth::user()->login ?></h3>
    </div>
</div>

<h3><?= $message ?? ''; ?></h3>

<div class="main-content">
    <div class="card">
        <div class="card-header">
            <h3>Добавить системного администратора</h3>
        </div>

        <form id="addAdminForm" method="POST">

            <div class="form-group">
                <label>Логин</label>
                <input type="text" class="form-control" name="login" required>
            </div>

            <div class="form-group">
                <label>Пароль</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>

    </div>
</div>