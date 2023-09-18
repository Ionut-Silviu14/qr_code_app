<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DropdownController;
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

Route::get('/eveniment1', function(){
    return view('eveniment1', [
        'nume' => 'Polijobs',
        'data'=>'15.09.2023',
        'locatia' => 'Politehnica',
        'logo'=>'logo',
        'cover'=>'cover',
        'porti_acces'=>'porti_acces',
        'editie'=>'2023',
    ]);
});

Route::get('/eveniment3', 'App\Http\Controllers\EveViewController@index');
Route::get('/eveniment2', 'App\Http\Controllers\BiletController@index');

    
Route::get('dropdown', [DropdownController::class, 'index']);

require __DIR__.'/auth.php';
