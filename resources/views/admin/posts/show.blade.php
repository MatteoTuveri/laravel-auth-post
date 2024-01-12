
@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Post show</h1>
        <img src="{{ $post->image }}" alt="">
        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('admin.posts.destroy',$post->id) }}" method="POST">
        @csrf
        @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </section>
    
@endsection