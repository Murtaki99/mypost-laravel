@extends('layouts.main')
@section('main')
<article class="mb-4">
    <h2>{{ $post["title"] }}</h2>
    <h5>{{$post["author"] }}</h5>
    <p align="justify">{{ $post["body"] }}</p>
</article>
<a href="/posts" class="btn btn-primary">Back</a>
@endsection
