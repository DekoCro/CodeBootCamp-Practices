<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = DB::table('questions')->latest()->get();
        dd($questions);

        return 'This is sparta!';
    }

    public function show()
    {
        $question = DB::table('questions')->where('id' , '=' , 1)->first();

        $answers = DB::table('answers')->where('question_id' , '=', 1)->oldest()->get();
        dd($answers);
        return 'This is not sparta!';
    }
}
