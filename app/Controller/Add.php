<?php
namespace Controller;
use Model\Book;
use Model\Author;
use Model\Edition;
use Model\Reader;
use Src\View;
use Src\Request;

class Add {

    public function add_book(Request $request): string
    {
        if ($request->method === 'POST' && Book::create($request->all())) {
            return new View('site.add_book');
        }
        $author = Author::all();
        $edition = Edition::all();
        return new View('site.add_book', ['edition' => $edition, 'author' => $author]);
    }

    public function add_reader(Request $request): string
    {
        if ($request->method === 'POST' && Reader::create($request->all())) {
            return new View('site.add_reader');
        }

        return new View('site.add_reader');
    }

    public function add_author(Request $request): string
    {
        if ($request->method === 'POST' && Author::create($request->all())) {
            return new View('site.add_author');
        }

        return new View('site.add_author');
    }
}