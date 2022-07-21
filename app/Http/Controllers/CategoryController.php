<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Task;
use App\Models\Team;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Team $team)
    {
       // $categories = Category::with('teams')->get();
     //   dd($categories);
  
     $categories = Team::find($team->id)->categories()->orderBy('name')->get();
    
        return view('categories.index',[
            'categories'=> $categories,
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

        
        return view('categories.create',[
            "teamId"=>$team->id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Team $team,Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:100'
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        $teamcateg = Team::find($team->id);
        $teamcateg->categories()->attach($category->id);

        return back()->with('La catégories à été ajouté');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team,Category $category)
    {
        
        return view('categories.show',[
            'category'=> $category,
            "teamId"=>$team->id
        ]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team,Category $category)
    {
        return view('categories.edit',[
            'category'=> $category,
            "teamId"=>$team->id
        ]);
   
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
        $data = $request->validate([
            'name' => 'required|max:100'
        ]);
        $category = new Category;
      
        $category->name = $request->name;
        
        $category->save();

        return redirect()->route('task.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back();
    }
}
