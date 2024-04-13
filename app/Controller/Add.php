<?php
namespace Controller;
use Model\Book;
use Model\Reader;
use Src\View;
use Src\Request;

class Add {
    public function add_book(): string
    {
        return new View('site.add_book');
    }

    public function add_reader(): string
    {
        return new View('site.add_reader');
    }
}