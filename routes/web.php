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

//第2回サンプル
Route::get("/hello", function() {
	return "<h1>Hello World!</h1>";
});
Route::get("/whoAreYou/{name}", function($name) {
	return "<h1>こんにちは".$name."さん</h1>";
});
Route::get("/whoAreYouFull/{nameFirst}/{nameLast}",
	function($nameFirst, $nameLast) {
		return "<h1>こんにちは".$nameFirst." ".$nameLast."さん</h1>";
	}
);
Route::get("/whoAreYouPart/{nameFirst}/{nameLast?}",
	function($nameFirst, $nameLast = "") {
		return "<h1>こんにちは".$nameFirst." ".$nameLast."さん</h1>";
	}
);
Route::redirect("/google", "https://www.google.com/");
