@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Post create</h1>
        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control @error ('title') is-invalid @enderror" placeholder="title" name="title" maxlength="200" minlength="5" required>
                @error('title')
                    <div class=" invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <textarea class="form-control @error ('body') is-invalid @enderror" placeholder="body" name="body" cols="30" rows="10"></textarea>
                @error('body')
                    <div class=" invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="url" class="form-control @error ('image') is-invalid @enderror" placeholder="image" name="image">
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