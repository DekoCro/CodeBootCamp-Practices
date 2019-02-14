<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class NotesController extends Controller
{
    //
    public function edit(Request $request)
    {
        if($request->has('id')) {
            // this is edit, retrieve an existing city
            $query = "SELECT *
                FROM `db notes`
                WHERE `id` = ?
                LIMIT 1
            ";
            $note = DB::selectOne($query, [
                $request->input('id')
            ]);
        } else {
            // this is create, create an empty note
            $note = (object) [
                'id'   => null,
                'name' => null,
                'text' => null
            ];
        }

        //if form was submitted
        if ($request->method() == 'POST') {
            // validate request data
            $this->validate($request, [
                'name' => 'required',
                'text' => 'required'
            ]);

            // update the data from request
            $note->name = $request->input('name');
            $note->text = $request->input('text');

            //save the data

            if ($note->id) {
                // upadating existing note
                $query = "UPDATE `db notes`
                    SET `name` = ?,
                        `text` = ?
                    WHERE `id` = ?
                    LIMIT 1
                ";
                DB::update($query, [
                    $note->name,
                    $note->text,
                    $note->id
                ]);
            } else {
                // inserting a new note
                $query = "INSERT
                INTO `db notes`
                (`name`, `text`)
                VALUES
                (?, ?)
                ";
                DB::insert($query, [
                    $note->name,
                    $note->text
                ]);

                $note->id = DB::getPdo()->lastInsertId();
            }

            // flash success message
            Session::flash('success_message' , 'Note was successfully saved.');

            //redirect to previous page
            return redirect('notes/add?id='.$note->id);
        }

        $edit_form = view('notes/add', [
            'note' => $note
        ]);

        return view('html', [
            'content' => $edit_form
        ]);
    }
}
