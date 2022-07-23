<?php
use App\Http\Controllers\TodoController;
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

Route::get('/',[TodoController::class,'index'])->name('index');
Route::post('/store',[TodoController::class,'store'])->name('task.store');
Route::get('/edit/{task_id}',[TodoController::class,'edit'])->name('task.edit');
Route::patch('/update/{task_id}',[TodoController::class,'update'])->name('task.update');
Route::delete('/destroy/{task_id}',[TodoController::class,'destroy'])->name('task.delete');

