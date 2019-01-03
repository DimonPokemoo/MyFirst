@extends('layouts.main')
@section('content')
    <div class="container" style="padding-top: 20px">
        <div>
            <form method="post" action="{{route('submit')}}">
                {{ csrf_field() }}
                <div class="form-row">
                    <div class="col-auto my-1"  {{ $errors->has('type_object') ? ' has-error' : '' }}>
                        <label class="mr-sm-2" for="type_object">Тип товару</label>
                        <select class="custom-select mr-sm-2" id="type_object" name = "type_object">
                            <option selected>Вибрати...</option>
                            <option value="laptop">Ноутбук</option>
                            <option value="tv">Телевізор</option>
                        </select>
                        @if ($errors->has('type_object'))
                            <div class="text-danger">
                                <strong>{{ $errors->first('type_object') }}
                                </strong>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Бренд</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Введіть ім'я">
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="price">Ціна</label>
                        <input type="number" class="form-control" name ="price" id="price" placeholder="Вкажіть ціну">
                    </div>
                    <div class="col">
                        <label class="mr-sm-2" for="currency">Тип валюти</label>
                        <select class="custom-select mr-sm-2" name="currency" id="currency">
                            <option selected>Вибрати...</option>
                            <option value="UAH">UAH</option>
                            <option value="EUR">EUR</option>
                            <option value="USD">USD</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="form-group">
                        <label for="name">Магазин</label>
                        <select type="text" name="name" class="form-control" id="name">
                            <option selected></option>
                            @foreach($stores as $store)
                                <option value="{{$store->id}}">{{$store->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <select type="text" class="form-control" id="phone" name="phone">
                            <option selected></option>
                            @foreach($stores as $store)
                                <option value="{{$store->id}}">{{$store->phone}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Додаткова інформація</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Опублікувати</button>
                    </div>
            </form>
        </div>
    </div>
@stop