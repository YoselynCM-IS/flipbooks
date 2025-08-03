<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Book;

class BookController extends Controller
{
    // MOSTRAR LIBRO
    public function show($slug){
        $getbook = Book::whereSlug($slug)->with('pages')->first();

        $pages = collect();
        $getbook->pages->map(function($page) use(&$pages){
            $link = $page->clave;
            if(!Str::contains($page->clave, 'dropbox')) 
                $link = "https://dl.dropboxusercontent.com/s/".$page->clave."/".$page->page.".jpg";

            $pages->push([
                'page' => $page->page,
                'clave' => $link 
            ]);
        });
        $book = collect([
            'book' => $getbook->book,
            'numpages' => $pages->count() - 4,
            'pages' => $pages
        ]);
        return view('promociones.book', compact('book'));
    }
}
