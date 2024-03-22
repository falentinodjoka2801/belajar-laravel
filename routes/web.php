<?php

#Controllers
use App\Http\Controllers\PostController;
use App\Http\Controllers\Mahasiswa;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/posts', PostController::class);
Route::resource('/mahasiswa', Mahasiswa::class);

Route::group([
    'prefix'    =>  'ajax',
    'namespace' =>  'App\Http\Controllers'
], function(){
    Route::get('/konsentrasi', 'AJAX@getKonsentrasiProgramStudy');
});