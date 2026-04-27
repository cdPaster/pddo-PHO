<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiskAssessment extends Model
{
    protected $fillable = [
        'encounter_id',
        'preoccupations',
        'suicidal_ideation',
        'suicidal_ideation_history',
        'previous_attempts',
        'current_ideation',
        'impulsiveness',
        'viable_plan',
        'available_means',
        'setting_of_affairs',
        'previous_violence',
        'current_intent',
        'hostile_impulsiveness',
        'hostile_viable_plan',
        'hostile_available_means',
        'suicide_attempt',
        'self_harm_behavior',
        'homicidal_thoughts',
        'aggression',
        'none_flag',
        'remarks',
    ];

    protected $casts = [
        'preoccupations' => 'boolean',
        'suicidal_ideation' => 'boolean',
        'suicidal_ideation_history' => 'boolean',
        'previous_attempts' => 'boolean',
        'current_ideation' => 'boolean',
        'impulsiveness' => 'boolean',
        'viable_plan' => 'boolean',
        'available_means' => 'boolean',
        'setting_of_affairs' => 'boolean',
        'previous_violence' => 'boolean',
        'current_intent' => 'boolean',
        'hostile_impulsiveness' => 'boolean',
        'hostile_viable_plan' => 'boolean',
        'hostile_available_means' => 'boolean',
        'suicide_attempt' => 'boolean',
        'self_harm_behavior' => 'boolean',
        'homicidal_thoughts' => 'boolean',
        'aggression' => 'boolean',
        'none_flag' => 'boolean',
    ];

    public function encounter(): BelongsTo
    {
        return $this->belongsTo(Encounter::class);
    }
}
