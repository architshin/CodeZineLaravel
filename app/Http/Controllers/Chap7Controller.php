<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exceptions\DataAccessException;

class Chap7Controller extends Controller
{
	public function occurDataAccessException()
	{
		throw new DataAccessException("データベース処理に失敗しました。");
	}
}
