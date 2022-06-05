@extends('layouts/main')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/adress.css') }}">
    <main>
        <div class="lkb">
            <div class="menu">
                <button onclick="window.location.href = '{{ route('lkb') }}'">Личные данные</button>
                <button onclick="window.location.href = '{{ route('adress') }}'">Мои заказы</button>
                <button onclick="window.location.href = '{{ route('basket') }}'">Корзина</button>
                <br><br>
            </div>
            <div class="info_lkb">
                <p class="zakaz_up">Моя корзина</p>
                <div class="info_zakaz">

                    <div class="info_zakaz_status">
                        @foreach($products as $product)
                            <div class="dano">
                                <h2>Информация о заказе</h2><br>
                                <img src="{{ $product->product->getImagePathAttribute() }}" width="150px" alt="">
                                <p class="kor_naz">{{ $product->product->name }}</p><br>
                                <p class="code">Код товара:{{ $product->product->id }}</p>
                            </div>
                            <div class="dano"><br><br><br>
                                <p>Сумма:</p><br>
                                <p class="basket-product-price">{{ $product->product->price*$product->count }}</p>
                            </div>
                            <div class="dano"><br><br><br>
                                <p>Колличество:</p><br>
                                <p class="basket-product-count">{{ $product->count }}</p>
                            </div>
                            <div class="dano"><br><br><br>
                                <a href="{{ route('products-basket-destroy', $product) }}">Удалить</a>
                            </div>
                        @endforeach
                    </div>

                    <form method="post" action="{{ route('create-order') }}" class="info_zakaz_status">
                        @csrf
                        <div class="dano">
                            <h2>Ваш адресс</h2><br>
                            <input type="text" name="city" placeholder="Ваш город">
                            <input type="text" name="street" placeholder="Ваша улица"><br>
                            <input type="text" name="house" placeholder="№ дома">
                            <input type="text" name="apartment" placeholder="№ Квартиры(Если есть)">
                            <input type="hidden" name="price" id="priceInput">
                        </div>
                        <div class="dano"><br><br><br>
                            <p>Сумма:</p><br>
                            <p><span id="totalPrice">0</span> ₽</p>
                        </div>
                        <div class="dano_ob"><br><br><br>
                            <button type="submit" class="oform">Оформить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>
@endsection
