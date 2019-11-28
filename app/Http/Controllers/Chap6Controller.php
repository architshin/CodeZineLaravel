<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Chap6\Book;
use App\Chap6\Pen;
use App\Chap6\Magazine;

class Chap6Controller extends Controller
{
	private $magazine;
	public function __construct(Magazine $magazine)
	{
		$this->magazine = $magazine;
	}
	public function newBook()
	{
		$book = new Book();
		return "<p>newBook()メソッドが実行されました。</p>";
	}
	public function newBook2()
	{
		$book = resolve("App\Chap6\Book");
		return "<p>newBook2()メソッドが実行されました。</p>";
	}
	public function newPen(Pen $pen)
	{
		return "<p>newPen()メソッドが実行されました。</p>";
	}
	public function newNote()
	{
		$book = resolve("App\Chap6\Note");
		return "<p>newNote()メソッドが実行されました。</p>";
	}
}
