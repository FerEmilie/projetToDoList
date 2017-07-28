<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>todolist</title>
  </head>
  <body>
    <h1>Vous regardez: {{ $task->titre }}</h1>
    <h2>Options</h2>
    <a href="{{ $task->id }}/edit">Update</a>
    <a href="../delete/{{ $task->id }}">Delete</a>
  </body>
</html>
