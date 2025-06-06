@extends('layouts.main')

@section('content')
    <h1 id="judul">Ini adalah halaman About</h1>
    <p>{{ $name }}</p>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="">
    <script src="js/script.js"></script>
@endsection

