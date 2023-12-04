<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequisicionController;

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

Route::get('requisicion/index', [RequisicionController::class, 'index'])->name('requisicion.index');
Route::get('requisicion/create', [RequisicionController::class, 'create'])->name('requisicion.create');
Route::post('requisicion/store', [RequisicionController::class, 'store'])->name('requisicion.store');
Route::get('requisicion/show/{id}', [RequisicionController::class, 'show'])->name('requisicion.show');
Route::get('requisicion/edit{id}', [RequisicionController::class, 'edit'])->name('requisicion.edit');
Route::put('requisicion/update/{id}', [RequisicionController::class, 'update'])->name('requisicion.update');


