<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MedicineDispense extends Model
{
    protected $fillable = [
        'patient_id',
        'encounter_id',
        'dispensed_by_provider_id',
        'dispensed_at',
        'remarks',
    ];

    protected $casts = [
        'dispensed_at' => 'datetime',
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function encounter(): BelongsTo
    {
        return $this->belongsTo(Encounter::class);
    }

    public function dispensedByProvider(): BelongsTo
    {
        return $this->belongsTo(Provider::class, 'dispensed_by_provider_id');
    }

    public function items(): HasMany
    {
        return $this->hasMany(MedicineDispenseItem::class);
    }
}
