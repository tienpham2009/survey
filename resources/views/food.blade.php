@extends('index')
@section('title' , 'page1')
@section('content')
    <div class="title">
        <button type="button" class="btn btn-success btn-title">Choose your favourite food</button>
    </div>
    <div class="row">
        @foreach($foods as $food)
            <div class="col-4">
                <div class="card @if(session()->get('food_id') == $food->id){{ "selected" }}@endif" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('image/'.$food->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $food->name }}</h5>
                        <p class="card-text">{{ $food->description }}</p>
                        <div style="text-align: center">
                            <a href="{{ route('selectFood' , $food->id) }}" class="btn btn-primary select">Select</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="title">
        <a href="{{ route('showForm') }}" class="btn btn-danger">Back</a>
    </div>
@endsection
