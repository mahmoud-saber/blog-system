@extends('layout')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('post.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $post->title }}" required>
        <div class="form-group">
            <label for="name">Content</label>
            <input type="text" class="form-control" value="{{ $post->content }}" id="content" aria-describedby="" name="content"
                placeholder="Enter Content">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>

   
@endsection