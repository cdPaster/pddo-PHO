<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MseSection extends Model
{
    protected $fillable = [
        'code',
        'name',
        'sort_order',
    ];

    public function findings(): HasMany
    {
        return $this->hasMany(MseFinding::class);
    }
}
