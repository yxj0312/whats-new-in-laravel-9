<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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
    throw new Exception("Error Processing Request", 1);
    
    // return str('hello world')->upper();
    // return Str::of('hello world')->upper();
    // return view('welcome');
})->name('home');

Route::get('/endpoint', function () {
    // return redirect()->route('name');
    return to_route('home');
});


Route::controller(PostsController::class)->group(function() {
    Route::get('/posts', 'index');
    Route::get('/posts/{post}', 'show');
    Route::post('/posts/', 'store');
});