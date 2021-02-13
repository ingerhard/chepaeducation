<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $guarded=['id'];

    use HasFactory;

  //relacion 1 a 1

    public function description(){

        return $this->hasOne('App\Models\Description');
    }

    // relacion 1 a muchos inversa

    public function section(){

        return $this->belongsTo('App\Models\Section');
    }

    public function platform(){

        return $this->belongsTo('App\Models\Platform');
    }

    // relacion muchos a muchos

    public function users(){

        return $this->belongsToMany('App\Models\User');
    }

    //Relacion uno a uno polimorfica

    public function resource(){

        return $this->morphOne('App\Models\Resource', 'resourceable');
    }

    //Relacion uno a muchos polimorfica

    public function comments(){

        return $this->morphMany('App\Models\Comment', 'commenteable');
    }

    public function reactions(){

        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }

}
