<?php

namespace inventarios;

use Illuminate\Database\Eloquent\Model;

class providers extends Model
{
    protected $table = "providers";

    protected $fillable = [
    	'id','NIT','business_name','country','department','county','neighborhood','address','phone1','phone2','cellphone1','cellphone2','description',
    ];
}
