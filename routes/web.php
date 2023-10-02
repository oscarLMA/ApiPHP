<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\CategoriesController;
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

Route::get('/frameworks',[Todoscontroller::class, 'index'])-> name('todos');

Route::post('/frameworks',[Todoscontroller::class, 'store'])-> name('todos');

Route::get('/frameworks/{id}',[Todoscontroller::class, 'show'])-> name('todos-edit');

Route::patch('/frameworks/{id}',[Todoscontroller::class, 'update'])-> name('todos-update');

Route::delete('/frameworks/{id}',[Todoscontroller::class, 'destroy'])-> name('todos-destroy');

route::resource('categories', CategoriesController::class);