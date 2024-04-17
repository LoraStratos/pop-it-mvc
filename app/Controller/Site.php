<?php
namespace Controller;
use Model\Post;
use Model\Edition;
use Model\Book;
use Model\Author;
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
        $edition = Edition::all();
        $books = Book::all();
        $author = Author::all();
        return (new View())->render('site.book', ['books' => $books, 'author' => $author, 'edition' => $edition]);
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

    public function books(Request $request): string
    {
        $message = null;
        $book = [];
        if($request->method==='POST'){
            if ($request->get('search')) {
                $search = $request->get('search');
                if ($search) {
                    $book = Book::where('title', 'like', '%' . $search . '%')->get();
                    $author = Author::all();
                }
                if ($book->isEmpty()) {
                    $message = 'Книги с таким названием отсутствуют';
                }

            }
        } else {
            $book = Book::all();
            $author = Author::all();
        }

        return (new View())->render('site.books', ['book' => $book, 'author' => $author, 'message' => $message ?? null]);

    }
    public function readers(Request $request): string
    {
        $message = null;
        $readers = [];
        if($request->method==='POST'){
            if ($request->get('search')) {
                $search = $request->get('search');
                if ($search) {
                    $readers = Reader::where('surname', 'like', '%' . $search . '%')->get();

                }
                if ($readers->isEmpty()) {
                    $message = 'Читатель отсутствуют';
                }

            }
        } else {
            $readers = Reader::all();
        }

        return (new View())->render('site.readers', ['readers' => $readers, 'message' => $message ?? null]);

    }
}
