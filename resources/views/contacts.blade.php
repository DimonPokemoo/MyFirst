@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="users-tables-group">
            @foreach ($stores as $store)
            <div class="table-users-row">
                <div class="table-user">
                    <div class="table-header-blue clearfix">
                        <span class="right">
                            <a href="" class="action" style="color: white">Редагувати дані</a>
                            <a href="" class="delete"></a>
                        </span>
                    </div>
                    <div class="table-user-body clearfix">
                        <table class="user-details">
                            <tbody>
                            <tr>
                                <td>Назва Магазину</td>
                                <td>{{$store->name}}</td>
                            </tr>
                            <tr>
                                <td>Адреса</td>
                                <td>{{$store->address}}</td>
                            </tr>
                            <tr>
                                <td>Контактний телефон</td>
                                <td>{{$store->phone}}</td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
@stop