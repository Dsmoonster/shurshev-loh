<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
{{--    <link rel="stylesheet" href="public/css/oplata.css">--}}
{{--    <link rel="stylesheet" href="public/css/lkb.css">--}}
{{--    <link rel="stylesheet" href="public/css/adress.css">--}}
    <title>AUTOGET</title>
</head>
<body>

<header>
    <div class="nav-all">
        <div class="nav_all">
        <div class="nav_block">
            <a href="{{ route('home') }}">Новости</a>
            <a href="#">Акции</a>
            <a href="oplata.html">Оплата</a>
            <a href="#">Контакты</a>
            <a href="dostavka.html">Доставка</a>
        </div>
        <div class="user-btn">
            @guest()
            <a href="{{ route('register') }}">Регистрация</a>
            <a href="{{ route('login') }}">Авторизация</a>
            @endguest
            @auth()
            @if(auth()->user()->role === 'admin')
                    <a href="{{ route('admin-category') }}">Управление категорями</a>
                    <a href="{{ route('admin-product') }}">Управление товарами</a>
                @endif
                @endauth
            @auth()
            <a href="{{ route('logout') }}">Выход</a>
                @endauth
        </div>
        </div>
        <a class="logo_index" href="{{ route('home') }}">
            <img src="public/img/logo 1.png">
        </a>
        <a href="{{ route('basket') }}"></a>
    </div>
</header>
@yield('content')
<footer>
    <div class="info">
        <h1>Навигация</h1><br>
        <a href="oplata.html">Оплата</a><br>
        <a href="#">Контакты</a><br>
        <a href="#">Доставка</a><br>
    </div>
    <div class="info_block_f">
        <h1>Помощь</h1><br>
        <a href="oplata.html">Условия оплаты</a><br>
        <a href="dostavka.html">Условия доставки</a><br>
        <a href="garant.html">Гарантия на товар</a>
    </div>
    <div class="info_block_f">
        <h1>Наши контакты</h1><br>
        <p>+7(999)164 39 92</p>
        <p>autoget@mail.com</p>

    </div>
</footer>
</body>
</html>
