<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;

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
Route::get('/','App\Http\Controllers\pagesController@index');

Route::post('/','App\Http\Controllers\pagesController@find');

Route::get('/{user}','App\Http\Controllers\pagesController@slash');

Route::get('/site/signup','App\Http\Controllers\pagesController@signUpPage');
Route::post('/site/signup','App\Http\Controllers\pagesController@signUp');

Route::get('/site/signin','App\Http\Controllers\pagesController@signInPage');
Route::post('/site/signin','App\Http\Controllers\pagesController@signIn');

Route::get('/site/recover','App\Http\Controllers\pagesController@pagesController@recover');
Route::post('/site/recover','App\Http\Controllers\pagesController@recoverPass');

Route::get('/single/{id}','App\Http\Controllers\pagesController@single');
Route::get('/cate/{cate}','App\Http\Controllers\pagesController@jobs');

Route::get('/user/bio','App\Http\Controllers\pagesController@userBio');
Route::post('/user/bio','App\Http\Controllers\pagesController@updateBio');

Route::get('/user/avatar','App\Http\Controllers\pagesController@avatarPage');
Route::post('/user/avatar','App\Http\Controllers\pagesController@postAvatar');

Route::get('/user/profile','App\Http\Controllers\pagesController@profilePage');
Route::post('/user/profile','App\Http\Controllers\pagesController@updateProfile');

Route::get('/user/posts','App\Http\Controllers\pagesController@allPosts');

Route::get('/user/catecreate','App\Http\Controllers\pagesController@createCatePage');
Route::post('/user/catecreate','App\Http\Controllers\pagesController@createCate');

/**Route::get('/user/edit/{id}',[
    'as' => 'editpage',
    'uses'=>'pagesController@editPage'
]); */

Route::get('/user/pass','App\Http\Controllers\pagesController@pass');
Route::post('/user/pass','App\Http\Controllers\pagesController@changePass');

Route::get('/user/edit/{id}','App\Http\Controllers\pagesController@editPage');
Route::post('/user/edit/{id}','App\Http\Controllers\pagesController@editPost');

Route::get('/user/delete/{id}','App\Http\Controllers\pagesController@deletePage');
Route::post('/user/delete/{id}','App\Http\Controllers\pagesController@deletePost');


Route::get('/user/post','App\Http\Controllers\pagesController@userPost');
Route::post('/user/post','App\Http\Controllers\pagesController@post');

Route::get('/user/index','App\Http\Controllers\pagesController@userIndex');
Route::post('/user/index','App\Http\Controllers\pagesController@log_in');

Route::get('/logout','App\Http\Controllers\pagesController@logout');
