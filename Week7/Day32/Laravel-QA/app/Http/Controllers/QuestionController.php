<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;


class QuestionController extends Controller
{
    /*public function index()
    {   
        // select all the rows in the questions table and put the results in a new variable
        $all_questions = DB::table('questions')->get();

        //Change your code that selects all the answers for a question so that the results are ordered by the created_at column in ascending order.
        $all_questions_ordered = DB::table('questions')->latest()->get();

        dd($all_answers);

        return "This is the list of questions";
    }

    public function show()
    {

        //select the correct row from the table questions with id 1
        //SELECT * FROM `questions` WHERE `id` 1 LIMIT 1
        $question = DB::table('questions')->where('id', 1)->first();

        dd($question);
        //select all the rows in the answers table that belong to this question (using the column question_id) and put the results in a new variable
        $answer_to_question_one = DB::table('answers')->where('question_id' , 1)->get();

        dd($answer_to_question_one);

        //Change your code that selects all the answers for a question so that the results are ordered by the created_at column in ascending order.
        $all_answers = DB::table('answers')->where("question_id", 1)->oldest()->get();

        dd($all_answers);

        return 'This is a detail of a question';
    }*/

    public function index()
    {
        $all_questions = Question::all();

        //dd($all_questions);

        $all_questions_ordered = Question::latest()->get();

        $view = view('questions/index');
        return $view;
    }

    public function show()
    {
        $question = Question::findOrFail(1);

        //dd($question);

        $answer_to_question_one = Answer::where('question_id', 1)->get();
        // OR THIS WAY
        $answer_to_question_one = $question->answer()->get();


        $all_answers = Answer::where("question_id", 1)->oldest()->get();

        //dd($answer_to_question_one);

        $view = view('/questions/show');
        return $view;
    }

    /* or shorter way 

    public function show(Question $question)
    {
        $question = Question::findOrFail(1);

        $answers_to_question = $question->answers;

        $all_answers = Answer::all();
    }*/

}
