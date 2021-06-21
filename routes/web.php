<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccountController;
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
Route::get('/mylist', function () {
    return view('testlist');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello',function(){
    return 'Hello World!';
});
Route::get('list', 'App\Http\Controllers\AccountController@list');
Route::get('show/{id}', 'App\Http\Controllers\AccountController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('display', 'App\Http\Controllers\AccountController@display')->name('display_account');
