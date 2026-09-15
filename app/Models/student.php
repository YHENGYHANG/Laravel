<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class student extends Model
{
    use HasFactory;

    protected $table = 'student';

    protected $fillable = ['name', 'email', 'course', 'address'];

    // function department(){
    //     return $this->belongsTo(department::class);
    // }

    // function enrollments(){
    //     return $this->hasMany(enrollment::class);
    // }

}
