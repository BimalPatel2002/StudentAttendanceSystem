<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Firebase\DataController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/AboutUs', function () {
    return view('AboutUs');
});

Route::get('/password/AboutUs', function () {
    return view('AboutUs');
});

Auth::routes();

Route::get('/email/verify', [App\Http\Controllers\Auth\ResetController::class, 'verify_email'])->name('verify')->middleware('fireauth');

Route::post('login/{provider}/callback', 'Auth\LoginController@handleCallback');

Route::resource('/password/reset', App\Http\Controllers\Auth\ResetController::class);

Route::get('data', [DataController::class, 'index'])->name('data')->middleware('user','fireauth');

Route::get('add-registration', [DataController::class, 'create']);

Route::post('add-registration', [DataController::class, 'store']);

Route::get('edit-registration/{id}', [DataController::class, 'edit']);

Route::put('update-registration/{id}', [DataController::class, 'update']);

Route::get('delete-registration/{id}', [DataController::class, 'destroy']);

Route::get('attendance_list', [DataController::class, 'index1'])->middleware('user','fireauth');;