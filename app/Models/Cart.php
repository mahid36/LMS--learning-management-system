<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function rel_to_course(){
        return $this->belongsTo(Course::class,'course_id');
    }
    public function rel_to_student(){
        return $this->belongsTo(Student::class,'student_id');
    }
}
