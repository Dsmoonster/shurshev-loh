@extends('layouts/main')

@section('content')
    <main>
        <div class="header-title flex fl-jc-sb ai">
            <h1>Список Товаров</h1>

            <div>
                <a href="{{ route('admin-product-create') }}" class="btn btn btn-success">Добавить товар</a>
            </div>
        </div>
        <div>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>
                            <a href="{{ route('admin-product-edit', $product) }}"
                               class="btn btn-danger">Редактировать</a>
                            <a href="{{ route('admin-product-destroy', $product) }}" class="btn btn-danger">Удалить</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
@endsection
