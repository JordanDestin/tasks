<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DasboardController extends Controller
{
    public function index()
    {
      // dd($userId);
        $teamUser = DB::table('team_user')
        ->join('teams','team_id','=','teams.id')
        ->where('user_id',Auth::id())
        ->get();
   
        return view("dashboard",[
            'teams'=> $teamUser
        ]);
    }
}
