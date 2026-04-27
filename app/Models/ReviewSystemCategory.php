<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReviewSystemCategory extends Model
{
    protected $fillable = [
        'name',
        'sort_order',
    ];

    public function findings(): HasMany
    {
        return $this->hasMany(ReviewSystemFinding::class);
    }
}
