<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];
    protected $table = 'courses';

    public function faculty(){
        return $this->hasMany(Faculty::class);
    }
}
