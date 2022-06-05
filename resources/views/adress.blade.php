@extends('layouts/main')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/adress.css') }}">

    <main>
        <div class="lkb">
            <div class="menu">
                <button onclick="window.location.href = '{{ route('oplata') }}'">Оплата</button>
                <button onclick="window.location.href = '{{ route('dostavka') }}'">Условия доставки</button>
                <button onclick="window.location.href = '{{ route('garant') }}'">Гарантия на товар</button>
                <button onclick="window.location.href = '{{ route('lkb') }}'">Личный кабинет</button>
                <br><br>
                <button class="exit_button" onclick="window.location.href = 'index.html'">Выход</button>
            </div>
            <div class="info_lkb">
                <div class="info_zakaz">
                    @foreach($orders as $order)
                        <p class="zakaz_up">Мой заказ №{{ $order->id }}, создан {{ $order->created_at->format('d.m.Y') }}</p><br>
                        <div class="info_zakaz_status">
                            <div class="dano">
                                <h2>Информация о заказе</h2><br>
                                <p>Ф.И.О.:</p><br>
                                <p>{{ $order->user->surname }} {{ $order->user->name }}</p>
                            </div>
                            <div class="dano"><br><br><br>
                                <p>Текущий заказ:</p><br>
                                <p>В обработке</p>
                            </div>
                            <div class="dano"><br><br><br>
                                <p>Сумма:</p><br>
                                <p>{{ $order->price }} ₽</p>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </main>
@endsection
