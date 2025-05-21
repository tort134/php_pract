<?php

namespace Controller;

use Model\User;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class Site{

    public function hello(): string{
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function go(): string{
        return new View('site.go', ['message' => 'go working']);
    }

    public function signup(Request $request): string{
        if($request->method === 'POST' && User::create($request->all())){
            app()->route->redirect('/hello');
        }

        return new View('site.signup');
    }

    public function login(Request $request): string{

        if($request->method === 'GET'){
            return new View('site.login');
        }

        if(Auth::attempt($request->all())){
            app()->route->redirect('/hello');
        }

        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void{
        Auth::logout();

        app()->route->redirect('/hello');
    }

    public function adminPanel(Request $request): string {
        if (!isset($request->role_id)) {
            return new View('site.admin_panel', ['message' => 'Не указана роль пользователя']);
        }

        $user = User::where('role_id', $request->role_id)->first();

        if(!$user->role_id == 1){
            return new View('site.admin_panel', ['message' => 'У вас нет прав для доступа к этой странице']);
        }

        if($user->role_id == 1){
            return new View('site.admin_panel');
        }

        return new View('site.admin_panel', ['message' => 'У вас нет прав для доступа к этой странице']);
    }
}