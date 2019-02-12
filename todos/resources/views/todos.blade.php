@extends('layout')

@section('content')
<form action="/create/todo" method="post">
	{{csrf_field()}}
	<input name="todo" type="text" class="form-control" placeholder="Create a new todo">	
</form>
<ul class="list-unstyled">
@foreach($todos as $todo)
<li>
	{{$todo->todo}} 
	<a href="{{route('todo.delete', ['id' =>  $todo->id])}}" class="btn btn-danger btn-sm">x</a>
	<a href="{{route('todo.update', ['id' =>  $todo->id])}}" class="btn btn-info btn-sm">Update</a>
	@if(!$todo->completed)
	<a href="{{route('todo.completed', ['id' =>  $todo->id])}}" class="btn btn-success btn-sm">Mark as completed</a>
	@else
	<span class="text-success">Completed</span>
	@endif
</li>
@endforeach
</ul>
@stop