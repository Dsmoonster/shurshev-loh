@extends('layouts/main')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/object.css') }}">

    <main>
    <p class="naz">{{ $product->name }}</p>
    <div class="object">
        <div class="photo">
            @foreach($product->images as $image)
            <img src="{{ asset(Storage::url($image->image_path)) }}" width="70px" height="70px"><BR>
            @endforeach
        </div>
        <div class="photo_block">
            <img src="{{ $product->image_path }}" width="500px" height="400px">
        </div>

        <div class="info_block_tovar">
            <h1>От {{ $product->price }}  ₽</h1><br>
            <a href="{{ route('products.basket', $product) }}">В корзину</a>
            В корзину</button>
            <br><br><br>
            <p>Характеристики:<br><br>
                {!!$product->content !!}
                </p>
            <p class="pusto_block">Цена действительна только для интернет-магазина и <br>
                может отличаться от цен в розничных магазинах</p>
            <br><br>
            <p class="pusto_block">Код товара:<br>
                {{ $product->id }}
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

