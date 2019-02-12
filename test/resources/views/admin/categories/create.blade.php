@extends('layouts.app')



@section('content')

            <div class="card">
                <div class="card-header">Create a new category</div>

                <div class="card-body">
<!--                    <form action="/post/store" method="post">-->
                    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}        
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Category</button>
                    </form>
                    @if(count($errors)>0)
                        <ul class="list-group py-4">
                            @foreach($errors->all() as $error)
                            <li class="list-group-item test-danger">{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>

@endsection