<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function clients(){
        return $this->belongsTo('App\Models\Client', 'clinet_id');
    }

    public function UserProject(){
        return $this->hasMany('App\Models\UserProject', 'project_id');
    }
}
