<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

/*Route::get('/empleado', [EmpleadoController::class, 'index'])->name('index');

Route::get('/empleado/create', [EmpleadoController::class, 'create'])->name('create')->middleware('auth');

Route::post('/empleado', [EmpleadoController::class, 'store'])->name('store');

Route::delete('/empleado/{empleado}', [EmpleadoController::class, 'destroy'])->name('destroy');

Route::get('/empleado/{empleado}/edit', [EmpleadoController::class, 'edit'])->name('edit');

Route::patch('/empleado/{empleado}', [EmpleadoController::class, 'update'])->name('update');*/

Route::resource('empleado', EmpleadoController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', [EmpleadoController::class, 'index'])->name('home');
});


