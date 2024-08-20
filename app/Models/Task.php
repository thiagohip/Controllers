<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    public function projects(){
        return $this->belongsTo('App\Models\Project');
    }

    public function sections(){
        return $this->hasMany('App\Models\Section', 'task_id');
    }
}
