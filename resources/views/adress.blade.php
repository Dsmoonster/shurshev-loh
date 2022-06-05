@extends('layouts/main')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/adress.css') }}">

    <main>
               <div class="lkb">
                   <div class="menu">
                       <button onclick="window.location.href = '{{ route('oplata') }}'">Оплата</button>
                       <button onclick="window.location.href = '{{ route('dostavka') }}'">Условия доставки</button>
                       <button onclick="window.location.href = '{{ route('garant') }}'">Гарантия на товар</button>
                       <button onclick="window.location.href = '{{ route('lkb') }}'">Личный кабинет</button><br><br>
                       <button class="exit_button" onclick="window.location.href = 'index.html'">Выход</button>
                   </div>
                <div class="info_lkb">
                    <p class="zakaz_up">Мой заказ №12312, создан 21.04.2022</p><br>
                    <div class="info_zakaz">

                        <div class="info_zakaz_status">
                            <div class="dano">
                                 <h2>Информация о заказе</h2><br>
                                     <p>Ф.И.О.:</p><br>
                                    <p>Шуршев Андрей</p>
                            </div>
                            <div class="dano"><br><br><br>
                                <p>Текущий заказ:</p><br>
                                <p>Заказ отменен</p>
                            </div>
                            <div class="dano"><br><br><br>
                                <p>Сумма:</p><br>
                                <p>604 ₽</p>
                            </div>
                            <div class="dano"><br><br><br>
                                <button>Поторить заказ</button>
                            </div>

                        </div>
                         <div class="info_zakaz_status">
                            <div class="dano">
                                 <h2>Информация о заказе</h2><br>
                                     <p>Ф.И.О.:</p><br>
                                    <p>Шуршев Андрей</p>
                            </div>
                            <div class="dano"><br><br><br>
                                <p>Текущий заказ:</p><br>
                                <p>Заказ отменен</p>
                            </div>
                            <div class="dano"><br><br><br>
                                <p>Сумма:</p><br>
                                <p>604 ₽</p>
                            </div>
                            <div class="dano"><br><br><br>
                                <button>Поторить заказ</button>
                            </div>
                        </div>
                    </div>
                </div>
               </div>

    </main>
@endsection
