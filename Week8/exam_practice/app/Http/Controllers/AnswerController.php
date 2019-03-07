<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Vote;

class AnswerController extends Controller
{
    public function show($id)
    {
        $answer = Answer::findOrFail($id);

        return view('answers/show' , compact('answer'));
    }

    public function vote()
    {
        $answer = Answer::find(1);

        $vote = new Vote;
        $vote->answer_id = $answer->id;

        if(request('up')) {
            $vote->vote = 1;
            $answer->rating++;
        } elseif (request('down')) {
            $vote->vote = -1;
            $answer->rating--;
        }

        $vote->save();
        $answer->save();

        return back();
    }
}
