<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
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
}
