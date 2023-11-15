<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;

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

Route::get('/teams',[TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/create',[TeamController::class, 'create'])->name('teams.create');
Route::post('/teams',[TeamController::class, 'store'])->name('teams.store');
Route::get('/teams/{team}/edit',[TeamController::class, 'edit'])->name('teams.edit');
