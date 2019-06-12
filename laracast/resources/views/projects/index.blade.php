@extends('layout')
@section('title', 'Projects')
@section('content')
	<h1>Projects Page</h1>
	<ul>
		@foreach($projects as $project)
			<li><a href="/projects/{{$project->id}}">{{$project->title}}</a></li>
		@endforeach
			<li><a href="/projects/create">Create a New Project</a></li>
	</ul>
@endsection