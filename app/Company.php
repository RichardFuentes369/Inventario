<?php

namespace inventarios;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = "companies";

    protected $fillable = [
    	'id', 'nit', 'business_name', 'address', 'country', 'department', 'county', 'neighborhood', 'phone1', 'phone2', 'cellphone1', 
    	'cellphone2', 'description', 'email', 'sector',
    ];

}
