<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //__index
    public function index() {
        return view('auth.register');
    }

    //__store 
    public function store(Request $request) {
        $user = $request->validate (
            [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:4',
            ]
        );
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
     

        if(Auth::attempt($user)) {
            return redirect()->route('home');
        }


    }
}
