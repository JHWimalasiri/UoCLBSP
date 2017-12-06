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
    return view('myMap');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/addbuilding', function () {
    return view('addbuilding');
});

Route::get('/searchbuilding', function () {
    return view('searchbuilding');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/adminalter', function () {
    return view('adminalter');
});

Route::get('/adminmappaths', function () {
    return view('adminmappaths');
});

Route::get('/map', function () {
    return view('map');
});

Route::get('/test', function () {
    return view('test');
});

// Route::get('/myMap', function () {
//     return view('myMap');
// });

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
?>