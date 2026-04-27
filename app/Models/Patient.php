<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'patient_no',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'full_name',
        'sex',
        'date_of_birth',
        'religion',
        'nationality',
        'civil_status',
        'educational_attainment',
        'occupation',
        'phic_number',
        'mother_maiden_name',
        'father_name',
        'address',
        'contact_no',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function encounters(): HasMany
    {
        return $this->hasMany(Encounter::class);
    }

    public function medicineDispenses(): HasMany
    {
        return $this->hasMany(MedicineDispense::class);
    }
}
