<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>ループ</title>
</head>
	<body>
		<ol>
			@for($i = 1; $i <= 5; $i++)
			<li>{{$i}}個目</li>
			@endfor
		</ol>
		<ul>
			@foreach($resultList as $key => $value)
			<li>{{$key}}は{{$value}}です</li>
			@endforeach
		</ul>
	</body>
</html>
