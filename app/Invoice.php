<?php

namespace inventarios;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = "invoices";

    protected $fillable = [
    	'id', 'business_name', 'address', 'country', 'department', 'county', 'neighborhood', 'phone1', 'phone2', 'cellphone1', 
    	'cellphone2', 'description', 'email', 'sector',
    ];
}
