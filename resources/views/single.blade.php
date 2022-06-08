@extends('layouts/main')
@section('content')
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/object.css') }}">
    <style>
        html,
        body {
          position: relative;
          height: 100%;
        }

        body {
          background: #eee;
          font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
          font-size: 14px;
          color: #000;
          margin: 0;
          padding: 0;
        }

        .swiper {
          width: 100%;
          height: 100%;
        }

        .swiper-slide {
          text-align: center;
          font-size: 18px;
          background: #fff;

          /* Center slide text vertically */
          display: -webkit-box;
          display: -ms-flexbox;
          display: -webkit-flex;
          display: flex;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          -webkit-justify-content: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;
        }

        .swiper-slide img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
        }


        .swiper {
          width: 100%;
          height: 300px;
          margin-left: auto;
          margin-right: auto;
        }

        .swiper-slide {
          background-size: cover;
          background-position: center;
        }

        .mySwiper2 {
          height: 80%;
          width: 100%;
          max-width: 500px;
        }

        .mySwiper {
          height: auto;
          box-sizing: border-box;
          padding: 10px 0;
          width: auto;
        }

        .mySwiper .swiper-wrapper {
            width: auto;
        }

        .mySwiper .swiper-slide {
          width: 180px;
          height: 120px;
          opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active {
          opacity: 1;
        }

        .swiper-slide img {
          display: block;
          width: 100%;
          height: 100%;
          object-fit: cover;
        }

        @media screen and (max-width: 576px) {
            .swiper.mySwiper {
                display: none;
            }
        }
      </style>
    <main>
        <p class="naz">{{ $product->name }}</p>
        <div class="object">

            <!-- Swiper -->

            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    @foreach ($product->images as $image)
                        <div class="swiper-slide">
                            <img src="{{ asset(Storage::url($image->image_path)) }}" width="70px" height="70px">
                        </div>
                    @endforeach
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($product->images as $image)
                        <div class="swiper-slide">
                            <img src="{{ asset(Storage::url($image->image_path)) }}" width="70px" height="70px">
                        </div>
                    @endforeach

                </div>
            </div>
{{--
            <div class="photo">

            </div>
            <div class="photo_block">
                <img src="{{ $product->image_path }}" width="500px" height="400px">
            </div> --}}

            <div class="info_block_tovar">
                <h1>От {{ $product->price }} ₽</h1><br>
                <a class="edit_button" href="{{ route('products.basket', $product) }}">Добавить в корзину</a>
                <br><br><br>
                <p>Характеристики:<br><br>
                    {!! $product->content !!}
                </p>
                <p class="pusto_block">Цена действительна только для интернет-магазина и <br>
                    может отличаться от цен в розничных магазинах</p>
                <br><br>
                <p class="pusto_block">Код товара:<br>
                    {{ $product->id }}
                </p>
                <br><br>
                @auth
                    @if (Auth::user()->role == 'admin')
                        <a href="{{ route('admin-product-edit', $product) }}" class="edit_button">Редактировать</a>
                        <a href="{{ route('admin-product-destroy', $product) }}" class="delete_button">Удалить</a>
                    @endif
                @endauth


            </div>

        </div>
        <!-- <div class="info_object">
                                    <div class="bt">
                                        <button>О товаре</button>
                                        <button>Отзывы</button>
                                        <button>Доставка и оплата</button>
                                    </div>
                                </div> -->

        <!-- Initialize Swiper -->
        <script defer>
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 10,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesProgress: true,
                direction: "vertical",

            });
            var swiper2 = new Swiper(".mySwiper2", {
                spaceBetween: 10,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                thumbs: {
                    swiper: swiper,
                },
            });
        </script>

    </main>
@endsection
