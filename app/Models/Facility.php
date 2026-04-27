<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Facility extends Model
{
    protected $fillable = [
        'name',
        'facility_type',
        'address',
        'contact_number',
        'email',
    ];

    public function encounters(): HasMany
    {
        return $this->hasMany(Encounter::class);
    }
}
