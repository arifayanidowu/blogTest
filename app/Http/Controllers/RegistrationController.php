<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    
    public function create()
    {
        $title = 'Register';
        
        return view ('register.create', compact('title'));

    }


    public function store()
    {

        $this->validate(request(), [

            'name' => 'required',

            'email' => 'required|email',

            'password' => 'required|confirmed'
 
        ]);

         $user = User::create([
           
            'name' => request('name'),
            'email' => request('email'), 
            'password' => bcrypt('password')
             
            ]); 
             

        auth()->login($user);

        return redirect('/views');

    }

}
