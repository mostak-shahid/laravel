@extends('layouts.app')



@section('content')

            <div class="card">
                <div class="card-header">Create a new category</div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Edting</th>
                                <th>Trash</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td><img src="{{$post->feature}}" alt="{{$post->title}}" height="50"></td>
                                <td>{{$post->title}}</td>
                                <td><a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-info btn-sm">Edit</a></td>
                                <td><a href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-danger btn-sm">Trash</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection