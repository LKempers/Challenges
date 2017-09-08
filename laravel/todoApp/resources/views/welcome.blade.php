<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

@foreach($tasks as $task)

<ul>

	<li>{{ $task->body }}</li>

	@endforeach

</ul>
</body>
</html>