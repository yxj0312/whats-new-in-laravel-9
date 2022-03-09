<?php

use App\Enums\PostState;
use App\Http\Controllers\PostsController;
use App\Models\Post;
use App\Models\User;
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
    $post = new Post;

    $post->user_id = 1;
    $post->title= 'My title';
    $post->body = 'My body';

    $post->state = PostState::Published;

    $post->save();

    return 'Done';
    // return Post::first()->state->value;
    
    // return Post::search('voluptatem')->paginate();


    // return Blade::render('{{ $greeting }}, World', ['greeting' => 'Hello']);

    // throw new Exception("Error Processing Request", 1);
    
    // return str('hello world')->upper();
    // return Str::of('hello world')->upper();
    // return view('welcome');
})->name('home');

Route::get('/endpoint', function () {
    // return redirect()->route('name');
    return to_route('home');
});

// Route::get('/posts/{state}', function(PostState $state){
//     dd($state);
// });


// Route::controller(PostsController::class)->group(function() {
//     Route::get('/posts', 'index');
//     Route::get('/posts/{post}', 'show');
//     Route::post('/posts/', 'store');
// });


// Route::get('/users/{user}/posts/{post:id}', function(User $user, Post $post){
//     return $post;
// });

Route::get('/users/{user}/posts/{post}', function(User $user, Post $post){
    return $post;
})->scopeBindings();

Route::get('/about', function() {
    $name = 'foo';

    return 'The About Page';
});

Route::get('/posts/{post}', function(Post $post){
    return $post;
})->name('posts.show');