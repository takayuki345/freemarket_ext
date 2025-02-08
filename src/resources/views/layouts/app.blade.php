<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECH フリマ</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
    @yield('css')
</head>
<body>
    <header>
        <div class="header_wrapper">
            <p class="header_logo">
                <img src="img/logo.svg" alt="logo">
            </p>
            @if( Request::is('register') == false and Request::is('login') == false)
            <form class="header_search" action="">
                <input type="text" name="keyword" placeholder="なにをお探しですか？">
                {{-- <button>非表示ボタン</button> --}}
            </form>
            <nav class="header_nav">
                <ul>
                    <li class="header_nav__login"><a href="">ログイン</a></li>
                    {{-- <li class="header_nav__logout"><a href="">ログアウト</a></li> --}}
                    <li class="header_nav__mypage"><a href="">マイページ</a></li>
                    <li class="header_nav__sell"><a href="">出品</a></li>
                </ul>
            </nav>
            @endif
        </div>
    </header>
    <main class="main">
        @yield('content')
    </main>
</body>
</html>
