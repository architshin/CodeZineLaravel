<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>その他の条件分岐</title>
</head>
	<body>
		@unless($isFinished)
		<p>
			unlessディレクティブ<br>
			isFinishedはfalseです。
		</p>
		@endunless
		@if(!$isFinished)
		<p>
			ifディレクティブ<br>
			isFinishedはfalseです。
		</p>
		@endif
		@isset($isFinished)
		<p>
			issetディレクティブ<br>
			isFinished変数は存在します。
		</p>
		@endisset
		@empty($resultList)
		<p>
			emptyディレクティブ<br>
			resultListは空です。
		</p>
		@endempty
	</body>
</html>
