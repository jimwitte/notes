<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\Note;

class NotesController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }


    public function show($note_id) {
    	$user = Auth::user();
    	$note = Note::findOrFail($note_id);
        return view('notes.show', compact('user','note'));

    }
    
    public function create() {
    	$user = Auth::user();
    	return view('notes.create');
    }
    
    public function store(Request $request) {
    	$user = Auth::user();
    	$note = new Note;
    	$note->title = $request->title;
    	$note->body = $request->body;
    	$user->notes()->save($note);
    	return redirect('/home');
    }
    
    public function edit($note_id) {
    	$user = Auth::user();
    	$note=Note::findOrFail($note_id);
    	return view('notes.edit', compact('user','note'));
    }
    
}
