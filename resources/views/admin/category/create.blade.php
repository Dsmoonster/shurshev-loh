@extends('layouts/main')
@section('content')
<main>
    <div class="forma_reg">
        <div class="regsiter">
            <h2>Создани категорий</h2>
            <form method="POST" name="reg">
                @csrf
                <input type="text" name="name" placeholder="Название категории" value="{{ old('name') }}"><br>
                <input class="sub_bt" type="submit" name="reg" value="Создать">
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
