@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Post create</h1>
        <form action="{{ route('admin.posts.store') }}" enctype="multipart/form-data" method="POST">
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
                <img src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fcdn2.vectorstock.com%2Fi%2F1000x1000%2F48%2F06%2Fimage-preview-icon-picture-placeholder-vector-31284806.jpg&tbnid=d6cWymE93g_fXM&vet=12ahUKEwiMj4mKpN-DAxUlh_0HHcHQCncQMygAegQIARBY..i&imgrefurl=https%3A%2F%2Fwww.vectorstock.com%2Froyalty-free-vector%2Fimage-preview-icon-picture-placeholder-vector-31284806&docid=givRetywyelHCM&w=1000&h=1080&q=preview%20img&ved=2ahUKEwiMj4mKpN-DAxUlh_0HHcHQCncQMygAegQIARBY" alt="" id="uploadPreview">
                <input type="file" id="image" class="form-control @error ('image') is-invalid @enderror" placeholder="image" name="image">
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