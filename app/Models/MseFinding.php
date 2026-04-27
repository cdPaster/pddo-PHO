<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MseFinding extends Model
{
    protected $fillable = [
        'mse_section_id',
        'group_name',
        'finding_name',
        'finding_code',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function section(): BelongsTo
    {
        return $this->belongsTo(MseSection::class, 'mse_section_id');
    }

    public function encounterFindings(): HasMany
    {
        return $this->hasMany(EncounterMseFinding::class);
    }
}
