<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    /**
     * For soft delete
     */
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    /**
     * @var string
     */
    public $table = 'projects';
    /**
     * Fillable fields for MassAssignment
     * @var array
     */
    protected $fillable = ['name','description','user_id','status','deadline'];

    /**
     * A Project has many tasks associated to it
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    public function owner()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
