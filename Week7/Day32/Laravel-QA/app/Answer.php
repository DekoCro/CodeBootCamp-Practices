<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Question;
use App\Vote;

class Answer extends Model
{
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
    //// Task 8. Morning workout(day35);
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
