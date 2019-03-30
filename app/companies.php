<?php

namespace inventarios;

use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    protected $table = "companies";

    protected $fillable = [
    	'id', 'business_name', 'address', 'country', 'department', 'county', 'phone1', 'phone2', 'cellphone1',
    	'cellphone2', 'description', 'email', 'sector',
    ];

}