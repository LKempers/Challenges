<!DOCTYPE html>
<html>
<head>
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="../../../css/app.css">
</head>
<body>


<div class="todoApp">


<div class="todoList"><h2>To do:</h2>

<container class="todoColumn">
@foreach($tasks as $task)
@if(!$task->completed)
<div class="colorBox-todo">
<h3>{{$task->title}}</h3>
<p>{{$task->body}}</p>

<form action="/task/{{$task->id}}" method="post">
	{{ csrf_field() }}
	{{ method_field("PATCH") }}
	<input type="submit" name="change" value="Done">
</form>
<form action="/tasks/{{$task->id}}" method="post">
	{{ csrf_field() }}
	{{ method_field("PATCH") }}
	<input type="submit" name="delete" value="Delete">
</form>

</div>
@endif
@endforeach
</container>


</div>


	<div class="finishedList"><h2>Finished:</h2>

<container class="finishedColumn">
@foreach($tasks as $task)
@if($task->completed)
<div class="colorBox-finished">

	<h3>{{$task->title}}</h3>
	<p>{{$task->body}}</p>
		<form action="/task/{{$task->id}}" method="post">
			{{ csrf_field() }}
			{{ method_field("PATCH") }}
			<input type="submit" name="change" value="To do">
		</form>

<form action="/tasks/{{$task->id}}" method="post">
	{{ csrf_field() }}
	{{ method_field("PATCH") }}
	<input type="submit" name="delete" value="Delete">
</form>

</div>
@endif
@endforeach
</container>

	</div>

	<div class="makeList">
		<h2>Make a task:</h2>
		<form class="add-task" action="/tasks/" method="post">
		{{ csrf_field() }}
	<p>Add a task:</p>
	<input class="addTask" type="text" name="title" value=""><br>
	<p>Add a comment:</p>
	<input class="addComment" type="text" name="comment" value=""><br>

	<input type="submit" value="Add">

	</div>

</div>


<!--

	<ul>
	@foreach($tasks as $task)
		<li>
			<a href="/tasks/{{ $task->id }}">
			{{ $task->body }}
			</a>
		</li>
	@endforeach
</ul> -->

</body>
</html>