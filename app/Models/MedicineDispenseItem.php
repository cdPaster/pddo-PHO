<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicineDispenseItem extends Model
{
    protected $fillable = [
        'medicine_dispense_id',
        'medicine_id',
        'medicine_name_text',
        'quantity_received',
        'received_by_name',
        'date_ordered',
        'date_time_received',
    ];

    protected $casts = [
        'quantity_received' => 'decimal:2',
        'date_ordered' => 'date',
        'date_time_received' => 'datetime',
    ];

    public function medicineDispense(): BelongsTo
    {
        return $this->belongsTo(MedicineDispense::class);
    }

    public function medicine(): BelongsTo
    {
        return $this->belongsTo(Medicine::class);
    }
}
