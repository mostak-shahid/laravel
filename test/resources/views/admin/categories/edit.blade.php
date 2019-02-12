@extends('layouts.app')



@section('content')

            <div class="card">
                <div class="card-header">Update category: {{$category->name}}</div>

                <div class="card-body">
<!--                    <form action="/post/store" method="post">-->
                    <form action="{{ route('category.update', ['id' => $category->id]) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}        
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update Category</button>
                    </form>
                    @include('admin.includes.errors')
                </div>
            </div>

@endsection