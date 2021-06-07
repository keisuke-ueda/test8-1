<?php

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

Route::get('/works/', function () {
    return view('works');
});

Route::get('/archives/',function(){
    return '記事一覧';
});

Route::get('/sum/{x}/{y}/','App\Http\Controllers\MathController@sum');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/entries/','App\Http\Controllers\EntriesController@index');
