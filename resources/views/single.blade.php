@extends('layouts/main')
@section('content')
    <link rel="stylesheet" href="{{ asset('public/css/object.css') }}">

    <main>
    <p class="naz">{{ $product->name }}</p>
    <div class="object">
        <div class="photo">
            <img src="public/img/test.jpeg" width="70px" height="70px"><br>
            <img src="public/img/test.jpeg" width="70px" height="70px"><BR>
            <img src="public/img/test.jpeg" width="70px" height="70px"><BR>
            <img src="public/img/test.jpeg" width="70px" height="70px">
        </div>
        <div class="photo_block">
            <img src="" width="500px" height="400px">
        </div>

        <div class="info_block_tovar">
            <h1>От {{ $product->price }}  ₽</h1><br>
            <button class="form_button">
            В корзину</button>
            <br><br><br>
            <p>Характеристики:<br><br>
                {!!$product->content !!}
                </p>
            <p class="pusto_block">Цена действительна только для интернет-магазина и <br>
                может отличаться от цен в розничных магазинах</p>
            <br><br>
            <p class="pusto_block">Код товара:<br>
                1231
            </p>
            <br><br>
            <button class="edit_button">Редактировать</button>
            <button class="delete_button">Удалить</button>

        </div>

    </div>
    <!-- <div class="info_object">
        <div class="bt">
            <button>О товаре</button>
            <button>Отзывы</button>
            <button>Доставка и оплата</button>
        </div>
    </div> -->

</main>
@endsection
