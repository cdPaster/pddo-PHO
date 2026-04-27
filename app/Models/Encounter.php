<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Encounter extends Model
{
    protected $fillable = [
        'encounter_no',
        'patient_id',
        'provider_id',
        'facility_id',
        'consultation_datetime',
        'encounter_type',
        'reason_for_consultation_referral',
        'chief_complaint',
        'history_of_present_illness',
        'past_psychiatric_history',
        'previous_diagnosis_text',
        'previous_medications_treatments',
        'past_medical_surgical_history',
        'family_history',
        'personal_social_history',
        'developmental_history',
        'educational_occupational_history',
        'substance_use_alcohol',
        'substance_use_tobacco',
        'substance_use_drugs',
        'substance_use_none',
        'stressors_support_system',
        'advice_health_education_given',
        'follow_up_schedule',
        'remarks',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'consultation_datetime' => 'datetime',
        'substance_use_alcohol' => 'boolean',
        'substance_use_tobacco' => 'boolean',
        'substance_use_drugs' => 'boolean',
        'substance_use_none' => 'boolean',
    ];

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function provider(): BelongsTo
    {
        return $this->belongsTo(Provider::class);
    }

    public function facility(): BelongsTo
    {
        return $this->belongsTo(Facility::class);
    }

    public function riskAssessment(): HasOne
    {
        return $this->hasOne(RiskAssessment::class);
    }

    public function mentalStatusExamination(): HasOne
    {
        return $this->hasOne(MentalStatusExamination::class);
    }

    public function diagnoses(): HasMany
    {
        return $this->hasMany(EncounterDiagnosis::class);
    }

    public function prescriptions(): HasMany
    {
        return $this->hasMany(Prescription::class);
    }

    public function medicineDispenses(): HasMany
    {
        return $this->hasMany(MedicineDispense::class);
    }

    public function signatures(): HasMany
    {
        return $this->hasMany(EncounterSignature::class);
    }

    public function laboratoryRequests(): HasMany
    {
        return $this->hasMany(LaboratoryRequest::class);
    }

    public function referrals(): HasMany
    {
        return $this->hasMany(Referral::class, 'encounter_id');
    }
}
