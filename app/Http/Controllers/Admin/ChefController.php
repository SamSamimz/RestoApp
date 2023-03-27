<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chefs;
use App\Models\Foods;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class ChefController extends Controller
{
    //__index
    public function index() {
        $chefs = Chefs::paginate(10);
        return view('admin.chefs', ['chefs' => $chefs]);
    }

    //__addfood
    public function addchef() {
        return view('admin.addchef');
    }

    //__store 
    public function store(Request $request) {
        $request->validate (
            [
                'name' => 'required',
                'post' => 'required',
                'image' => 'required',
            ]
        );
    
    //__store the image 
    if($request->hasFile('image')) {
        $image = $request->image;
        $image_name = time().'_IMG_.'.$image->getClientOriginalExtension();
        $request->file('image')->storeAs('public/chefs',$image_name);
    }

    $request->user()->chefs()->create([
        'name' => $request->name,
        'post' => $request->post,
        'facebook' => $request->facebook,
        'twitter' => $request->twitter,
        'instagram' => $request->instagram,
        'image' => $image_name,
    ]);
    return redirect()->back()->with('success', 'A food item added successfylly!');
    
    }

    //__delete
    public function delete(Chefs $chef) {
        $chef->delete();
        //__delet the image from storage
        if(file_exists(public_path('storage/chefs/'.$chef->image))) {
            unlink(public_path('storage/chefs/'.$chef->image));
        }
        return redirect()->back()->with('delete', 'A food item deleted successfully!');
    }


}

