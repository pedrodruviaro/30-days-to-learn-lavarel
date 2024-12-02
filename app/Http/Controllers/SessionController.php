<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store() 
    {
        // validate 
        $attributes = request()->validate([
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required'],
        ]);

        // attempt to login 
        if (! Auth::attempt($attributes)){ // second arg => 'remember'
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials dont match'
            ]);
        } 

        // regenerate the session token
        request()->session()->regenerate(); // always regenerate after login -> **security**

        // redirect
        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
