@extends('layouts.main')
@section('content')
    <div class="container">
        <form method="post" action="">
            {{ csrf_field() }}
            <div class="users-tables-group">
                <div>
                    <button style="margin-bottom: 20px" type="submite" class="btn ">
                        <a href="{{route('offers.add')}}" >Add Offers</a>
                    </button>
                </div>
                @foreach($offers as $offer)
                    @if($offer->store_id==$stores->id)
                    <div class="table-users-row">
                        <div class="table-user">
                            <div class="table-header-blue clearfix">
                        <span class="right">
                            <a href="{{route('offers.edit', $offer->id)}}" class="action" style="color: white">Редагувати оголошення</a>
                            <a href="{{route('delete.offer', $offer->id)}}" class="delete"></a>
                        </span>
                            </div>
                            <div class="table-user-body clearfix">
                                <table class="user-details">
                                    <tbody>
                                    <tr>
                                        <td>Тип Товару</td>
                                        <td>{{$offer->type_object}}</td>
                                    </tr>
                                    <tr>
                                        <td>Бренд</td>
                                        <td>{{$offer->brand}}</td>
                                    </tr>
                                    <tr>
                                        <td>Назва</td>
                                        <td>{{$offer->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Ціна</td>
                                        <td>{{$offer->price}}</td>
                                    </tr>
                                    <tr>
                                        <td>Тип Валюти</td>
                                        <td>{{$offer->currency}}</td>
                                    </tr>
                                    <tr>
                                        <td>Магазин</td>
                                        <td>{{$offer->store->name??''}}</td>
                                    </tr>
                                    <tr>
                                        <td>Телефон</td>
                                        <td>{{$offer->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Додаткова інформація</td>
                                        <td>{{$offer->extra_data}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </form>
    </div>
@stop