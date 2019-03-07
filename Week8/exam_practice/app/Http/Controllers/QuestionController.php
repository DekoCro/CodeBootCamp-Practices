<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Question;
use App\User;


class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::latest()->get();
        //dd($questions);

        return view('/questions/index', compact('questions'));
    }

    public function show($id)
    {
        $question = Question::findOrFail($id);

        $answers = Answer::where('question_id' , '=', $id)->oldest()->get();

        $answers_to_question = $question->answers;
        //dd($answers_to_question);

        return view('/questions/show', compact('question' , 'answer'));
    }

    public function create()
    {
        return view('questions/create');
    }

    public function store()
    {
        $question = new Question;
    }
}
