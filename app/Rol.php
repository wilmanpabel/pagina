<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    

    public function usuario(){
        //objeto
        //return $this->hasOne(User::class);
        //aray de objetos
        return $this->hasMany(User::class);
    }
}
