<?php
namespace Controller;
use Model\User;
use Src\View;
use Src\Request;

class Admin {
    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/signup');
        }
        return new View('site.signup');
    }
}
