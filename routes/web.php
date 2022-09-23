<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('/posts')->name('post.')->group(function () {
    Route::get('/', \App\Http\Livewire\Post\Index::class)->name('index');
    Route::get('/create', \App\Http\Livewire\Post\Create::class)->name('create');
    Route::get('/{post}', \App\Http\Livewire\Post\Edit::class)->name('edit');
});

require __DIR__.'/auth.php';
