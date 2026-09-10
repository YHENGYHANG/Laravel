<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class enrollment extends Model
{
    protected $fillable = ['students_id', 'Fname', 'Lname'];

    function student(){
        return $this->belongsTo(student::class);
    }

}
