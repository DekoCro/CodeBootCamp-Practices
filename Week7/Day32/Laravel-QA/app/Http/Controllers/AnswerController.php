<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use Auth;

class AnswerController extends Controller
{  
     // Task 8. Morning workout(day35);
    public function show($id)
    {
        // Task 11. Morning workout(day35);
        $answer = Answer::findOrFail($id);

        //dd($answer);

        return view('/answers/show' , compact('answer'));
        
    }

    public function vote(Request $request)
    {
        // Task 16. Morning workout day 35

        // gets the request object
        $request = request();

        //find answer with id 1 in DB
        $answer = Answer::find(1);

        // creating a new App\Vote object
        $vote = new \App\Vote;

        // assign value of id of Answer to the Vote
        $vote->answer_id = $answer->id;

        // looks for value with name 'up' in $_GET or $_POST 
        if ($request->input('up')) {
            // the value of property of the Vote object will be 1
            $vote->vote = 1;
            //increment the total rating in answer
            $answer->rating++; 
            // looks for value with name 'down' in $_GET or $_POST 
        } elseif($request->input('down')) {
            // the value of property of the Vote object will be -1
            $vote->vote = -1;
            //dencrement the total rating in answer
            $answer->rating--; 
        }
        //inserts the vote into the database
        $vote->save();
        //updates the answer in the database
        $answer->save();
        // redirects back to the previous page
        return back();

    }

    public function store($question_id)
    {
        $answer = new Answer;

        $answer->title = "";
        $answer->text = request('text');
        //or
        //$request = request();
        //$answer->fill($request->only['text]);
        $answer->question_id = $question_id;
        $answer->user_id = Auth::id();

        $answer->save();

        return redirect('questions/'.$question_id);
        //or
        //return redirect()->url('questions/'.$question_id);
        //or
        //return redirect()->action('QuestionController@show'.$question_id);
    }
}
