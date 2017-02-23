<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public $table = 'tasks';
    public $fillable = ['description','user_id','status','deadline'];
}
