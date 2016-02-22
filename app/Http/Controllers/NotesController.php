<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\Note;
use App\Http\Requests\NoteRequest;

use Session;

class NotesController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }


    public function show($note_id) {
    	$user = Auth::user();
    	$note = Note::findOrFail($note_id);
    	if ($user->id != $note->user_id) {
    		return redirect('/home');
    	} else { 
        	return view('notes.show', compact('user','note'));
        }
    }
    
    public function create() {
    	$user = Auth::user();
    	return view('notes.create');
    }
    
    public function store(NoteRequest $request) {
    	$user = Auth::user();
    	$note = new Note;
    	$note->body = $request->body;
    	$note->title = strtok($note->body,"\n");
    	$user->notes()->save($note);
    	$note->tag($request->tags);
    	Session::flash('flash_message','Note created.');
    	return view('notes.show',compact('user','note'));
    }
    
    public function edit($note_id) {
    	$user = Auth::user();
    	$note=Note::findOrFail($note_id);
    	if ($user->id != $note->user_id) {
    		return redirect('/home');
    	} else { 
	    	return view('notes.edit', compact('user','note'));
	    }
    }
    
    public function update(NoteRequest $request, $note_id) {
    	$user = Auth::user();
    	$note=Note::findOrFail($note_id);
    	$note->body = $request->body;
    	$note->title = strtok($note->body,"\n");
    	$note->retag($request->tags);   	
    	$user->notes()->save($note);
    	Session::flash('flash_message','Note updated.');
    	return view('notes.show',compact('user','note'));
    }
    
    public function destroy($note_id) {
        $user = Auth::user();
    	$note=Note::findOrFail($note_id);
    	$note->delete();
    	return redirect('/home');
    
    }
    
}
