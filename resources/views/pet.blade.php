@extends('index')
@section('title' , 'page2')
@section('content')
    <div class="title">
        <button type="button" class="btn btn-success btn-title">Choose your favourite pet</button>
    </div>
    <div class="row">
        @foreach($pets as $pet)
            <div class="col-4">
                <div class="card @if(session()->get('pet_id') == $pet->id){{ "selected" }}@endif" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('image/'.$pet->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pet->name }}</h5>
                        <p class="card-text">{{ $pet->description }}</p>
                        <div style="text-align: center">
                            <a href="{{ route('selectPet' , $pet->id) }}" class="btn btn-primary">Select</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="title">
        <a href="{{ route('showFood') }}" class="btn btn-danger">Back</a>
    </div>
@endsection
