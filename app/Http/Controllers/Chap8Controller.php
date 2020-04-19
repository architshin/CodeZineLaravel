<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Chap8Controller extends Controller
{
	public function showInput()
	{
		return view("chap8.input");
	}

	public function addData(Request $request)
	{
		$validatedData = $request->validate([
			"name" => "required",
			"height" => "required|numeric",
			"weight" => "required|numeric",
		]);

		return "<h1>入力完了</h1>";
	}
}
