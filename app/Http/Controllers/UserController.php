<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{

    /**
     * All tasks under a user
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function userTasks($id)
    {
        return User::with('projects','tasks')->where('id',$id)->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::with('projects','tasks')->where('id',$id)->get();
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
            'email' => 'required|email',
            'name' => 'required',
            'dob' => 'required|date',
            'avatar' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json($validator->messages(), 200);
        }
        try{
            $user = new User();
            $user->name = Input::get('name');
            $user->email = Input::get('email');
            $user->avatar = Input::get('avatar');
            $user->password = Hash::make(Input::get('email'));
            $user->remember_token = Str::random(16);
            $user->dob = date('Y-m-d',strtotime(Input::get('dob')));

            $user->save();
            return $user;
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
        $user = User::find($id);
        if($user){
            return $user;
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
        //
    }
}
