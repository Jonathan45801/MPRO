<?php

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
    if (session('roleid') == 11 || session('roleid') == 10) {
        return redirect('dashboard');
    }

    return view('home');
})->name('home');
Route::post('/adduser', 'UserController@add');
Route::post('/login', 'UserController@login');
Route::get('/dashboard', 'UserController@dashboard');
Route::get('/logout', 'UserController@logout');
Route::get('/add', 'UserController@home');
Route::get('/inputevent', 'EventController@index');

Route::post('/kegiatan/upload', 'KegiatanController@upload');
Route::post('/accproposal', 'KegiatanController@accKegiatan');
