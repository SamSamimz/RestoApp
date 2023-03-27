<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //__index
    public function index() {
        //
    }

    //__store 
    public function store(Foods $food, Request $request) {
        if($food->addedBy($request->user())) {
            return back();
        }
        $request->user()->carts()->create([
            'user_id' => $request->user()->id,
            'foods_id' => $food->id,
        ]);

        return redirect()->back();
    }
}
