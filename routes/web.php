<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// Route::pattern('foo', '[0-9a-zA-Z]{3}');

/*
Route::get('/{foo?}', function ($foo = 'bar') {
    return $foo;
})->where('foo', '[0-9a-zA-Z{3}]');
*/

/*
Route::get('/', [
	'as' => 'home',
	function () {
		return '제 이름은 "home" 입니다.';
	}
]);

Route::get('/home', function () {
	return redirect(route('home'));
});
*/

/*
Route::get('/', function () {
    return view('welcome')->with([
        'name' => 'Foo',
        'greeting' => '안녕하세요?',
    ]);
});
*/

Route::get('/', function () {
    return view('welcome', [
        'name' => 'Foo',
        'greeting' => '안녕하세요??',
    ]);
});