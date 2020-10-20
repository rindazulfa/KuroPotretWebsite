<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = [
        'users_id', 'package_id', 'date', 'status', 'location', 'price_operational','pict',
        'description', 'total'
    ];
}
