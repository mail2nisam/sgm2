<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $table = 'projects';
    protected $fillable = ['name','description','owner_user','status','deadline','deleted_at'];
}
