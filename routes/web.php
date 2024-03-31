<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/alumni','AlumniController@index');
Route::get('/alumni', [AlumniController::class, 'index']);


