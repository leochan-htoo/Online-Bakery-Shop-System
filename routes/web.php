<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

route::get('/', [HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// add this route for view redirect admin panel dashboard in admin
route::get('/redirect', [HomeController::class,'redirect']);

// add this route for view catagory in admin
route::get('/view_catagory', [AdminController::class,'view_catagory']);

// add this route for view product in admin
route::post('/add_catagory', [AdminController::class,'add_catagory']);

// add this route for delete product in admin
route::get('/delete_catagory/{id}', [AdminController::class,'delete_catagory']);

// add this route for view product in admin
route::get('/view_product', [AdminController::class,'view_product']);


// add this route for add product in admin
route::post('/add_product', [AdminController::class,'add_product']);

