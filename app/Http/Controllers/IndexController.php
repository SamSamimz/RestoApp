<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Chefs;
use App\Models\Foods;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //__index
    public function index() {
        $foods = Foods::all();
        $chefs = Chefs::all();
        $carts = Carts::all();
        return view('home',[
            'foods' => $foods,
            'chefs' => $chefs,
            'carts' => $carts,
        ]);
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
