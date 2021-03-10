<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/landing',function(){
    return view('landing');
});
Route::get('/about',function(){
    return view('about');
});
Route::get('/article',function(){
    return view('article');
});



Route::get('/login',[StudentController::class,'Login'])->name('login');
Route::get('/register',[StudentController::class,'Register'])->name('register');
Route::post('/save',[StudentController::class,'save'])->name('save');
Route::post('/check',[StudentController::class,'check'])->name('check');


Route::get('/page1',[StudentController::class,'page1']);
Route::get('/page2',[StudentController::class,'page2']);
Route::get('/page3',[StudentController::class,'page3']);
// Route::get('/page1',"App\Http\Controllers\PostController@page1");
// Route::get('/page2',"App\Http\Controllers\PostController@page2");
