<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
     protected $fillable = [
         'title',
         'authors',
         'image',
         'publisher_id'
     ];

    // or this way but fillable is better way
    // if $guarded is empty everything will be stored 
    // protected $guarded = [];

    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }

    public function publisher()
    {
        // publisher_id is used as a second argument as an default option, so if we dont provide anything in Publisher
        return $this->belongsTo('App\Publisher' , 'publisher_id');
    }

    public function bookshops()
    {
        return $this->belongsToMany('App\Bookshop');
    }
}
