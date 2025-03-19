@extends('layout')

@section('content')
    <h1>All Posts</h1>
   <a  class="btn btn-primary" href="{{ route('post.create') }}">Create New Post</a> 
   <br>
       
  <table class="table">

 
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">created_at</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{ $post->content }}</td>
      <td>{{ $post->created_at }}</td>
      <td><a class="btn btn-outline-success" href="{{ route('post.edit', $post) }}">Edit</a></td>
      <td><a class="btn btn-outline-info" href="{{ route('post.show', $post) }}">Show post</a></td>
      <td><form action="{{ route('post.destroy', $post) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button></td>
    </form>
    @endforeach
    </tr>
</table>
@endsection