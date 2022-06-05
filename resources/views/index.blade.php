@extends('layouts/main')
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
                        <img src="{{ asset('img/Без имени-2.jpg') }}"/>
                        <img src="{{ asset('img/Без имени-3.jpg') }}"/>
                        <img src="{{ asset('img/Без имени-4.jpg') }}"/>
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
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                                @if(request()->get('category') == $category->id) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </label>
                </select>
                <button>Показать</button>
            </div>
        </form>
        </div>

        <!-- Tovars -->

        <div class="tovar_block">
            @foreach($products as $product)

            <div class="tovar">
                <img src="{{ $product->image_path }}" width="278px" height="280px">
                <h1>{{ $product->name }}</h1>
                <p></p>
                <div class="info_tovar">
                    <p class="code">Код товара:<br>{{ $product->id }}</p>
                    <a href="{{ route('product.single', $product) }}" class="bt_load">Подробнее</a>
                </div>
            </div>
            @endforeach

        </div>
        <button class="bt_load">Загрузить еще...</button>
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
                    <div class="sectionesag"></div>
                    <div class="sagestim-lonials">
                        <div class="vemotau-vokusipol">
                            <div class="testimonial">
                                <img src="http://zornet.ru/_fr/83/7890600.jpg" alt="">
                                <div class="gecedanam">Антон Попов</div>
                                <div class="apogered-gselected">
                                </div>

                                <p>Здесь первое описание. Продолжение.</p>
                            </div>
                        </div>

                        <div class="vemotau-vokusipol">
                            <div class="testimonial">
                                <img src="http://zornet.ru/_fr/83/2047084.jpg" alt="">
                                <div class="gecedanam">Дмитрий Атрохов</div>
                                <div class="apogered-gselected">
                                </div>

                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde, error.</p>
                            </div>
                        </div>

                        <div class="vemotau-vokusipol">
                            <div class="testimonial">
                                <img src="http://zornet.ru/_fr/83/5640570.jpg" alt="">
                                <div class="gecedanam">Каспер Волков</div>


                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi necessitatibus
                                    adipisci quas modi laboriosam consequatur nemo quia aspernatur facilis officiis?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
