<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Note;
use Auth;
use App\Http\Requests\NoteRequest;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	// show the user home page
    	$user = Auth::user(); // authenticated user
    	$tags = Note::existingTags()->sortBy('slug');
    	
    	$filter = $request->f;
				
		if ($filter !== null) {
			$notes = $user->notes()->withAnyTag($filter)->latest('updated_at')->paginate(5);
		} else {
		    $notes = $user->notes()->latest('updated_at')->paginate(5);
		}		
		return view('home', compact('user','notes','tags'));
    }
}
