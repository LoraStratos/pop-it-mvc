<?php
namespace Controller;
use Model\Book;
use Model\Author;
use Model\Img;
use Model\Edition;
use Model\Reader;
use Src\View;
use Src\Request;

class Add {

    public function add_book(Request $request): string
    {
        $author = Author::all();
        $edition = Edition::all();
        $img = Img::all();
        if ($request->method === 'POST') {
            {
                $data = $request->all();
                $author = Author::find($data['id_author']);
                $edition = Edition::find($data['id_type_edition']);
                if ($author && $edition) {
                    Book::create([
                        'title' => $data['title'],
                        'id_author' => $data['id_author'],
                        'price' => $data['price'],
                        'year_edition' => $data['year_edition'],
                        'id_type_edition' => $data['id_type_edition'],
                        'annotation' => $data['annotation'],
                    ]);
                    app()->route->redirect('/add_book');
                }
            }
        }
        return (new View())->render('site.add_book', ['author' => $author, 'edition' => $edition]);
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

    public function pictures(Request $request): string
    {
        $img = Img::all();

//        if ($request->method === 'POST') {
//            $img = $_FILES['path']['name'];
//            $imgPath = $_SERVER['DOCUMENT_ROOT'] . "/pop-it-mvc/public/img/";
//            $uploaded_file = $imgPath . basename($img);
//            move_uploaded_file($_FILES['path']['tmp_name'], $uploaded_file);

//            if (Img::create(['path' => $uploaded_file, 'name' => $img])) {
//                app()->route->redirect('/pictures');
//            }
//        }



        return (new View())->render('site.img', ['img' => $img]);
    }
}