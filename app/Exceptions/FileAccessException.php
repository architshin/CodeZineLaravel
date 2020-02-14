<?php
namespace App\Exceptions;

use Exception;

class FileAccessException extends Exception
{
	public function report()
	{
		$errorMsg = $this->getMessage();
		print("<h1>".$errorMsg."</h1>");
	}
	
	public function render($request)
	{
		$data["errorMsg"] = $this->getMessage();
		return response()->view("errors.custom", $data);
	}
}
