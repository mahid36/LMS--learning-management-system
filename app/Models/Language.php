<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function courses(){
    return $this->hasMany(Course::class,'course_id');
}
}
