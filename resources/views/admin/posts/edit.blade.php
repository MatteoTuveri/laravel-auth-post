@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Post edit {{$post->title}}</h1>
        <form action="{{ route('admin.posts.update', $post->slug) }}" enctype="multipart/form-data"  method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <input type="text" class="form-control @error ('title') is-invalid @enderror" placeholder="title" name="title" maxlength="200" minlength="5" required value="{{ old('', $post->title) }}">
                @error('title')
                    <div class=" invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <textarea class="form-control @error ('body') is-invalid @enderror" placeholder="body" name="body" cols="30" rows="10">{{ old('', $post->body) }}</textarea>
                @error('body')
                    <div class=" invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="file" class="form-control @error ('image') is-invalid @enderror" placeholder="image" name="image" value="{{ old('', $post->image) }}">
                @error('image')
                    <div class=" invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit">submit</button>
            <button type="reset">reset</button>
            <a href="{{ route('admin.posts.index') }}">Back to Home</a>
            
        </form>
    </section>
    
@endsection