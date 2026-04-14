<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function rel_to_subcategory(){
        return $this->hasMany(SubCategory::class,'category_id');
    }
    public function rel_to_course(){
    return $this->hasMany(Course::class);
}
}
