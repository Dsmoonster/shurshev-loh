@extends('layouts.main')

@section('content')
    <main>
        <!-- info_block -->
        <div class="info_block">
            <a class="logo_index" href="{{ route('home') }}">
                <img src="{{ asset('img/logo 1.png') }}">
            </a>
            <div class="time">
                <p>8(999) 164 3992</p><br>
                <p>Режим работы<br>
                    пн-вс 7:00 - 23:00 мск</p>
            </div>
            <div class="korzina">
                <a href="{{ route('basket') }}"><img src="{{ asset('img/icons8-корзина-48 1.png') }}"></a>
                <a href="{{ route('basket') }}">Моя корзина</a>
            </div>
        </div>
        <!-- search -->

        <div class="categoria_block">
            <form action="">
                <h2>Выберите автомобиль:</h2>
                <div class="cat_pod">
                    <select name="category">
                        <option value="0"> -- Выберите автомобиль --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                    @if (request()->get('category') == $category->id) selected @endif>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                    <button>Показать</button>
                </div>
            </form>
        </div>

        <!-- Tovars -->

        <div class="tovar_block">
            @forelse($products as $product)
                <div class="tovar">
                    <img src="{{ $product->image_path }}" width="278px" height="280px">
                    <h1>{{ $product->name }}</h1>
                    <p></p>
                    <div class="info_tovar">
                        <p class="code">Код товара:<br>{{ $product->id }}</p>
                        <a href="{{ route('product.single', $product) }}" class="bt_load">Подробнее</a>
                    </div>
                </div>
            @empty
                <h2>Товаров нет(</h2>
            @endforelse
        </div>
    </main>
@endsection
