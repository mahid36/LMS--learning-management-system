<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;

class OrderProduct extends Model
{
    public Function rel_to_course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
