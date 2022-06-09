<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\postController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;


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


//home route
Route::get('/', 'HomeController@index')->name('home');

//blog route
Route::get('/blog', 'BlogController@blog')->name('blog');
Route::get('/about', 'AboutController@about')->name('about');
Route::get('/contact', 'ContactController@contact')->name('contact');


//admin side route
Route::resource('posts', 'PostController')->middleware('auth');;
Route::resource('users', 'UserController')->middleware('auth');
Route::resource('categories', 'CategorieController')->middleware('auth');
Route::resource('dashboard', 'DashboardController')->middleware('auth');


// Route::get('/', function () {
//      return view('welcome');
//  });

 //Route::get('/dashboard', function () {
 //return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
