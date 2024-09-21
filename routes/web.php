<?php

use App\Http\Controllers\TodosController;
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

Route::get('/', [TodosController::class, 'index'])->name("todo.home");

Route::get('/create', function () {
    return view('create');
})->name("todo.create");

//Edit Route
Route::get('/edit/{id}',  [TodosController::class, 'edit'])->name('todo.edit');
// Delete Route
Route::get('/delete/{id}',[TodosController::class, 'delete'])->name("todo.delete");
//Create todo Route
Route::post('/create',    [TodosController::class, 'store'])->name("todo.store");
//Update route
Route::post('/update',    [TodosController::class, 'updateData'])->name("todo.updateData");



