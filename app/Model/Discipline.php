<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    protected $fillable = [
        'sigla',
        'name'       
    ];

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }
}
