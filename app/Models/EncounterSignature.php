<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EncounterSignature extends Model
{
    protected $fillable = [
        'encounter_id',
        'provider_id',
        'signed_name',
        'designation',
        'signature_role',
        'signed_at',
        'signature_path',
    ];

    protected $casts = [
        'signed_at' => 'datetime',
    ];

    public function encounter(): BelongsTo
    {
        return $this->belongsTo(Encounter::class);
    }

    public function provider(): BelongsTo
    {
        return $this->belongsTo(Provider::class);
    }
}
