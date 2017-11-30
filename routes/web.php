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
    return view('layout.bs');
});

// Route::get('/about', function () {
//     return view('pages.about');
// });
Route::get('/get','RequestController@ViewRequest');
Route::get('/signin','validatecontroller@showForm');
Route::post('/signin','validatecontroller@validsubmit')->name('reg');

// Route::get('/login','RequestController@showLoginForm');
// Route::post('/login','RequestController@login');
Route::get('/lang/{lang}','langcontroller@index');
Route::get('/setSession','sessionController@setSession');
Route::get('/getSession','sessionController@getsession');
Route::get('/destroySession','sessionController@destroySession');
Route::get('/setcookie','CookiesController@setcookie');
Route::get('/getcookie','CookiesController@getcookie');

// Route::get('/login','RedirectController@showLoginForm');
// Route::post('/login','RedirectController@login');
// Route::get('/LoginOK','RedirectController@ifLoginOK')->name('Login.ok');

Route::get('/about','PageController@about');
Route::get('/contact','PageController@contact');
Route::get('/services','PageController@services');
Route::get('/get/{id}','PageController@get')->where('id','[0-9]+');
// Route::get('/laravel',function() {
// return 'larvel is best';
// })->name('laravel');

// Route::get('id/{id}',function($id) {
// return 'your ID is' . $id;
// })->where('id','[0-9]+')->name('testID');


//syntax of call Controller
//Route::get ('URL','ControllerName@FunctionName')
// Route::get('/laravel','TestContoller@index');
// Route::get('id/{id}','TestContoller@showID')->where('id','[0-9]+');

