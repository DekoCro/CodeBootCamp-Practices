<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CityController extends Controller
{
    public function show()
    {
       
    }

    public function create()
    {
        return view('practice.create');
    }

    public function store($country_id)
    {

        // getting all of the data from request

        //$city->Name = request('Name');
        //$city->Population = request('Population');

        //or
        

        //$city->save();
        

        
        
    }
}


//SO WE ACCESS THIS POINT (Route::get('/city/create' , 'CityController@create')); THAT LOADS CREATE ACTION (public function create()) AND CREATE ACTION SIMPLY LOADS A VIEW (return view('practice.create');)
// VIEW DISPLAYS A FORM TO ACCEPT USERS DATA AND THEN SUBMITS A POST REQUEST ( method="POST") TO THIS POINT (action="/city").
// WE HAVE ROUTE REGISTERED FOR THAT POINT (Route::post('/city' , 'CityController@store');) AND THEN CALLS STORE METHOD(public function store()). THE STORE METHOD CAN ACCESS THE REQUEST USING THIS REQUEST HELPER(request).
// AND THEN WE REDIRECT TO HOME PAGE(return redirect('/city');) WHICH WILL INCLUDE ADDED CITY.