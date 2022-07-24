<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statutes;
use App\Models\User;
use App\Models\Team;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;


class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $teams = new Team;
        $teams->name = $request->name;
        $teams->save();

        $user = User::find(Auth::id());
 
        $user->teams()->attach($teams->id);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {    
        $tasks = Task::where('team_id',$team->id)->where('status_id',1)->get();
        $tasksInProgress = Task::where('team_id',$team->id)->where('status_id',2)->get();
        $tasksPending = Task::where('team_id',$team->id)->where('status_id',3)->get();
        $tasksResolved = Task::where('team_id',$team->id)->where('status_id',4)->get();

        $statutes = Statutes::all();
       
        return view('tasks.index',[
            "tasks"=>$tasks,
            "tasksInProgress"=>$tasksInProgress,
            "tasksPending"=>$tasksPending,
            "tasksResolved"=>$tasksResolved,
            "teamId"=>$team->id,
           
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return back();
    }
}
