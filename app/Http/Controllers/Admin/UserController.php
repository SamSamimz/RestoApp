<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Queue\Console\RetryBatchCommand;

class UserController extends Controller
{
    //__index
    public function index() {
        $user = User::paginate(10);
        return view('admin.user', ['users' => $user]);
    }

    //__Delete 
    public function delete(Request $request, User $user) {
        User::find($user->id)->delete();
        return redirect()->back()->with('delete', 'A user has been deleted successfully!');
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
