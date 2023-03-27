<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Foods;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class FoodController extends Controller
{
    //__index
    public function index() {
        $foods = Foods::paginate(10);
        return view('admin.foods', ['foods' => $foods]);
    }

    //__addfood
    public function addfood() {
        return view('admin.addfood');
    }

    //__store 
    public function store(Request $request) {
        $request->validate (
            [
                'title' => 'required',
                'description' => 'required',
                'price' => 'required',
                'image' => 'required',
            ]
        );
    
    //__store the image 
    if($request->hasFile('image')) {
        $image = $request->image;
        $image_name = time().'_IMG_.'.$image->getClientOriginalExtension();
        $request->file('image')->storeAs('public/foods',$image_name);
    }

    $request->user()->foods()->create([
        'title' => $request->title,
        'description' => $request->description,
        'price' => $request->price,
        'image' => $image_name,
    ]);
    return redirect()->back()->with('success', 'A food item added successfylly!');
    
    }

    //__delete
    public function delete(Foods $food) {
        $food->delete();
        //__delet the image from storage
        if(file_exists(public_path('storage/foods/'.$food->image))) {
            unlink(public_path('storage/foods/'.$food->image));
        }
        return redirect()->back()->with('delete', 'A food item deleted successfully!');
    }

    //__edit
    public function edit(Foods $food) {
        return view('admin.editfood',['foods' => $food]);
    }
    
    //__update store 
    public function update(Request $request,Foods $food) {
        // $request->user()->foods()->update([
        //     'title' => $food->title,
        //     'description' => $food->description,
        //     'price' => $food->price,
        //     'title' => $food->title,
        // ]);
        dd($food->title);

    }
}

