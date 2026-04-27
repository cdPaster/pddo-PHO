<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MentalStatusExamination extends Model
{
    protected $fillable = [
        'encounter_id',
        'general_observation',
        'speech',
        'mood',
        'affect',
        'affect_expression_summary',
        'thought_process_summary',
        'thought_content_summary',
        'perception',
        'sensorium_cognition_summary',
        'insight',
        'judgment_summary',
        'reliability_summary',
        'functional_summary',
        'mse_overall_notes',
        'global_functioning_score',
        'current_psychotherapy',
        'current_psychoactive_medication',
    ];

    protected $casts = [
        'current_psychotherapy' => 'boolean',
        'current_psychoactive_medication' => 'boolean',
    ];

    public function encounter(): BelongsTo
    {
        return $this->belongsTo(Encounter::class);
    }
}
