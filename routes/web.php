<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/tarefas', function () {
    return view('tasks');
})->name('tarefas');

Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');