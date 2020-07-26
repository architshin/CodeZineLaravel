<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Dept;

class Chap9Controller extends Controller
{
	public function getPDO()
	{
		$db = DB::connection()->getPdo();
		return "<p>PDO取得成功</p>";
	}

	public function showOneDeptByRaw()
	{
		$sql = "SELECT * FROM depts WHERE id = :id";
		$bindParams = [":id" => 1];
		$deptList = DB::select($sql, $bindParams);
		// $dept = $deptList[0];
		foreach($deptList as $dept) {
			print($dept->id.": ".$dept->dp_name."<br>");
		}
		return "<p>処理終了</p>";
	}

	public function showAllDeptsByBuilder()
	{
		$deptList = DB::table("depts")->get();
		// $deptList = DB::table("depts")->where("dp_loc", "LIKE", "%大阪%")->get();
		foreach($deptList as $dept) {
			print($dept->id.": ".$dept->dp_name."<br>");
		}
		return "<p>処理終了</p>";
	}

	public function showAllDeptsByModel()
	{
		$deptList = Dept::all();
		// $deptList = Dept::where("dp_loc", "LIKE", "%大阪%")->get();
		foreach($deptList as $dept) {
			print($dept->id.": ".$dept->dp_name."<br>");
		}
		return "<p>処理終了</p>";
	}

	public function insertDeptByModel()
	{
		$dept = new Dept();
		$dept->dp_no = 90;
		$dept->dp_name = "バレー部";
		$dept->save();
		return "<p>処理終了</p>";
	}
}
