@extends('layout')

@section('content')

<div class="container">
    <h1>Create New Post</h1>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="" name="title"
                placeholder="Enter Title">
        </div>


        <div class="form-group">
            <label for="name">Content</label>
            <input type="text" class="form-control" id="content" aria-describedby="" name="content"
                placeholder="Enter Content">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection