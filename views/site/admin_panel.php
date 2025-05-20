<div class="sidebar">
    <div class="sidebar-header">
        <h3>Администратор</h3>
    </div>
    <ul class="sidebar-menu">
        <li><a href="#" class="active">Системные администраторы</a></li>
        <li><a href="#">Выход</a></li>
    </ul>
</div>

<div class="main-content">
    <h2>Управление системными администраторами</h2>

    <div class="card">
        <div class="card-header">
            <h3>Добавить системного администратора</h3>
        </div>
        <form id="addAdminForm">
            <div class="form-group">
                <label>Логин</label>
                <input type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Пароль</label>
                <input type="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Добавить</button>
        </form>
    </div>

    <div class="card">
        <div class="card-header">
            <h3>Список системных администраторов</h3>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Логин</th>
                <th>Дата добавления</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody id="adminsTableBody">
            </tbody>
        </table>
    </div>
</div>