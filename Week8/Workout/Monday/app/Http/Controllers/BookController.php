<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Publisher;
use App\Genre;
use App\Bookshop;

class BookController extends Controller
{
    public function __construct()
    {
        // task 2 morning workout day 42
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        //
        $books = Book::orderBy('id', 'desc')->take(100)->get();

        return view('/books/index' , compact('books'));
    }

    public function create()
    {
        $publishers = Publisher::all();
        $bookshops = Bookshop::all();
        $genres = Genre::all();

        // task 2 morning workout day 42
        return view('books/create' , compact(['publishers' , 'genres', 'bookshops']));
    }

    public function store(Request $request)
    {
        // task 6 morning workout day 42
        
        // $book = new Book;
        // $book->title = $request->title;
        // $book->authors = $request->authors;
        // $book->image = $request->image;
        // $book->save();

        // or this way

        $book = Book::create($request->all());

        $book->save();
        
        //Updating books
        //$book = Book::find(1);
        //$book = $book->update($request->all());

        // task 7 morning workout day 42
        return redirect(action('BookController@index'));
    }

    // day 42 Book project task CRUD
    public function edit($id)
    {
        $book = Book::findOrFail($id);

        return view('books/edit', compact('book'));
    }

     // day 42 Book project task CRUD
    public function update($id, Request $request)
    {
        $book = Book::findOrFail($id);

        // $book->title = $request->title;
        // $book->authors = $request->authors;
        // $book->image = $request->image;
        //$book->save();

        // or

        $book->update($request->all());

        return redirect(action('BookController@index'));
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect(action('BookController@index'));
    }
}
