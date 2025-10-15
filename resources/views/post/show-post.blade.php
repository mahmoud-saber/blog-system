@extends('layout')

@section('content')
    <table class="table table-light">
        <tbody>
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td>{{ $post->created_at }}</td>
                <td><a class="btn btn-outline-danger"href="{{ route('post.index') }}">Back</a></td>
                <td>
                    <form action="{{ route('post.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                </td>
                <td><a class="btn btn-outline-success"href="{{ route('post.edit', $post->id) }}">Edit</a></td>

            </tr>
        </tbody>
    </table>
@endsection
