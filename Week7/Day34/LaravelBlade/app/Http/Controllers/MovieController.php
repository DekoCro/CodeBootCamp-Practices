<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movies;


class MovieController extends Controller
{
    public function index()
    {
        $movies = Movies::latest()->get();

        $view = view('/movies/list', compact('movies'));
        return $view;
    }
}
