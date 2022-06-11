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
            </div>
            <div class="korzina">
                <a href="{{ route('basket') }}"><img src="{{ asset('img/icons8-корзина-48 1.png') }}"></a>
                <a href="{{ route('basket') }}">Моя корзина</a>
            </div>
        </div>
        <!-- search -->
        <!-- Отзывы -->
        <div class="otzh">
            <div class="koguvcavis-varazdel">
                <div class="sestim-donials">
                    <h1>Отзывы</h1>
                    <div class="sagestim-lonials">
                        @forelse ($reviews as $review)
                            <div class="vemotau-vokusipol">
                                <div class="testimonial">
                                    <img src="https://cdn-icons-png.flaticon.com/512/21/21104.png"
                                         alt="{{ $review->full_name }}">
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

                    @auth()
                        <h3>Вы можете добавить свой отзыв</h3>
                        <form action="{{ route('comment-create') }}" method="POST" class="form">
                            @csrf
                            <input type="text" name="full_name" class="input" placeholder="Имя"
                                   value="{{ old('name') }}">
                            <textarea name="text" placeholder="Текст комментария">{{ old('text') }}</textarea>
                            <button class="button edit_button">Добавить</button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </main>
@endsection
