<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Medicine extends Model
{
    protected $fillable = [
        'generic_name',
        'brand_name',
        'formulation',
        'strength',
        'dosage_unit',
        'default_route',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function prescriptionItems(): HasMany
    {
        return $this->hasMany(PrescriptionItem::class);
    }

    public function medicineDispenseItems(): HasMany
    {
        return $this->hasMany(MedicineDispenseItem::class);
    }
}
