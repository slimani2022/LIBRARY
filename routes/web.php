<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AdminController;


use App\Http\Controllers\HomeController;
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

route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



route::get('/home',[AdminController::class,'index']);
/* ADMIN USERS */
route::get('/user_page',[AdminController::class,'user_page'])->middleware(['auth','admin']);
route::get('/add_user',[AdminController::class,'add_user'])->middleware(['auth','admin']);
route::post('/store_user',[AdminController::class,'store_user'])->middleware(['auth','admin']);
route::get('/user_delete/{id}',[AdminController::class,'user_delete'])->middleware(['auth','admin']);
/* category */
route::get('/category_page',[AdminController::class,'category_page'])->middleware(['auth','admin']);
route::post('/add_category',[AdminController::class,'add_category'])->middleware(['auth','admin']);
route::get('/cat_delete/{id}',[AdminController::class,'cat_delete'])->middleware(['auth','admin']);
route::get('/edit_category/{id}',[AdminController::class,'edit_category'])->middleware(['auth','admin']);
route::post('/update_category/{id}',[AdminController::class,'update_category'])->middleware(['auth','admin']);
route::get('/add_book',[AdminController::class,'add_book'])->middleware(['auth','admin']);

/* book */
route::post('/store_book',[AdminController::class,'store_book'])->middleware(['auth','admin']);


route::get('/show_book',[AdminController::class,'show_book'])->middleware(['auth','admin']);


route::get('/book_delete/{id}',[AdminController::class,'book_delete'])->middleware(['auth','admin']);

route::get('/edit_book/{id}',[AdminController::class,'edit_book'])->middleware(['auth','admin']);


route::post('/update_book/{id}',[AdminController::class,'update_book'])->middleware(['auth','admin'])->middleware(['auth','admin']);


route::get('/book_details/{id}',[HomeController::class,'book_details']);



route::get('/borrow_books/{id}',[HomeController::class,'borrow_books']);


route::get('/borrow_request',[AdminController::class,'borrow_request'])->middleware(['auth','admin']);


route::get('/approve_book/{id}',[AdminController::class,'approve_book'])->middleware(['auth','admin']);


route::get('/return_book/{id}',[AdminController::class,'return_book'])->middleware(['auth','admin']);


route::get('/rejected_book/{id}',[AdminController::class,'rejected_book'])->middleware(['auth','admin']);



route::get('/book_history',[HomeController::class,'book_history']);


route::get('/cancel_req/{id}',[HomeController::class,'cancel_req']);


route::get('/explore',[HomeController::class,'explore']);

route::get('/search',[HomeController::class,'search']);


route::get('/cat_search/{id}',[HomeController::class,'cat_search']);