<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//home
Route::get('/', [HomeController::class,'index'])->name('home');

//example

Route::prefix('/example')->group(function (){

    Route::get('/', [ExampleController::class,'index'])->name('example');
    Route::post('/store', [ExampleController::class,'store'])->name('example.store');
    Route::get('/{task_id}/delete', [ExampleController::class,'delete'])->name('example.delete');
    Route::get('/{task_id}/done', [ExampleController::class,'done'])->name('example.done');
});