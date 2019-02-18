<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>テンプレート中のswitch</title>
</head>
	<body>
		<p>
		@switch($rand)
		@case(1)
			大吉です!<br>
			おめでとうございます!
			@break
		@case(2)
			中吉です!
			@break
		@default
			凶です!
		@endswitch
		</p>
	</body>
</html>
