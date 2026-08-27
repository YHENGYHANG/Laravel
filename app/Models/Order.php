<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['merchandise_id', 'quatity', 'total_price'];

    function merchandise(){
    return $this->belongsTo(Merchandise::class);

    }

}
