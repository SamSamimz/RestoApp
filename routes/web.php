<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Admin\UserController;
use Symfony\Component\CssSelector\Node\FunctionNode;
use App\Http\Controllers\Admin\{ChefController, FoodController, HomeController,};
use App\Http\Controllers\Auth\{LoginController, RegisterController,LogoutController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/',[IndexController::class, 'index'])->name('home');




// __Guest
Route::middleware(['guest'])->group(function() {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

//_ Auth 
Route::middleware(['auth'])->group(function() {
    //__Add item to Cart 
    Route::get('/food/cart/{food}', [CartController::class, 'store'])->name('add.cart');


    Route::get('/logout', LogoutController::class)->name('logout');    
});


//__Admin only 
Route::middleware(['auth','admin'])->group(function () {
    //___Admin Dashboard
    Route::get('/admin/dashboard',[HomeController::class, 'index'])->name('adminhome')->middleware(['admin']);
   
    //__show all user
    Route::get('/admin/user',[UserController::class, 'index'])->name('user');
    //__Delete a user 
    Route::delete('/admin/user/delete/{user}', [UserController::class, 'delete'])->name('user.delete');

    //__show all foods 
    Route::get('/admin/foods', [FoodController::class, 'index'])->name('foods');
    //__add food 
    Route::get('/admin/foods/add', [FoodController::class, 'addfood'])->name('food.add');
    //__store foods
    Route::post('/admin/foods/store',[FoodController::class,'store'])->name('food.store');
    //__delete foods
    Route::delete('/admin/foods/store/{food}',[FoodController::class,'delete'])->name('food.delete');

    //__edit food item 
    Route::get('/admin/foods/edit/{food}', [FoodController::class, 'edit'])->name('edit');
    //__update food item
    Route::post('/admin/foods/edit/{food}', [FoodController::class, 'update'])->name('update.store');

    //__show chef
    Route::get('/admin/chefs', [ChefController::class, 'index'])->name('chefs');

    //__add chef
    Route::get('/admin/chef/add', [ChefController::class, 'addchef'])->name('chef.add');
    //__store chef
    Route::post('/admin/chef/store', [ChefController::class, 'store'])->name('chef.store');
    //__delete chef
    Route::delete('/admin/chef/delete/{chef}', [ChefController::class, 'delete'])->name('chef.delete');


});