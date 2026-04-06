<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    public function rel_to_category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
