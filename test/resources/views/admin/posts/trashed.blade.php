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
                                <th>Restore</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td><img src="{{$post->feature}}" alt="{{$post->title}}" height="50"></td>
                                <td>{{$post->title}}</td>
                                <td><a href="{{ route('post.restore', ['id' => $post->id]) }}" class="btn btn-info btn-sm">Restore</a></td>
                                <td><a href="{{ route('post.kill', ['id' => $post->id]) }}" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection