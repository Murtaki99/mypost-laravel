@extends('layouts.main')
@section('main')
<h1 class="text-success border-bottom">My Posts</h1>
@foreach ($posts as $post )
<article class="mb-4">
    <h2><a href="post/{{ $post["slug"] }}" style="text-decoration: none">{{ $post["title"] }}</a></h2>
    <h5>{{$post["author"] }}</h5>
    <p align="justify">{{ $post["body"] }}</p>
</article>
@endforeach
@endsection


