<?php

namespace inventarios;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = [
    	'id', 'category_name', 'description', 'companies_id',
    ];
}
