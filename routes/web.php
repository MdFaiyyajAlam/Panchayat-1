<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\StoriesController;
use App\Http\Controllers\Home\GalleryController;
use App\Http\Controllers\Home\DonateController;
use App\Http\Controllers\Home\AboutController;
use App\Http\Controllers\Home\CategoryController;
use App\Http\Controllers\Home\ViewController;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/stories',[StoriesController::class,'stories'])->name('stories');
Route::get('/gallery',[GalleryController::class,'gallery'])->name('gallery');
Route::get('/categories',[CategoryController::class,'categories'])->name('categories');
Route::get('/view',[ViewController::class,'view'])->name('view');
// Post view
Route::prefix('post')->name('post.')->group(function () {
    Route::get('/{slug}', [App\Http\Controllers\Home\PostController::class, 'show'])->name('view');
});

Route::get('/donate',[DonateController::class,'donate'])->name('donate');
Route::get('/about',[AboutController::class,'about'])->name('about');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
