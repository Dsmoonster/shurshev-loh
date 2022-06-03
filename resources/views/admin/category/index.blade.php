@extends('layouts/main')

@section('content')
    <div class="header-title flex fl-jc-sb ai">
        <h1>Список категорий</h1>

        <div>
            <a href="{{ route('admin-category-create') }}" class="btn btn btn-success">Добавить категорию</a>
        </div>
    </div>
    <div>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('admin-category-destroy', $category) }}" class="btn btn-danger" >Удалить</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
