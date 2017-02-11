<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [

    	'pavadinimas',
    	'metai',
    	'zanras',
    	'autorius',
    	'nuotrauka',
    	'apibudinimas'

    ];
}