<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project</title>
</head>
<body>
	<h1>Projects Page</h1>
	<ul>
		@foreach($projects as $project)
			<li>{{$project->title}}</li>
		@endforeach
	</ul>
</body>
</html>