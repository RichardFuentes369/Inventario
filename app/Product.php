<?php

namespace inventarios;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    protected $fillable = [
    	'id', 'name', 'lote', 'manufacturing_date', 'expiration_date', 'quantity', 'category_id', 'provider_id'
    ];

    public function provider(){
    	return $this->belongsTo(Provider::class,'provider_id');
    }
    
}
