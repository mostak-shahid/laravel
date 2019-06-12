@extends('layout')
@section('title', 'New Project')
@section('content')
	<h1>Create a New Project</h1>
	<form action="/projects" method="POST">
		{{csrf_field()}}
		<div>
			<input class="{{$errors->has('title')?'is-danger':''}}" type="text" name="title" placeholder="Project Title" required value="{{old('title')}}">
		</div>
		<div>
			<textarea class="{{$errors->has('description')?'is-danger':''}}" name="description" placeholder="Project Description">{{old('description')}}</textarea>
		</div>
		<div>
			<button type="submit">Create Project</button>	
		</div>
	</form>
	@include('errors')
@endsection