@extends('layouts.main')

@section('content')
<h2>{{ $post['title'] }}</h2>
<h5>{{ $post['author'] }}</h5>
<p>{{ $post['body'] }}</p>
<a href="/blog">back to post</a>
@endsection