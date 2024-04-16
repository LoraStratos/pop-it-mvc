<?php
namespace Controller;
use Model\Post;
use Model\Book;
use Model\Reader;
use Src\View;
use Src\Request;
use Src\Auth\Auth;

class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'Добро пожаловать в библиотеку!']);
    }

    public function book(): string
    {
        return new View('site.book');
    }

    public function issuance(): string
    {
        $book = Book::all();
        return (new View())->render('site.issuance', ['book' => $book]);
    }

    public function reader(): string
    {
        $reader = Reader::all();
        return (new View())->render('site.reader', ['reader' => $reader]);
    }

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }

    public function books(): string
    {
        $book = Book::all();
        return new View('site.books', ['book' => $book]);
    }
    public function readers(): string
    {
        $readers = Reader::all();
        return new View('site.readers', ['readers' => $readers]);
    }
}
