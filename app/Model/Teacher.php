<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['class_id', 'discipline_id','name', 'age'];
    public    $timestamps   = true;

    public function classrooms()
    {
        return $this->belongsTo(Classroom::class, 'class_id');
    }

    public function disciplines()
    {
        return $this->belongsTo(Discipline::class, 'discipline_id');
    }
}
