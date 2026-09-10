<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = ['students_id', 'Fname', 'Lname', 'Address'];

    function department(){
        return $this->belongsTo(department::class);
    }

    function enrollments(){
        return $this->hasMany(enrollment::class);
    }

}
