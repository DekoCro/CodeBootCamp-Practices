<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// Task 6.
use App\Answer;

class Vote extends Model
{
    // Task 6. Morning workout(day35);
    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }
}
