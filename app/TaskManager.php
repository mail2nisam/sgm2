<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskManager extends Model
{
    /**
     * Database table name
     * @var string
     */
    protected $table = 'task_manager';
    /**
     * Fillable fields
     * @var array
     */
    protected $fillable = ['task_id','assigned_to','current_assignee','reason'];

    public function assignee()
    {
        return $this->belongsTo('App\User','assigned_to');
    }

//    public function task()
//    {
//        return $this->belongsTo('App\Task','task_id');
//    }
}
