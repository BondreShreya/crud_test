<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// View Pages
Route::get('/pages/create', [CrudController::class, 'create'])->name('pages.create');
//store pages
Route::post('/pages', [CrudController::class, 'store'])->name('pages.store'); 
//list of pages
Route::get('/pages', [CrudController::class, 'index'])->name('pages.index');

//display single list of page
Route::get('/pages/{page}', [CrudController::class, 'show'])->name('pages.show');

//edit view
Route::get('/pages/{page}/edit', [CrudController::class, 'edit'])->name('pages.edit');
//udate
Route::put('/pages/{page}', [CrudController::class, 'update'])->name('pages.update');


//delete a single list
Route::delete('/pages/{page}', [crudController::class, 'destroy'])->name('pages.destroy');






























