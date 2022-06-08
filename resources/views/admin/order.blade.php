@extends('layouts/main')

@section('content')
    <main>
        <div class="header-title flex fl-jc-sb ai">
            <h1>Список заказов</h1>
        </div>
        <div>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Фамилия имя</th>
                    <th>Адрес электронной почты</th>
                    <th>Текущий статус заказа</th>
                    <th>Адрес для доставки</th>
                    <th>Действия</th>
                </tr>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->surname }} {{ $order->user->name }}</td>
                        <td>{{ $order->user->email }}</td>
                        <td>{{ $order->order_status }}</td>
                        <td>{{ $order->city }}, {{ $order->street }}, {{ $order->house }} {{ '(' . $order->apartment . ' квартира)' }}</td>
                        <td>
                            <a href="{{ route('admin-order-canceled', $order) }}" class="btn btn-danger">Отклонить</a>
                            <a href="{{ route('admin-order-success', $order) }}" class="btn btn-danger">Завершить</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
@endsection
