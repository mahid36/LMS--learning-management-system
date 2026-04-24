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
    public function rel_to_language(){
        return $this->belongsTo(Language::class,'language_id');
    }
    public function rel_to_category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
