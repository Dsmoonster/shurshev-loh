@extends('layouts/main')
@section('content')
    <link rel="stylesheet" href="public/css/adress.css">
    <main>
                    <div class="lkb">
                         <div class="menu">
                             <button onclick="window.location.href = 'lkb.html'">Личные данные</button>
                             <button onclick="window.location.href = 'adress.html'">Мои заказы</button>
                             <button onclick="window.location.href = 'index.html'">История заказов</button>
                             <button onclick="window.location.href = 'korzina.html'">Корзина</button><br><br>
                             <button class="exit_button" onclick="window.location.href = 'index.html'">Выход</button>
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
                                     <p>{{ $product->product->price }}</p>
                                 </div>
                                 <div class="dano"><br><br><br>
                                     <p>Колличество:</p><br>
                                     <p>{{ $product->count }}</p>
                                 </div>
                                 <div class="dano"><br><br><br>
                                     <a href="{{ route('products-basket-destroy', $product) }}">Удалить</a>
                                 </div>
                                 @endforeach
                             </div>

                             <div class="info_zakaz_status">
                                <div class="dano">
                                    <h2>Ваш адресс</h2><br>
                                     <input type="text" name="city" placeholder="Ваш город">
                                     <input type="text" name="street" placeholder="Ваша улица"><br>
                                     <input type="text" name="home" placeholder="№ дома">
                                     <input type="text" name="home_nomer" placeholder="№ Квартиры(Если есть)">
                                </div>
                                 <div class="dano"><br><br><br>
                                     <p>Сумма:</p><br>
                                     <p>1208 ₽</p>
                                 </div>
                                 <div class="dano_ob"><br><br><br>
                                     <button class="oform">Оформить</button>
                                 </div>
                             </div>
                         </div>
                     </div>
                    </div>

         </main>
@endsection
