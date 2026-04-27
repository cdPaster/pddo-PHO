<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ManagementPlanItem extends Model
{
    protected $fillable = [
        'encounter_id',
        'plan_category',
        'item_name',
        'details',
        'sort_order',
    ];

    public function encounter(): BelongsTo
    {
        return $this->belongsTo(Encounter::class);
    }
}
