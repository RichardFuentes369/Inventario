<?php

namespace inventarios;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name','lastname','email','birthdate','dni','sexo','category','phone','cellphone','colegio_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password', 'remember_token',
    ];

    /**
     * De companies a usuarios
     */
    public function companies(){
        return $this->belongsTo('inventarios\companies', 'companies_id');
    }

}
