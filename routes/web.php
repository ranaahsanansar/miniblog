<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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
//     return view('home');
// });
Route::get('/', [homeController::class , 'show_post'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


// Auhtentication MiddleWare -----------------------------------------------------------------
Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', [DashboardController::class , 'show_post'])->name('dashboard');

    Route::get('/post' , [PostController::class , 'index'])->name('post_index');
    Route::post('/post' , [PostController::class , 'create'])->name('post_create');

    Route::get('/edit/{id}' , [PostController::class , 'edit'] )->name('edit_page');
    Route::put('/edit/{id}' , [PostController::class , 'update'] )->name('update_post');

    Route::get('/delete/{id}' , [PostController::class , 'destroy'] )->name('deleted');


}); 
require __DIR__.'/auth.php';