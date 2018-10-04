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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'role:dosen']], function () {
    Route::get('/dosen', function () {
        return view('dosen.index');
    });
});
Route::group(['middleware' => ['auth', 'role:mhs']], function () {
    Route::get('/mahasiswa', function () {
        return view('mahasiswa.index');
    });
});

Route::get('/master', function(){
    return view('layouts/master');
});

Route::resource('/course', 'CourseController');

Route::get('tesapi', function(){
    $url = url('api/datacourse');
    $contents = file_get_contents($url);
    $datas = json_decode($contents);
    dd($datas);

    return view('course');
});