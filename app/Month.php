<?php

namespace inventarios;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    protected $table = "months";

    protected $fillable = [
    	'id', 'month', 'year', 'compani_id',
    ];
}
