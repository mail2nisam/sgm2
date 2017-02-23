<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with('owner')->get();
        if($projects){
            return $projects;
        }else{
            return response()->json(['response'=>'no items found'],404);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'deadline' => 'required|date',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), 200);
        }
        try{
            $project = new Project();
            $project->name = Input::get('name');
            $project->user_id = Auth::id();
            $project->description = Input::get('description');
            $project->deadline = date('Y-m-d',strtotime(Input::get('deadline')));
            $project->status = 'active';
            $project->save();
            return $project;
        }catch(\Illuminate\Database\QueryException $e){
            return response()->json($e->errorInfo,500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::with('owner')->find($id);
        if($project){
            return $project;
        }else{
            return response()->json(['response'=>'item not found'],404);
        }
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
    public function destroy($id)
    {
        $project = Project::find($id);
        if($project){
            return $project->delete();
        }else{
            return response()->json(['response'=>'item not found'],404);
        }
    }
}
