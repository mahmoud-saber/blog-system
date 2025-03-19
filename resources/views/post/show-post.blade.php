@extends('layout')

@section('content')
    <table class="table table-light">
        <tbody>
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->created_at }}</td>
                <td><a  class="btn btn-outline-danger"href="{{ route('post.index') }}">Back</a></td>
                <td><a class="btn btn-danger" href="{{ route('post.destroy', $post->id) }}">Delete</a></td>
              <td><a  class="btn btn-outline-success"href="{{ route('post.edit', $post->id) }}">Edit</a></td>

            </tr>
        </tbody>
    </table>
    
    
@endsection