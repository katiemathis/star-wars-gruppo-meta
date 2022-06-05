<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $casts = [ 'films' => 'array'];
    
    protected $fillable = [
        'name', 'population', 'diameter', 'terrain', 'films', 'slug'
    ];
}
