@extends('layouts/main')
@section('content')
<main>
    <!-- info_block -->
    <div class="info_block">
        <a class="logo_index" href="{{ route('home') }}">
            <img src="{{ asset('img/logo 1.png') }}">
        </a>
        <div class="time">

        </div>
        <div class="korzina">
            <a href="{{ route('basket') }}"><img src="{{ asset('img/icons8-корзина-48 1.png') }}"></a>
            <a href="{{ route('basket') }}">Моя корзина</a>
        </div>
    </div>
    <!-- search -->
    <!-- slaider -->
    <div class="slaider_block">
        <div class="adaptivny-slayder">
            <input type="radio" name="kadoves" id="slaid1" checked>
            <input type="radio" name="kadoves" id="slaid2">
            <input type="radio" name="kadoves" id="slaid3">

            <div class="kadoves">
                <label for="slaid1"></label>
                <label for="slaid2"></label>
                <label for="slaid3"></label>
            </div>

            <div class="adaptivny-slayder-lasekun">
                <div class="abusteku-deagulus">
                    <img src="{{ asset('img/Без имени-2.jpg') }}" />
                    <img src="{{ asset('img/Без имени-3.jpg') }}" />
                    <img src="{{ asset('img/Без имени-4.jpg') }}" />
                </div>
            </div>
        </div>
    </div>
    <!-- categoria -->

    <div class="categoria_block">
        <form action="">
            <h2>Выберите автомобиль:</h2>
            <div class="cat_pod">
                <label for="">
                    <select name="category">
                        <option value="0"> -- Выберите автомобиль --</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if (request()->get('category') == $category->id) selected @endif>
                            {{ $category->name }}
                        </option>
                        @endforeach
                </label>
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
            <h1>{{ $product->price }}</h1>
            <p>{{ $product->name }}</p>
            <div class="info_tovar">
                <p class="code">Код товара: №{{ $product->id }}</p>
                <a href="{{ route('product.single', $product) }}" class="bt_load">Подробнее</a>
            </div>
        </div>

        <style>
            .info_tovar {
                flex-direction: column;
                padding: 10px;
            }

            .tovar>p {
                margin-bottom: 15px;
            }

            .tovar .info_tovar {
                margin-top: auto;
            }

            .info_tovar .bt_load {
                max-width: none;
                width: auto;
                margin: 0;
                padding: 10px 15px;
            }

            .tovar .info_tovar p {
                margin: 0;
            }
        </style>
        @empty
        <h2>Товаров нет(</h2>
        @endforelse

    </div>

    <div class="flex align-center justify-center my-4">
        <a class="button edit_button" href="{{ route('products') }}">Показать все</a>
    </div>

    <!-- О нас -->
    <div class="onas_block">
        <div class="onas">
            <img src="{{ asset('img/icons8-гарантия-100.png') }}" width="60px">
            <h1>Гарантия</h1>
            <p>
                Мы даем гарантию <br>
                и самые низкие цены<br>
                на весь ассортимент!</p>
        </div>
        <div class="onas">
            <img src="{{ asset('img/icons8-доставляется-50.png') }}">
            <h1>Быстрая доставка</h1>
            <p>
                Бережно доставляем товары
                по России транспортными компаниями
                в кратчайшие сроки</p>
        </div>
        <div class="onas">
            <img src="{{ asset('img/icons8-онлайн-поддержка-50.png') }}">
            <h1>Поддержка 24/7</h1>
            <p>
                Наша тех.поддержка
                работает круглосуточно.
                Вы не останетесь без ответов</p>
        </div>
    </div>
    <!-- Отзывы -->
    <div class="otzh">
        <div class="koguvcavis-varazdel">
            <div class="sestim-donials">
                <h1>Отзывы</h1>
                <div class="sagestim-lonials">
                    @forelse ($reviews as $review)
                    <div class="vemotau-vokusipol">
                        <div class="testimonial">
                            <img src="https://cdn-icons-png.flaticon.com/512/21/21104.png" alt="{{ $review->full_name }}">
                            <div class="gecedanam">{{ $review->full_name }}</div>
                            <div class="apogered-gselected">
                            </div>

                            <p>{{ $review->content }}</p>
                        </div>
                    </div>
                    @empty
                    <p>На сайте пока нет отзывов</p>
                    @endforelse
                </div>

                <div class="flex align-center justify-center">
                    <a href="{{ route('reviews') }}" class="button edit_button">
                        Показать все отзывы
                    </a>
                </div>

                {{-- @auth()--}}
                {{-- <form action="{{ route('comment-create') }}" method="POST" class="form">--}}
                {{-- @csrf--}}
                {{-- <input type="text" name="full_name" class="input" placeholder="Имя"--}}
                {{-- value="{{ old('name') }}">--}}
                {{-- <textarea name="text" placeholder="Текст комментария">{{ old('text') }}</textarea>--}}
                {{-- <button class="button edit_button">Добавить</button>--}}
                {{-- </form>--}}
                {{-- @endauth--}}
            </div>
        </div>
    </div>
</main>

<style>
    .my-4 {
        margin: 40px 0;
    }
</style>
@endsection