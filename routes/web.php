<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TODO_Controller;

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


Route::get('/index', [TODO_Controller::class, 'index']);
Route::post('/save_task', [TODO_Controller::class, 'save_task'])->name("save_task");