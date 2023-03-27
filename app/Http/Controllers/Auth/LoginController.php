<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //__index
    public function index() {
        return view('auth.login');
    }

    //__store 
    public function store(Request $request) {
        $user = $request->validate (
            [
                'email' => 'required|email|exists:users,email',
                'password' => 'required|min:4'
            ]
        );
        if(Auth::attempt($user)){
            return redirect()->route('home');
        }
        return redirect()->back()->with('invalid', 'Invalid login information!');


    }

}