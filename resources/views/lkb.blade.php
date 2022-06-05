@extends('layouts/main')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/lkb.css') }}">
    <main>
               <div class="lkb">
                    <div class="menu">
                        <button onclick="window.location.href = '{{ route('lkb') }}'">Личные данные</button>
                        <button onclick="window.location.href = '{{ route('adress') }}'">Мои заказы</button>
                        <button onclick="window.location.href = '{{ route('basket') }}'">Корзина</button><br><br>
                    </div>
                <div class="info_lkb">
                    <h1><?php echo $_SESSION['user']['name']; echo $_SESSION['user']['surname']?></h1><br>
                    <p class="pusto">Ваш email:</p>
                    <p><?php echo $_SESSION['user']['email'] ?></p><br>
                    <p class="pusto">Ваш номер телефона:</p>
                    <p>89991643992</p><br><br>
                    <button class="edit_button" onclick="window.location.href = 'index.html'">Редактировать</button>
                </div>
               </div>

    </main>
@endsection
