<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::view('/', 'welcome', ['posts' => post::paginate(5)])->name('index');

Route::get('/create',[PostController::class, 'create']);

Route::post('/store',[PostController::class, 'ourstore'])->name('store');
Route::get('/edit/{id}',[PostController::class, 'editdata'])->name('edit');
Route::post('/update/{id}',[PostController::class, 'updatedata'])->name('update');

Route::get(uri:'/user', action:'homeController@abid');
Route:: get(uri:'/user/as', action:'homeController@show');

Route::get('/home', function () {
    $position = array('chair','table', 'book','price','light','dark');
    return view('homepage', ['abid' => $position]);
});


Route:: get('/admin', function () {
   return view('admin'); 
});
Route:: get('/user', function () {
   return view('user'); 
});

