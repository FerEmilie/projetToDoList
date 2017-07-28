@extends('layouts.app')

@section('content')
  <div class="todolist">
    <div class="creer">
      <form action="/tasks/save" method="post">
         {{ csrf_field() }}
         <h2><i class="fa fa-plus-circle" aria-hidden="true"></i> New TO-DO</h1>
        <div class="titre">
          <label for="titre"></label></br>
          <input type="text" placeholder="Nouvelle tâche" name="titre" id="titre"></br>
          <label for="cat"></label></br>
          <select name="category_id" id="cat"></br>
             @foreach($categories as $category)
                 <option value="{{ $category->id }}">{{ $category->name }}</option>
             @endforeach
          </select>
          <button name="button">Ok</button>
        </div>

      </form>
    </div>
    <div class="do">
      <h2><i class="fa fa-spinner" aria-hidden="true"></i> Do</h2>
      @foreach($tasks as $task)
        @if (!$task->do)
           @if ($task->category->name == "Urgent +")
              <li><div id="element1"><i style="color:#e6e600; font-size:170%;"class="fa fa-thermometer-empty" aria-hidden="true"></i>
 {{ $task->titre }}</div><div id="element2"><a href="tasks/status/{{ $task->id }}"><i class="fa fa-check-circle" aria-hidden="true"></i></a></div><div id="element3"><a href="tasks/show/{{ $task->id }}/edit"><i class="fa fa-wrench" aria-hidden="true"></i></a></div>
              <div id="element4"><a href="tasks/delete/{{ $task->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div></li>

           @elseif($task->category->name == "Urgent ++")
                 <li><div id="element1"><i style="color:#ff8533; font-size:170%;" class="fa fa-thermometer-half" aria-hidden="true"></i> {{ $task->titre }}</div><div id="element2"><a href="tasks/status/{{ $task->id }}"><i class="fa fa-check-circle" aria-hidden="true"></i></a></div><div id="element3"><a href="tasks/show/{{ $task->id }}/edit"><i class="fa fa-wrench" aria-hidden="true"></i></a></div>
                 <div id="element4"><a href="tasks/delete/{{ $task->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div></li>

           @else
                 <li><div id="element1"><i style="color:#ff0000; font-size:170%;" class="fa fa-thermometer-full" aria-hidden="true"></i> {{ $task->titre }}</div><div id="element2"><a href="tasks/status/{{ $task->id }}"><i class="fa fa-check-circle" aria-hidden="true"></i></a></div><div id="element3"><a href="tasks/show/{{ $task->id }}/edit"><i class="fa fa-wrench" aria-hidden="true"></i></a></div>
                 <div id="element4"><a href="tasks/delete/{{ $task->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div></li>

        @endif
        @endif

    @endforeach
        </div>

        <div class="done">
          <h2><i class="fa fa-thumbs-up" aria-hidden="true"></i> Done</h2>
      @foreach($tasks as $task)

          @if (!!$task->do)
          <li><div style="text-decoration:line-through; text-decoration-color:red;" id="element1">{{ $task->titre }}</div><div id="element3"><a href="tasks/show/{{ $task->id }}/edit"><i class="fa fa-wrench" aria-hidden="true"></i></a></div>
          <div id="element4"><a href="tasks/delete/{{ $task->id }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div></li>
          @endif

       @endforeach
        </div>
  </div>
  @endsection
