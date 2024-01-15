@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Post Index</h1>
        @foreach ($posts as $post)
            <a href="{{ route('admin.posts.show', $post->slug) }}">{{ $post->title }}</a><br>
        @endforeach
    </section>
    
@endsection