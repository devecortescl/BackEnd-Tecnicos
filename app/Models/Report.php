<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body' ,
        'status' ,
        'hardware_id' ,

    ];

    //relacion 1 a muchos hardware
    public function hardware()
    {
        return $this->hasMany('App\Models\Hardware');
    }
}
