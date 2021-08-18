@extends('index')
@section('title' , 'page0')
@section('content')
    <form method="post" action="{{ route('setUser') }}">
        @csrf
        <div class="info">
            <div class="title">
                <button type="button" class="btn btn-success btn-title">Please fill in your personal information</button>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" placeholder="Password" name="email">
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Start Survey</button>
        </div>
    </form>
@endsection
