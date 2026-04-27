<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Referral extends Model
{
    protected $table = 'referals';

    protected $fillable = [
        'encounter_id',
        'referred_to_facility_id',
        'referral_reason',
        'referral_notes',
        'status',
        'referred_at',
        'completed_at',
    ];

    protected $casts = [
        'referred_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    public function encounter(): BelongsTo
    {
        return $this->belongsTo(Encounter::class);
    }

    public function referredToFacility(): BelongsTo
    {
        return $this->belongsTo(Facility::class, 'referred_to_facility_id');
    }
}
