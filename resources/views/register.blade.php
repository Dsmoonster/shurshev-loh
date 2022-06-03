@extends('layouts/main')
@section('content')
<main>
    <div class="forma_reg">
        <div class="regsiter">
            <h2>Регистрация</h2>
            <form method="POST" name="reg">
                @csrf
                <input type="text" name="name" placeholder="Ваше имя" value="{{ old('name') }}"><br>
                <input type="text" name="surname" placeholder="Ваша фамилия" value="{{ old('surname') }}"><br>
                <input type="email" name="email" placeholder="Ваш email" value="{{ old('email') }}"><br>
                <input type="password" name="password" placeholder="Ваш пароль"><br>
                <input class="sub_bt" type="submit" name="reg" value="Зарегистрироваться">
                @if($errors->any())
                    <p>Ошибки валидации:</p>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
        </div>
    </div>
</main>
@endsection
