@extends('layouts.main')

@section('content')
    <h1 id="judul">Ini adalah halaman About</h1>
    <p>{{ $name }}</p>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="" width="200" class="img-thumbnail rounded-circle">
    <script src="js/script.js"></script>
@endsection

