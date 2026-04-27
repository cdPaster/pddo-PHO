<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Diagnosis extends Model
{
    protected $fillable = [
        'code',
        'coding_system',
        'description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function encounterDiagnoses(): HasMany
    {
        return $this->hasMany(EncounterDiagnosis::class);
    }
}
