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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aaa/{id?}', function ($id="999") {
   echo "sajed".$id;
});

Route::get('test', 'test@index');
Route::get('check', 'test@check');

Route::get('/new/{id?}',function ($id=888){
    return view('newfile',["user"=>$id]);
});

Route::redirect('bbb','ccc');

Route::view('form','userView');

Route::post('/submit','test@formSubmit');

Route::get('/login', 'validationTest@index');
Route::post('/submit_login','validationTest@SubmitLogin');
