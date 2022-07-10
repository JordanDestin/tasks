<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Task;
use App\Models\Category;
use App\Models\Statutes;
use App\Models\Checklist;
use App\Models\Comment;
use App\Models\Team;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Team $team, Task $task)
    {
        
     //   $tasks = Task::all();
       // $tasks = Task::with('category')->latest()->get();

        $tasks = Task::where('team_id',$team->id)->get();
        dd($tasks);
        return view('tasks.index',[
            "tasks"=>$tasks,
            "teamId"=>$team->id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Team $team)
    {
       
        $categories = Category::all();
        
        return view('tasks.create',[
            "categories" => $categories,
            "teamId" => $team->id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $team)
    {

       
        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);

       
        $task = new Task;
      
        $task->title = $request->title;
        $task->detail = $request->detail;
        $task->team_id = $team;
        $task->status_id = 1;
        $task->category_id = $request->category;
        $task->save();

        return redirect()->route('team.task.index',$team);   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team, Task $task)
    {    
        $checklists = Checklist::where('task_id',$task->id)->get();
        $comments = Comment::where('task_id',$task->id)->get();
        $statutes = Statutes::all();
 
        return view('tasks.show',[
            'task'=>$task,
            'teamId'=> $team->id,
            'checklists' => $checklists,
            'comments' => $comments,
            "statutes" =>$statutes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team,Task $task)
    {
        $categories = Category::all();
        $statutes = Statutes::all();
        return view('tasks.edit',[
            'task'=>$task,
            'teamId'=> $team->id,
            "categories" => $categories,
            "statutes" =>$statutes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Team $team, Task $task)
    {


        $data = $request->validate([
            'title' => 'required|max:100',
            'detail' => 'required|max:500',
        ]);
        $task->title = $request->title;
        $task->detail = $request->detail;
        $task->status_id = $request->status;
        $task->category_id = $request->category;
     
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
