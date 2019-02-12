@extends('layouts.app')



@section('content')

            <div class="card">
                <div class="card-header">Create a new category</div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Category name</th>
                                <th>Edting</th>
                                <th>Deleting</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{$category->name}}</td>
                                <td><a href="{{ route('category.edit', ['id' => $category->id])}}" class="btn btn-info btn-sm">Edit</a></td>
                                <td><a href="{{ route('category.destroy', ['id' => $category->id])}}" class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

@endsection