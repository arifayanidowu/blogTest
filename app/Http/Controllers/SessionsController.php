<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function __construct()
    {

        $this->middleware('guest', ['except' => 'destroy']);
    
    }


    public function create()
    {
        
        $title = 'Login';

        return view ('sessions.create', compact('title'));

    }

    public function store()
    {

        $this->validate(request(), [
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if (! auth()->attempt(request(['email', 'password']))){
            
            return back()->withErrors([

                'message' => 'Please check your credentials and try again'

            ]);
        }

        return redirect()->home();

    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}
