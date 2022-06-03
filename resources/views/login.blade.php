@extends('layouts/main')
@section('content')
<main>
    <div class="forma_reg">
        <div class="auth">
            <h2>Авторизация</h2>
            <form method="POST" name="auth">
                @csrf
                <input type="email" name="email" placeholder="Ваш email" value="{{ old('email') }}"><br>
                <input type="password" name="password" placeholder="Ваш пароль"><br>
                <input class="sub_bt" type="submit" name="auth" value="Вход">
            </form>
        </div>
    </div>
    </div>
</main>
@endsection
