<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Chap10Controller extends Controller
{
	public function helloWithAuth()
	{
		return view("chap10.helloWithAuth");
	}
}
