<?php

namespace Controller;
use Model\User;
use Model\Post;
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
}