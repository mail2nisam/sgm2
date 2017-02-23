<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use App\TaskManager;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class TaskController extends Controller
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
        $validator = Validator::make($request->all(), [
            'description' => 'required',
            'deadline' => 'required|date',
            'project_id' => 'required|integer',
            'assigned_to'=>'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages(), 200);
        }


        $currentUserId = Auth::id();
        $project = Project::find(Input::get('project_id'));

        if(!$project){
            return response()->json(['response'=>'project not exist'], 404);
        }else{
            if($project->user_id!=$currentUserId){
                return response()->json(['response'=>'Only project owner can create task for a project'], 200);
            }
        }


        $assignedTo = User::find(Input::get('assigned_to'));
        if(!$assignedTo){
            return response()->json(['response'=>'user id not exist'], 404);
        }

        try{
            $task = new Task();
            $task->user_id = Auth::id();
            $task->description = Input::get('description');
            $task->deadline = date('Y-m-d',strtotime(Input::get('deadline')));
            $task->status = 'active';
            $task->project_id = Input::get('project_id');
            $task->save();

            $taskManager = new TaskManager();
            $taskManager->task_id = $task->id;
            $taskManager->assigned_to = Input::get('assigned_to');
            $taskManager->current_assignee = 1;
            $taskManager->reason = Input::get('description');
            $taskManager->save();

            return Task::with('assignedTo')->find($task->id);
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
//     return    TaskManager::whereHas('task', function($q) {
//            $q->where('current_assignee', '1');
//        })->get();
        return Task::with('assignedTo')->find($id);
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
        //
    }
}
