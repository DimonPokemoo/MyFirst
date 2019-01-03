@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div><div>
                <button style="margin-bottom: 20px" type="submite" class="btn ">
                    <a href="{{route('index')}}" >Main</a>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
