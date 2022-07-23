<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    //
    private $todo;
    public function __construct(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function index(){
        $all_tasks = $this->todo->all();

        return view('todo.index')
            ->with('all_tasks',$all_tasks);
    }
    public function store(Request $request){
        $this->todo->task = $request->task;
        $this->todo->save();
        return redirect()->back();
    }

    public function edit($task_id){
        $task = $this->todo->findOrFail($task_id);

        return view('todo.edit')
            ->with('task',$task);
    }

    public function update(Request $request,$task_id){

        $task = $this->todo->findOrFail($task_id);

        $task->task= $request->task;

        $task->save();
        return redirect()
            ->route('index');

    }

    public function destroy($task_id){

        $task = $this->todo->findOrFail($task_id);

        $task->delete($task_id);
        return redirect()
            ->route('index');
    }


}
