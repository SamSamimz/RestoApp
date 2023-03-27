<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //__index
    public function index() {
        return view('admin.home');
    }

    //__store 
    public function store(Request $request) {
        $request->validate (
            [
                //
            ]
        );
    }
}
