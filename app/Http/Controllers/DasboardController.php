<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DasboardController extends Controller
{
    public function index()
    {
       
     
 
$userId = Auth::id();

      // dd($userId);
        $teamUser = DB::table('team_user')
        ->join('teams','team_id','=','teams.id')
        ->where('user_id',$userId)
        ->get();
   
//dd($teamUser);


        return view("dashboard",[
            'teams'=> $teamUser
        ]);
    }
}
