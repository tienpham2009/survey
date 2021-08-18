@extends('index')
@section('title' , 'page3')
@section('content')
    <div class="title">
        <button type="button" class="btn btn-success btn-title">Choose your favourite pet</button>
    </div>
    <table class="table">
        @foreach($table as $i => $row)
            <tr>
                @foreach($row as $j => $cell)
                    <td
                    class="@if( $j == $pet_id && $i == $food_id)
                        {{ "result" }}
                        @endif" >{{ $cell }}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
    <div class="title">
        <a href="{{ route('showPet') }}" class="btn btn-danger">Back</a>
    </div>
@endsection
