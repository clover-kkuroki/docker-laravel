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
    logger('welcome route.');
    return view('welcome');
});

Route::get('/', function () {
    return redirect('home');
 });
 
 Route::get('/home', function () {
    return view('top');
 });
 
 Route::get('/sub', function () {
    return view('sub');
 })->middleware("simple_auth");
 
 //ログイン処理
Route::post('/login', 'App\Http\Controllers\SimpleLoginController@login');

//ログアウト
Route::post('/logout', 'App\Http\Controllers\SimpleLogoutController@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user_entry', 'App\Http\Controllers\UserEntryController@index');

Route::get('/user_entry/{id}', "App\Http\Controllers\UserEntryController@detail");
