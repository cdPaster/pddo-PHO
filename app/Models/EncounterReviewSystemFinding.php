<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EncounterReviewSystemFinding extends Model
{
    protected $fillable = [
        'encounter_id',
        'review_system_finding_id',
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

    public function reviewSystemFinding(): BelongsTo
    {
        return $this->belongsTo(ReviewSystemFinding::class);
    }
}
