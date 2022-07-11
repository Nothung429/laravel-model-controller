<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        // SELECT * FROM books
        $movies = Movie::all();

        //['books' => $books]
        return view('homepage', compact('movies'));
    }

    public function show($id)
    {
        // SELECT * FROM books WHERE id = $id
        // $book = Book::where('id', $id)->first();
        $movie = Movie::find($id);

        return view('movie', compact('movie'));
    }
}
