@extends('layouts.main')

@section('page-title')
Homepage
@endsection


@section('main-content')
@foreach ($comics as $comic)
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <img class="card-img-top" src="{{$comic['thumb']}}" alt="">
            </div>

            <div class="card-body">
                <h4>
                    {{$comic['title']}}
                </h4>

                <p>
                    {{$comic['description']}}
                </p>

                <div>
                    {{$comic['price']}}
                </div>
            </div>
        </div>
    </div>
</div>
   
@endforeach
    

@endsection