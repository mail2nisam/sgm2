<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * Table name
     * @var string
     */
    public $table = 'tasks';

    /**
     * Fillable fields
     * @var array
     */
    public $fillable = ['description','user_id','status','deadline','project_id'];

    /**
     * A task should have a project
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project()
    {
        return $this->belongsTo('App\Project','project_id');
    }

    public function createdBy()
    {
        return $this->belongsTo('App\User','user_id');
    }

    public function assignedTo()
    {
        return TaskManager::where('task_id',$this->id)->get();

    }
}
