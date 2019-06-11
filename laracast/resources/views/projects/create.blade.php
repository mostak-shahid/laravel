<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project</title>
</head>
<body>
	<h1>Create a New Project</h1>
	<form action="/project/store" method="POST">
		{{csrf_field()}}
		<div>
			<input type="text" name="title" placeholder="Project Title">
		</div>
		<div>
			<textarea name="description" placeholder="Project Description"></textarea>
		</div>
		<div>
			<button type="submit">Create Project</button>	
		</div>
	</form>
</body>
</html>