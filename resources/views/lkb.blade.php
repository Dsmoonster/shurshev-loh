@extends('layouts/main')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/lkb.css') }}">
    <main>
        <div class="lkb">
            <div class="menu">
                <button onclick="window.location.href = '{{ route('lkb') }}'">Личные данные</button>
                <button onclick="window.location.href = '{{ route('adress') }}'">Мои заказы</button>
                <button onclick="window.location.href = '{{ route('basket') }}'">Корзина</button>
                <br><br>
            </div>
            <div class="info_lkb">
                <h1>{{ Auth::user()->name }} {{ Auth::user()->surname }}</h1><br>
                <p class="pusto">Ваш email:</p>
                <p>{{ Auth::user()->email }}</p><br>
            </div>
        </div>

    </main>
@endsection
