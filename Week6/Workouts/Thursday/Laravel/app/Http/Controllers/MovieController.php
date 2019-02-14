<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function homepage()
    {
        $header = view('movies/header');
        $left_section = view('movies/left_section');
        $right_section = view('movies/right_section');
        $main = view('movies/main', [
            'left_section' => $left_section,
            'right_section' => $right_section
        ]);
        $footer = view('movies/footer');


        return view('movies/HTMLwrapper', [
            'header' => $header,
            'main' => $main,
            'footer' => $footer
        ]);
    }

    public function detail()
    {
        $movie_title = 'Venom';

        $info_view = view('movies/detail/info', [
            'title' => $movie_title
        ]);
        $cast_view = view('movies/detail/cast');
        $trailer_view = view('movies/detail/trailer');

        $main_view = view('movies/detail/main' , [
            'info' => $info_view,
            'cast' => $cast_view,
            'trailer' => $trailer_view
        ]);


        $html_wrapper = view('movies/detail/html_wrapper', [
            'content' => $main_view,
            'header' => view('movies/header'),
            'footer' => view('movies/footer')
        ]);

        return $html_wrapper;
    }
}
