<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Category;

class TaskController extends Controller
{
  public function index()
    {
    $tasks = Task::all();
    $categories = Category::all();
    return view('tasks.index', ['tasks' => $tasks, 'categories' => $categories]);
 }

 public function create()
   {
     return view('tasks.create');
}

public function save(Request $request)
  {
    $this->validate($request, [
        'titre' => 'required|max:255',
    ]);
    $task = new Task();
    $task->titre = $request->input('titre');
    $task->category_id = $request->input('category_id');
    $task->do = 0;
    $task->save();

    return redirect('/tasks');
}

public function show($id)
    {
      $task = Task::find($id);
      return view('tasks.show', ['task' => $task]);
    }

  public function edit($id)
      {
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
      }

public function update(Request $request, $id)
{
  $task = Task::find($id);
  $this->validate($request, [
      'titre' => 'required|max:255',
  ]);

  $task->titre = $request->input('titre');
  $task->save();
  return redirect('/tasks');
}
public function status($id)
{
  $task = Task::find($id);
  $task->do = 1;
  $task->save();
  return redirect('/tasks');
}

public function delete($id)
{
  $task = Task::find($id);
  $task->delete();
  return redirect('/tasks');
}

}
