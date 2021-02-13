<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $guarded=['id'];

    use HasFactory;

    //Relacion 1 a muchos
    
    public function courses(){

        return $this->hasMany('App\Models\Course');
    }
}
