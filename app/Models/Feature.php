<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'by_work'
    ];
    
    public function work() : BelongsTo {
        return $this->belongsTo(Work::class, 'by_work');
    }
}
