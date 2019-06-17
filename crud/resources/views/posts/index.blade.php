@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">All Post</div>

                    <div class="card-body">
                        @if($posts)
                        <ul class="list-unstyled">
                            @foreach($posts as $post)
                                <li>{{$post->title}}</li>
                            @endforeach
                                <li><a href="{{route('posts.create')}}">Add New</a></li>
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection