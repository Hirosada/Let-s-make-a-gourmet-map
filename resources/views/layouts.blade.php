<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>会員登録 | みんなで作る美味しいグルメマップ</title>
		<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
		<link href="{{ asset('/css/reset.min.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/form.css') }}" rel="stylesheet">
		<link href="{{ asset('/css/header.css') }}" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="{{ asset('/js/post_code.js') }}"></script>

	</head>
	<body>
		<header class="site-header">
			<div class="wrapper site-header__wrapper">
				<div class="site-header__start">
					<a href="#" class="brand">みんなで作る美味しいグルメマップ</a>
				</div>
				<div class="site-header__middle">
					<nav class="nav">
						<button class="nav__toggle" aria-expanded="false" type="button">
							menu
						</button>
						<ul class="nav__wrapper">
							<li class="nav__item"><a href="#">Top</a></li>
							<li class="nav__item"><a href="#">会員登録</a></li>
							<li class="nav__item"><a href="{{ }}">会員専用ページ</a></li>
							<li class="nav__item"><a href="#">いいね一覧</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		@yield('contents')
		<script src="{{ asset('/js/header.js') }}"></script>
	</body>
</html>
