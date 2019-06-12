@extends('layout')
@section('title')
{{$project->title}}
@endsection
@section('content')
	<h1>{{$project->title}}</h1>
	<div class="description">{{$project->description}}</div>
	<div class="edit"><a href="/projects/{{$project->id}}/edit">Edit</a></div>
	@if($project->tasks->count())
		<ul>
		@foreach($project->tasks as $task)
			<li>
				<!-- PATCH /projects/id/tasks/id -->
				<!-- PATCH /tasks/id -->
				<form action="/tasks/{{$task->id}}" method="POST">
					@method('PATCH')
					@csrf
					<label>
						<input type="checkbox" name="completed" onChange="this.form.submit()" {{$task->completed?'checked':''}}>
						{{$task->description}}					
					</label>
				</form>
			</li>
		@endforeach
		</ul>
	@endif
	<!-- add a new task form -->
	<form action="/projects/{{$project->id}}/tasks" method="POST">
		@csrf
		<div>			
			<input type="text" name="description" placeholder="New task">
		</div>
		<div>
			<button type="submit">Add Task</button>
		</div>
	</form>
	@include('errors')
@endsection