<?php

namespace Controller;

use Model\User;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class AdminPanel
{
    public function adminPanel(Request $request): string
    {
        $user = app()->auth::user();

        if(!$user){
            return (string)new View('site.admin_panel', ['message' => 'Необходима авторизация']);
        }

        if($user->role_id != 1){
            return (string)new View('site.admin_panel', ['message' => 'У вас нет прав для доступа к этой странице']);
        }

        if($request->method === 'POST'){
                User::create([
                    'login' => $request->login,
                    'password' => md5($request->password),
                    'role_id' => 2
                ]);

                return (string)new View('site.admin_panel', [
                    'message' => 'Системный администратор успешно добавлен'
                ]);
        }

        // GET-запрос - просто показываем страницу
        return (string)new View('site.admin_panel');
    }
}