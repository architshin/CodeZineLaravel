<?php
namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FileAccessException extends Exception
{
	public function report(): void
	{
		$errorMsg = $this->getMessage();
		print("<h1>".$errorMsg."</h1>");
	}
	
	public function render(Request $request): Response
	{
		$data["errorMsg"] = $this->getMessage();
		return response()->view("errors.custom", $data);
	}
}
