<?php

namespace Soga\Generator\Models;

use Illuminate\Database\Eloquent\Model;

class Generator extends Model
{
    protected $table = 'generators';
    protected $fillable = [
        'generator_name'
    ];
}
