<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    use HasFactory;

    //relacion 1 a muchos clients
    public function clients()
    {
        return $this->hasMany('App\Models\Clients');
    }
}
