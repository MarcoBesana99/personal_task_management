<?php

use App\Http\Controllers\ProjectController;
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

Route::controller(ProjectController::class)->name('project.')->middleware(['auth'])->group(function ()
{
    Route::get('/projects', 'index')->name('index');
    Route::get('/projects/create', 'create')->name('create');
    Route::post('/projects/store', 'store')->name('store');
    Route::get('/projects/{id}', 'show')->name('show');
});

require __DIR__.'/auth.php';
