<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    protected $fillable = ([
        'jenis',
        'distributor',
        'harga',
    ]);
}
