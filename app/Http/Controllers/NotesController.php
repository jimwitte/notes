<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\Note;

class NotesController extends Controller
{
    public function show($note_id) {
    	$user = Auth::user(); // authenticated user
    	$note = Note::findOrFail($note_id);
        return view('notes.show', compact('user','note'));

    }
}
