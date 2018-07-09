<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//relacion de uno
    public function rol (){
            //pertenece a rol
        return $this->belongsTo(Rol::class);
    }

//relacion de muchos roles
    public function roles (){
            //pertenece a muchos roles rol
        return $this->belongsToMany(Rol::class,'rolesAsignados');
    }

    public function hasRoles(array $roles){

        foreach ($roles as $rol){
            foreach($this->roles as $usuarioRol){
                if($usuarioRol->nombre==$rol){
                    return true;
                }
            }
        }
    }

    public function isAdmin(){
        if($this->hasRoles(['admin'])){
         return  true;
        }
    }

}
