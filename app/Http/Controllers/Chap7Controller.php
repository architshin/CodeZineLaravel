<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Exceptions\FatalProcessException;
use App\Exceptions\DataAccessException;
use App\Exceptions\FileAccessException;

class Chap7Controller extends Controller
{
	public function occurFatalProcessException()
	{
		throw new FatalProcessException("致命的な障害が発生しました。");
	}
	public function occurDataAccessException()
	{
		throw new DataAccessException("データベース処理に失敗しました。");
	}
	public function occurFileAccessException()
	{
		throw new FileAccessException("ファイル処理に失敗しました。");
	}
}
