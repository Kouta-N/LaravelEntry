<?php

use App\Http\Middleware\HelloMiddleware;
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


$html = <<<EOF
<html>
<head>
<title>Hello</title>
<style>
body {font-size:16pt; color:#999;}
</style>
</head>
<body>
<h1>Hello</h1>
<p>これはサンプルです</p>
</body>
</head>
</html>
EOF;

// Route::get('hello', function () use ($html) {
//     return $html;
// });

// Route::get('hello/{msg}', function ($msg) {
//     $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size:16pt; color:#999;}
// </style>
// </head>
// <body>
// <h1>Hello</h1>
// <p>{$msg}</p>
// <p>これはサンプルです</p>
// </body>
// </head>
// </html>
// EOF;

// return $html;

// });

// Route::get('hello/{msg?}', function ($msg = 'no message') {

//     $html = <<<EOF
// <html>
// <head>
// <title>Hello</title>
// <style>
// body {font-size:16pt; color:#999;}
// </style>
// </head>
// <body>
// <h1>Hello</h1>
// <p>{$msg}</p>
// <p>これはサンプルです</p>
// </body>
// </head>
// </html>
// EOF;

// return $html;

// });

// ルートパラメータを使用する場合
// Route::get('hello/{id?}/{pass?}', 'HelloController@index') ;
// Route::get('hello/other', 'HelloController@other') ;

// middlewareを呼ぶ場合
// Route::get('hello', 'HelloController@index')->middleware('hello');

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post') ;

Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create') ;

Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update') ;

Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove') ;

Route::get('hello/show', 'HelloController@show') ;

Route::get('person', 'PersonController@index') ;

Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search') ;

Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create') ;

Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update') ;

Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove') ;

Route::get('board', 'BoardController@index') ;
Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create') ;

Route::resource('rest', 'RestappController');

Route::get('hello/session', 'HelloController@ses_get');
Route::post('hello/session', 'HelloController@ses_put') ;
// 関数を指定する場合
// Route::get('hello/', function(){
//     return view('hello.index');
// }) ;
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
