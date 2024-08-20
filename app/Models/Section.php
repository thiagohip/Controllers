<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    public function tasks(){
        return $this->belongsTo('App\Models\Task');
    }

    
}
