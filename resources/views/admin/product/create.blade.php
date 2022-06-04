@extends('layouts/main')
@section('content')
<main>
    <div class="forma_reg">
        <div class="regsiter">
            <h2>Добавление продуктов</h2>
            <form method="POST" name="reg">
                @csrf
                <input type="text" name="name" placeholder="Название продукта" value="{{ old('name') }}"><br>
                <input type="text" name="price" placeholder="Цена" value="{{ old('price') }}"><br>
                <textarea name="content" id="" cols="30" rows="10" placeholder="Характеристики">{{ old('content') }}</textarea>
                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" @if($category->id == old('category_id')) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
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
