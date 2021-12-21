<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class , 'show_post'])->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';


// -------------------------------------------------------- 
Route::get('/post' , [PostController::class , 'index'])->name('post_index');
Route::post('/post' , [PostController::class , 'create'])->name('post_create');

