<?php

namespace inventarios;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customers";

    protected $fillable = [
    	'id', 'name', 'lastname', 'birthdate', 'document_type', 'dni', 'sexo', 'email', 'department', 'county', 
    	'neighborhood', 'address', 'phone', 'cellphone','companies_id',
    ];
}
