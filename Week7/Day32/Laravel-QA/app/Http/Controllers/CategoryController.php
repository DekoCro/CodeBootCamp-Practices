<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function index()
    {
        $names = DB::table('categories')->orderBy('name')->get();

        $categories_view = view("/categories/index", [
            'categories' => $names
        ]);

        return $categories_view;
    }
}
