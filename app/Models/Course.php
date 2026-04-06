<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function rel_to_level(){
        return $this->belongsTo(Level::class,'level_id');
    }
    public function rel_to_instructor(){
        return $this->belongsTo(Instructor::class,'instructor_id');
    }

}
