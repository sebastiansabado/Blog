<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>Hello Ass fuck</h1>
    <ul>
        @foreach ($tasks as $task)

            <li>
            	<a href="/tasks/{{ $task->cid }}"> 
            	 	{{$task->body}}
            	</a>
           </li>
            
        @endforeach
    </ul>
</body>
</html>
