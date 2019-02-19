@extends('layouts.app')



@section('content')

            <div class="card">
                <div class="card-header">Update post: {{$post->title}}</div>

                <div class="card-body">
<!--                    <form action="/post/store" method="post">-->
                    <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}        
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
                        </div>
                        <div class="form-group">
                            <label for="feature">Featured Image</label>
                            <input name="feature" type="file" class="form-control-file" id="feature">
                        </div>
                        <div class="form-group">
                            <label for="category">Select a Category</label>
                            <select class="form-control" name="category_id" id="category">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach;
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="3">{{$post->title}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Post</button>
                    </form>
                    @if(count($errors)>0)
                        <ul class="list-group py-4">
                            @foreach($errors->all() as $error)
                            <li class="list-group-item text-danger">{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>

@endsection