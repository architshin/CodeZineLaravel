<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Chap6\Book;
use App\Chap6\Magazine;
use App\Chap6\Note;

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
	public function newBook3(Book $book)
	{
		return "<p>newBook3()メソッドが実行されました。</p>";
	}
	public function newNote(Note $note)
	{
		return "<p>newNote()メソッドが実行されました。</p>";
	}
}
