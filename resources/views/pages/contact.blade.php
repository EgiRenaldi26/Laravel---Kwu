@extends('layout')

@section('title', 'Home Page')

@section('content')
    <h2>contact.</h2>
    <div>
        @for($i =1; $1 <= 10; $i++)
                Nomor {{ $i }} <br>
        @endfor
        </br>
        @foreach($person as $data)
                Kontak : {{ $data }}
        @endforeach
    </div>
@endsection