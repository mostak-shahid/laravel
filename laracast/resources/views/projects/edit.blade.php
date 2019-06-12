@extends('layout')
@section('title', 'Edit Project')
@section('content')
	<h1>Edit "{{$project->title}}"</h1>
	<form action="/projects/{{$project->id}}" method="POST">
		{{method_field('PATCH')}}
		{{csrf_field()}}
		<div>
			<input type="text" name="title" placeholder="Project Title" value="{{$project->title}}" required>
		</div>
		<div>
			<textarea name="description" placeholder="Project Description" required>{{$project->description}}</textarea>
		</div>
		<div>
			<button type="submit">Update Project</button>	
		</div>
	</form>
	<form action="/projects/{{$project->id}}" method="POST">	
		@method('DELETE')
		@csrf
		<button type="submit">Delete Project</button>
	</form>
@endsection