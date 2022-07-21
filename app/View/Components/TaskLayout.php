<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TaskLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */

    public $teamId;


    public function __construct($teamid)
    {
        //dd($teamid);
        $this->teamId = $teamid;
     
    }
    public function render()
    {
      //  return view("layouts.task");

        return view("layouts.task",[
            'idteam'=> $this->teamId
        ]);
    }
}
