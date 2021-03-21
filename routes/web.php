<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AddUserController;
use App\Http\Controllers\AdminController;
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

// Route::get('/about', function () {
//     return view('about',[
//         'articles'=>App\Models\Article::latest()->get()
//         ]);
// });
// Route::get('/landing',function(){
//     return view('landing');
// });

// Route::get('/log', function () {
//          return view('adminlogin');
//      });
    // Route::get('/dashboard', function () {
    //         return view('dashboard');
    //      });


Route::get('/',[FrontendController::class,'Welcome'])->name('welcome');
Route::get('/about',[FrontendController::class,'About'])->name('about');
Route::get('/article',[FrontendController::class,'Article'])->name('article');
//Route::get('/article/{article}',[FrontendController::class,'show'])->name('article');
//Route::get('/articles/{article}',[ArticlesController::class,'show'])->name('article');

// Route::post('/articles',"App\Http\Controllers\ArticlesController@Store");
Route::Post('/articles',[ArticlesController::class,'Store'])->name('art.store');
Route::get('/articles/create',"App\Http\Controllers\ArticlesController@Create");

Route::get('/articles/{article}',"App\Http\Controllers\ArticlesController@show")->name('art.show');
Route::get('/articles/{article}/edit',"App\Http\Controllers\ArticlesController@Edit");
Route::put('/articles/{article}',"App\Http\Controllers\ArticlesController@Update");
//Route::put('/articles',[ArticlesController::class,'Update'])->name('art.update');


Route::get('/login',[UsersController::class,'Login'])->name('login');
Route::post('/check',[UsersController::class,'check'])->name('check');

Route::get('/dashboard',[AdminController::class,'Register'])->name('register');
Route::post('/save',[AdminController::class,'save'])->name('save');
Route::get('/page1',[AdminController::class,'page1']);
Route::get('/page2',[AdminController::class,'page2']);
Route::get('/page3',[AdminController::class,'page3']);


Route::get('/add-user',[AddUserController::class,'AddUser']);
Route::Post('/create-post',[AddUserController::class,'createUser'])->name('user.create');
Route::get('/users',[AddUserController::class,'getUser']);
Route::get('/users/{id}',[AddUserController::class,'getUserById']);
Route::get('/delete-user/{id}',[AddUserController::class,'deleteUser']);
Route::get('/edit-user/{id}',[AddUserController::class,'editUser']);
Route::POST('/update-user',[AddUserController::class,'updateUser'])->name('user.update');



// Route::get('/page1',[StudentController::class,'page1']);
// Route::get('/page2',[StudentController::class,'page2']);
// Route::get('/page3',[StudentController::class,'page3']);
// Route::get('/page1',"App\Http\Controllers\PostController@page1");
// Route::get('/page2',"App\Http\Controllers\PostController@page2");
