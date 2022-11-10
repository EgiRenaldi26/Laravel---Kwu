@extends('layout')

@section('title', 'Home Page')

@section('content')
    <h2>
    Selamat Datang, {{ $name }} .
    Kamu Login Sebagai {{ $role }}.
    </h2>
@endsection