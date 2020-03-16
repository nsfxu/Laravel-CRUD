<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['class_id', 'name', 'age'];
    public    $timestamps   = true;

    public function classrooms()
    {
        return $this->belongsTo(Classroom::class, 'class_id');
    }
}
