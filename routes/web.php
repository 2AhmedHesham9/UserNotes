<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::group(['prefix'=>'notes','middleware'=>'auth'],function(){
Route::get('/notes',[NotesController::class,'notes'])->name('notes');   // dashboard
Route::get('/create',[NotesController::class,'create'])->name('create');  //show form  to store data
Route::post('/store',[NotesController::class,'store'])->name('store');  // store data
Route::put('/edit/{id}',[NotesController::class,'edit'])->name('edit');  //show data and edit in one post
Route::get('/showToEdit/{id}',[NotesController::class,'showToEdit'])->name('showToEdit');  //show data to edit in one post
Route::get('/show/{id}',[NotesController::class,'show'])->name('show');
Route::delete('/delete/{id}',[NotesController::class,'destroy'])->name('destroy');  // delete data
});
