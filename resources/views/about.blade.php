@extends('layouts.main')
@section('container')
    <h1>About Page</h1>
    <h3>{{ $name }}</h3>
    <h4>{{ $email }}</h4>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail">
@endsection