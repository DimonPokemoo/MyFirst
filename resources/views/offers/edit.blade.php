@extends('layouts.main')
@section('content')
    <div class="container" style="padding-top: 20px">
        <div>
            <form method="post" action="{{route('update', $offers->id)}}">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-auto my-1">
                        <label class="mr-sm-2" for="type_object">Тип товару</label>
                        <select class="custom-select mr-sm-2" id="type_object" name = "type_object">
                            @foreach($typeObject as $object)
                                <option value="{{$object}}" {{$offers['type_object']===$object?'selected':' '}}>{{$object}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Бренд</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Введіть ім'я" value="{{isset($offers)?$offers['brand']:' '}}">
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="price">Ціна</label>
                        <input type="number" class="form-control" name ="price" id="price" placeholder="Вкажіть ціну" value="{{isset($offers)?$offers['price']:' '}}">
                    </div>
                    <div class="col">
                        <label class="mr-sm-2" for="currency">Тип валюти</label>
                        <select class="custom-select mr-sm-2" name="currency" id="currency">
                            <option selected>{{isset($offers)?$offers['currency']:' '}}</option>
                            {{--@foreach($offers as $offer)--}}
                                {{--<option value="{{$offer->currency}}">{{$offer->currency}}</option>--}}
                            {{--@endforeach--}}
                        </select>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label for="name">Магазин</label>
                        <select type="text" name="name" class="form-control" id="name">
                            <option selected>{{isset($offers)?$offers['store_id']:' '}}</option>
                            @foreach($stores as $store)
                                <option value="{{$store->id}}">{{$store->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <select type="number" class="form-control" id="phone">
                            <option selected>{{isset($offers)?$offers['phone']:' '}}</option>
                            @foreach($stores as $store)
                                <option value="{{$store->id}}">{{$store->phone}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Додаткова інформація</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{isset($offers)?$offers['extra_data']:' '}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Опублікувати</button>
            </form>
        </div>
    </div>
@stop