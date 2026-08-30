<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Work extends Model
{
    //
    protected $fillable = [
        'name', 
        'postion',
        'github',
        'demo', 
        'framework',
        'description'
    ];

    function features() : HasMany {
        return $this->hasMany(
            feature
        )
    };
}
