<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reports extends Model
{
    use HasFactory;

    //relacion 1 a muchos hardware
    public function hardware()
    {
        return $this->hasMany('App\Models\Hardware');
    }
}
