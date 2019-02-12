@extends('layout')

@section('content')
<!-- <form action="/todo/save" method="post"> -->
<form action="{{route('todo.save', ['id' =>  $todo->id])}}" method="post">
	{{csrf_field()}}
	<input name="todo" type="text" class="form-control" value="{{$todo -> todo}}">	
</form>

@stop