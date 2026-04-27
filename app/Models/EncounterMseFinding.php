<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EncounterMseFinding extends Model
{
    protected $fillable = [
        'encounter_id',
        'mse_finding_id',
        'is_present',
        'remarks',
    ];

    protected $casts = [
        'is_present' => 'boolean',
    ];

    public function encounter(): BelongsTo
    {
        return $this->belongsTo(Encounter::class);
    }

    public function mseFinding(): BelongsTo
    {
        return $this->belongsTo(MseFinding::class);
    }
}
