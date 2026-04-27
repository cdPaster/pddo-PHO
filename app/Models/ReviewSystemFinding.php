<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ReviewSystemFinding extends Model
{
    protected $fillable = [
        'review_system_category_id',
        'name',
        'sort_order',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ReviewSystemCategory::class, 'review_system_category_id');
    }

    public function encounterFindings(): HasMany
    {
        return $this->hasMany(EncounterReviewSystemFinding::class);
    }
}
