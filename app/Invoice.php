<?php

namespace inventarios;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = "invoices";

    protected $fillable = [
    	'id', 'fecha', 'pdf', 'nro_fact',
    ];
}
