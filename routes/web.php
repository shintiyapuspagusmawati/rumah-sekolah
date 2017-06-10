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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('satu', 'rumahcontroller@a');
// Route::get('dua', 'rumahcontroller@b');
// Route::get('tiga', 'rumahcontroller@c');
// Route::get('empat', 'rumahcontroller@d');
// Route::get('lima', 'rumahcontroller@e');
// Route::get('halaman/{$id}', 'rumahcontroller@param');
// Route::get('/{a}', 'rumahcontroller@parameter');
// Route::get('test1', 'cobacontroller@test');
// Route::get('{id}', 'cobacontroller@test2');
// Route::get('coba', 'cobacontroller@index');
// Route::get('ulang', 'cobacontroller@ulang');
// Route::get('{data}', 'cobacontroller@array');
// Route::get('{id}', 'cobacontroller@test4');
Route::resource('post', 'PostController');