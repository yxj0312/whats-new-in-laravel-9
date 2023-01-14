<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;
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
    return view('welcome');
});

Route::get('/users', [UsersController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/features', [FeatureController::class, 'index']);
Route::get('/features/{feature}', [FeatureController::class, 'show']);

Route::get('/images', [ImageController::class, 'index']);
Route::get('/images-show', [ImageController::class, 'show']);
Route::post('/upload', [ImageController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/css-grids/ep01', function () {
    return view('css-grids/design-agency-services');
});

Route::get('/css-grids/ep02', function () {
    return view('css-grids/fast-food-menu');
});

Route::get('/css-grids/ep03-1', function () {
    return view('css-grids/page-layout-grid');
});

Route::get('/css-grids/ep03-2', function () {
    return view('css-grids/full-page-menu');
});

Route::get('/css-grids/ep04-1', function () {
    return view('css-grids/fast-food-menu-space');
});

Route::get('/css-grids/ep04-2', function () {
    return view('css-grids/shopping-cart-summary');
});

Route::get('/css-grids/ep05-1', function () {
    return view('css-grids/team-profiles');
});

Route::get('/css-grids/ep05-2', function () {
    return view('css-grids/center-a-div');
});

Route::get('/css-grids/ep06-1', function () {
    return view('css-grids/restaurant-ratings');
});

Route::get('/css-grids/ep06-2', function () {
    return view('css-grids/profile-card');
});

Route::get('/css-grids/ep07', function () {
    return view('css-grids/contact-form');
});

Route::get('/css-grids/ep08-1', function () {
    return view('css-grids/contact-form-2');
});

Route::get('/css-grids/ep08-2', function () {
    return view('css-grids/image-caption');
});

Route::get('/css-grids/ep09-1', function () {
    return view('css-grids/restaurant-listing');
});

Route::get('/css-grids/ep09-2', function () {
    return view('css-grids/pricing-plans');
});

Route::get('/css-grids/ep10-1', function () {
    return view('css-grids/responsive-services');
});

Route::get('/css-grids/ep10-2', function () {
    return view('css-grids/stats-section');
});

Route::get('/css-grids/ep11-1', function () {
    return view('css-grids/instructions');
});

Route::get('/css-grids/ep11-2', function () {
    return view('css-grids/responsive-full-page-menu');
});

Route::get('/css-grids/ep12', function () {
    return view('css-grids/dashboard-layout');
});