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

//第3回サンプル
Route::get("/helloBlade", function() {
	return view("hello");
});
Route::get("/helloBladeWithData", function() {
	$data["name"] = "武者小路";
	return view("helloWithData", $data);
});
Route::get("/chap3/helloToSomeone", function() {
	$data["name"] = "中野";
	return view("chap3.hello", $data);
});
Route::get("/chap3/if", function() {
	$data["rand"] = rand(1, 3);
	return view("chap3.ifStatement", $data);
});
Route::get("/chap3/switch", function() {
	$data["rand"] = rand(1, 3);
	return view("chap3.switchStatement", $data);
});
Route::get("/chap3/conditions", function() {
	$data["isFinished"] = false;
	$data["resultList"] = [];
	return view("chap3.conditionStatement", $data);
});
Route::get("/chap3/loop", function() {
	$data["resultList"] = ["A"=>"田中", "B"=>"中野", "C"=>"野村"];
	return view("chap3.loopStatement", $data);
});
Route::get("/chap3/loopVariable", function() {
	$data["resultList"] = ["A"=>"田中", "B"=>"中野", "C"=>"野村", "D"=>"村井", "E"=>"井田"];
	return view("chap3.loopVariables", $data);
});

//第4回サンプル
Route::get("/chap4/helloBladeWithData", "HelloBladeWithDataController");
Route::get("/chap4/helloToSomeone", "Chap4\HelloToSomeoneController");
Route::get("/chap4/helloMusha", "Chap4Controller@helloMusha");
Route::get("/chap4/helloNakano", "Chap4Controller@helloNakano");
Route::get("/chap4/whoAreYou/{name}", "Chap4Controller@whoAreYou");
Route::get("/chap4/whoAreYouFull/{nameFirst}/{nameLast}", "Chap4Controller@whoAreYouFull");

//第5回サンプル
Route::get("/chap5/middlewareTest", function() {
	return "<p>ミドルウェアのテスト。こちらはリクエスト処理。</p>";
})->middleware("recordipaddress");
Route::get("/chap5/middlewareTest2", function() {
	return "<p>ミドルウェアのテスト。こちらはリクエスト処理。</p>";
})->middleware("recordipaddress2:中");

//第6回サンプル
Route::get("/chap6/newBook", "Chap6Controller@newBook");
Route::get("/chap6/newBook2", "Chap6Controller@newBook2");
Route::get("/chap6/newBook3", "Chap6Controller@newBook3");
Route::get("/chap6/newNote", "Chap6Controller@newNote");

//第7回サンプル
Route::get("/chap7/occurFatalProcessException", "Chap7Controller@occurFatalProcessException");
Route::get("/chap7/occurDataAccessException", "Chap7Controller@occurDataAccessException");
Route::get("/chap7/occurFileAccessException", "Chap7Controller@occurFileAccessException");
