<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Task;
use App\Models\Category;
use App\Models\Checklist;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
      //  $tasks = Task::all();
        $tasks = Task::with('category')->latest()->get();
       
        return view('tasks.index',[
            "tasks"=>$tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        
        return view('tasks.create',[
            "categories" => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Team $team)
    {
        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);

        dd($team->id);
        $task = new Task;
      
        $task->title = $request->title;
        $task->detail = $request->detail;
        $task->team_id = $team->id;
        $task->status_id = 1;
        $task->category_id = $request->category;
        $task->save();

        return redirect()->route('tasks.index');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
       // 
        $checklists = Checklist::where('task_id',$task->id)->get();
 
        

        return view('tasks.show', compact('task','checklists'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //dd($task);
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
  

        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);
        $task->title = $request->title;
        $task->detail = $request->detail;
        $task->state = $request->has('state');
        $task->save();
        return back()->with('message', "La tâche a bien été modifiée !");  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        $task->delete();

        return back();
    }
}
